<?php

class Signupcont{
    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;

    public function __construct($uid,$pwd,$pwdrepeat,$email){
        $this->uid=$uid;
        $this->pwd=$pwd;
        $this->pwdrepeat=$pwdrepeat;
        $this->email=$email;

    }
    public function emptyInput(){
        if(empty($this->uid) || empty($this->pwd) || empty($this->pwdrepeat) || (empty($this->pwdrepeat))){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
    }

    public function invalidUid(){
        if (!preg_match("/^[a-ZA-ZO-9]*$/", $this->uid)){
            $result=true;
        }
        else{
            $result=false;
        }
    }

    public function invalidEmail(){
        if (!filter_var ($this->email, FILTER_VALIDATE_EMAIL)){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
    
    }

    public function pwdMatch(){
        if ($this->pwd===$this->pwdrepeat){
            $result= true;
        }
        else{
            $result=false;
        }
        return $result;
    }

       


}