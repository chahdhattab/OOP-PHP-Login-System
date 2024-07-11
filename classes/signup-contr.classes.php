<?php

class Signupcont extends Signup{
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
    public function uidTakenCheck(){
        if (!(this->checkUser($this->uid,$this->email))){
            $result= false;
        }
        else{
            $result=true;
        }
        return $result;
    }
    
    public function signupuser(){
        if($this->emptyInput()==false){
            //echo "empty input
            header ("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->pwdMatch()==false){
            //echo "unmatched password
            header ("location: ../index.php?error=unmatched password");
            exit();
        }
        if($this->invalidEmail()==false){
            //echo "Invalid email adress 
            header ("location: ../index.php?error=invalid email adress");
            exit();
        }
        if($this->invalidUid()==false){
            //echo "Invalid Uid
            header ("location: ../index.php?error=invalid username id ");
            exit();
        }
        if($this->uidTakenCheck()==false){
            //echo "username exits
            header ("location: ../index.php?error=username exits ");
            exit();
        }
        $this->setUser($this->uid,$this->pwd,$this->email);

    }
}