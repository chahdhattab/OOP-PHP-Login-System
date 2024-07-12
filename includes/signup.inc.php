<?php

include "../classes/Dbh.class.php";
include "../classes/SignupDB.class.php";
include "../classes/Signup.class.php";

if (isset($_POST["submit"])) {
    $fullname = $_POST["fname"];
    $pwd = $_POST["pwd"];
    $pwdrpt=$_POST['pwdrepeat'];
    $email = $_POST["email"];
}

$newuser=new Signing($fullname,$pwd,$pwdrpt,$email);
$newuser->signupNewUser();

echo "Welcome".$fullname;