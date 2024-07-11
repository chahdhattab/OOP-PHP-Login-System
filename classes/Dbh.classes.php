<?php

class Dbh{

    private $host="";
    private $user="";
    private $pwd="";
    private $dbname="OOPLogin ";

    protected function connect(){
        try {
            $dsn='mysql:host='.$this->host.';dbname='.$this->dbname;
            $pdo=new PDO($dsn,$user,$pwd);

            return $pdo;
        }
        catch(PDOExeption $e){
            print "Error ! : ".$e->getMessage()."<br>";
            die();
        }
    }





}