<?php

class Dbh{

    private $host="localhost";
    private $user="";
    private $pwd="root";
    private $dbname="OOPLogin ";

    protected function connect(){
        try {
            $dsn='mysql:host='.$this->host.';dbname='.$this->dbname;
            $pdo=new PDO($dsn,$this->user,$this->pwd);

            return $pdo;
        }
        catch(PDOExeption $e){
            print "Error ! : ".$e->getMessage()."<br>";
            die();
        }
    }





}