<?php

namespace App\Entity;

use PDO;


final class ReportsEntity extends BaseEntity
{
   
    public function create(){

    }
    public function getAll($page = 1, $limit = 10, $isAdmin = 0){
        $offest = ($page - 1) * $limit; 
        if($isAdmin){
            $reports = $this->dbh->prepare("SELECT 
                `report`.`title`, `report`.`userID`, `report`.`createdAt`,
                `report`.`reportID`, `user`.`firstName`, 
                `user`.`lastName`
                FROM `report`, `user` 
                WHERE `report`.`userID` = `user`.`userID` 
                ORDER BY `createdAt` DESC 
                LIMIT ?, ?;");
        }else{
            $reports = $this->dbh->prepare("SELECT 
                `report`.`title`, `report`.`userID`, `report`.`createdAt`,
                `report`.`reportID`, `report`.`tags`, `user`.`firstName`, 
                `user`.`lastName`
                FROM `report`, `user`
                WHERE `report`.`userID` = `user`.`userID` AND 
                (
                    `report`.`isPublic` = 1 
                    OR
                    `report`.`userID` = :userID
                    OR
                    `user`.`userID` IN 
                    (
                        SELECT `userID` 
                        FROM `permission` 
                        WHERE
                        `permission`.`reportID` = :reportID 
                        AND
                        `permission`.`userID` = :userID 
                        OR 
                        `permission`.`groupID` = :userID 
                    )
                    OR
                    `user`.`userID` IN 
                    (
                        SELECT `userID` 
                        FROM `permission`,`groupID`,`groupMembers`
                        WHERE
                        `permission`.`reportID` = :reportID 
                        AND
                        `permission`.`groupID` = `groupMembers`.`groupID`  
                        AND
                        `groupMembers`.`groupID` = :userID
                    )                     
                )

                ORDER BY createdAt DESC
                LIMIT ?, ?;");
        }

        $reports->bindParam(1, $offest,PDO::PARAM_INT);
        $reports->bindParam(2, $limit, PDO::PARAM_INT);
        $reports->execute();
        $results = $reports->fetchAll();

        $tagsEntity = new \App\Entity\TagsEntity($this->dbh);
        foreach($results as $reportKey => $report){ 
            $results[$reportKey]['tags'] = $tagsEntity->get($report['reportID']);
        }
        return $results;
    }
    public function getByID($id){

        // fetch report details with view permission
        $report = $this->dbh->prepare("SELECT *
        FROM `report`, `user`
        WHERE 
        `report`.`userID` = `user`.`userID`
        AND
       `report`.`reportID` = :reportID
        AND 
        (
            `report`.`isPublic` = 1 
            OR
            `report`.`userID` = :userID
            OR 
            `user`.`isAdmin` = 1
        )
        ORDER BY `report`.`createdAt` DESC");
        $report->bindParam(':reportID', $id, PDO::PARAM_INT);
        $report->bindParam(':userID', $_SESSION['userInfo'], PDO::PARAM_INT);
        $report->execute();
        
        $result['report'] =  $report->fetch();
        unset($report);
        
        // fetch attachments 
        $attachments =  $this->dbh->prepare("SELECT * FROM `attachment` WHERE `reportID` = :reportID");
        $attachments->bindParam(':reportID', $id, PDO::PARAM_INT);
        $attachments->execute();
        $result['attachments'] =  $attachments->fetchAll();
        unset($attachments);

        $tagsEntity = new \App\Entity\TagsEntity($this->dbh);
        $result['tags'] = $tagsEntity->get($result['report']['reportID']);

        
        return $result;
    }
    
    public function getByUserID($id){
        $reports = $this->dbh->prepare("SELECT  
        `report`.`title`, `report`.`userID`, `report`.`createdAt`,
        `report`.`reportID`, `user`.`firstName`, 
        `user`.`lastName`
        FROM `report`, `user` WHERE `report`.`userID` = :userID AND `user`.`userID` = `report`.`userID`;");
        $reports->bindParam(':userID', $id, PDO::PARAM_INT);
        $reports->execute();
        $reports = $reports->fetchAll();
        
        $tagsEntity = new \App\Entity\TagsEntity($this->dbh);
        foreach($reports as $reportKey => $report){ 
            $reports[$reportKey]['tags'] = $tagsEntity->get($report['reportID']);
        }

        return $reports;
    }    
    public function update(){
        
    }
    public function delete(){

    }

	
}
