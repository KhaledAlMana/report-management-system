<?php

namespace App\Entity;

use PDO;


final class TagsEntity extends BaseEntity
{

    public function create(){

    }
    
    public function get($reportID){
        $tags = $this->dbh->prepare("SELECT `tag`.`name` FROM `reportTags`,`tag` WHERE `reportTags`.`reportID` = ? AND `tag`.`tagID` = `reportTags`.`tagID`;");
        $tags->execute([$reportID]);
        return $tags->fetchAll(PDO::FETCH_COLUMN); 
    } 

    public function update(){

    }

    public function delete(){

    }
	
}
