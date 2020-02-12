<?php

namespace App\Entity;

use PDO;


final class UserEntity extends BaseEntity
{
   
    public function create(){

    }
    public function getAll($page = 1, $limit = 10){
        $offest = ($page - 1) * $limit; 
        $users = $this->dbh->prepare("SELECT * FROM `users` ORDER BY createdAt DESC LIMIT ?, ?;");
        $users->bindParam(1, $limit, PDO::PARAM_INT);
        $users->bindParam(2, $offest,PDO::PARAM_INT);
        $users->execute();
        return $reports->fetchAll();
	}

	public function getByEmail($email){
        $user = $this->dbh->prepare("SELECT * FROM `user` WHERE `user`.`email` = :email;");
        $user->bindParam(':email', $email, PDO::PARAM_STR);        
		$user->execute();
		return $user->fetch();
		}
	
    public function getByID($id){
        $user = $this->dbh->prepare("SELECT * FROM `user` WHERE `user`.`userID` = :userID;");
		$user->bindParam(':userID', $id, PDO::PARAM_INT);       
		$user->execute();
        return $user->fetch();
    }
    
    public function update($uid, $data){
        $passwordSQL = "";
        if(isset($data['password'])){
            $passwordSQL = " `password` = :passwordHash , ";
        }
        $user = $this->dbh->prepare("UPDATE `user` SET `firstName` = :firstName ,`lastName` = :lastName, $passwordSQL modifiedAt = CURRENT_TIMESTAMP  WHERE `user`.`userID` = :userID;");
        $user->bindParam(':userID', $uid, PDO::PARAM_INT);       
        $user->bindParam(':firstName', $data['firstName'], PDO::PARAM_STR);       
        $user->bindParam(':lastName', $data['lastName'], PDO::PARAM_STR); 
        
        if(isset($data['password'])){      
            $user->bindParam(':passwordHash', $data['password'], PDO::PARAM_STR);       
        }

        return $user->execute();
    }

    public function delete(){

    }
	
}
