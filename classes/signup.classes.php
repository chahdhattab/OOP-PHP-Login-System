<?php

class Signup extends Dbh{

    protected function setUser($uid,$pwd,$email){
        $sql='INSERT INTO users(users_id,users_pwd,users_email) VALUES (?,?,?);';
        $stmt=$this->connect()->prepare($sql);
        if(!$stmt->execute(array($uid,$pwd,$email))){
            $stml=NULL;
            header ("location: ../index.php?error=stmtfailed");
            exit();
        }
    }


    protected function checkUser($uid,$email){
        $sql='SELECT users_name FROM users WHERE users_uid = ?  OR users_email = ? ';
        $stmt=$this->connect()->prepare($sql);

        if(!$stmt->execute(array($uid,$email))){
            $stml=NULL;
            header ("location: ../index.php?error=stmtfailed");
            exit();
        }
        if($stmt->rowCount()>0){
            $checkresult= false;
        }
        else{
            $checkresult= true;
        }

        return $checkresult;
    }

}