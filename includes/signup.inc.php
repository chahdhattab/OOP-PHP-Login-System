<?php
echo"hello";
//grapping data from the userinput
if(isset($_POST["submit"])){
    $uid=$_POST["uid"];
    $pwd=$_POST["pwd"];
    $pwdrepeat=$_POST["pwdrepeat"];
    $email=$email["email"];
}

echo"user = ".$uid;

/*//intantiate a user
include "class-autoload.inc.php";

$signup=new Signupcontr($uid,$pwd,$pwdrepeat,$email); 

//Running error Handlers and user signup
$signup->signupuser();
//send the user to the front page 
header ("location: ../index.php?error=none");*/