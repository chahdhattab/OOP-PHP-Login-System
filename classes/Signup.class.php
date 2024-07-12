<?php

class Signing extends SignupDB {
    private $fullname;
    private $password;
    private $passwordrepeat;
    private $email;

    public function __construct($fullname, $password, $passwordrepeat, $email) {
        $this->fullname = $fullname;
        $this->password = $password;
        $this->passwordrepeat = $passwordrepeat;
        $this->email = $email;
    }

    public function emptyInput() {
        if (empty($this->fullname) || empty($this->password) || empty($this->passwordrepeat) || empty($this->email)) {
            $result = false; // should be true if fields are empty
        } else {
            $result = true; // should be false if all fields are filled
        }
        return $result;
    }
    

    public function invalidName() {
        // Allow letters, spaces, and possibly other characters as needed
        if (preg_match("/^[A-Za-zÀ-ÿ-' ]*$/u", $this->fullname)) {
            return true;  // Valid name format
        } else {
            return false; // Invalid name format
        }
    }
    

    public function invalidEmail() {
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    // Add a debug statement inside pwdMatch() to see what values are being compared
    public function pwdMatch() {
    
    if (trim($this->password) === trim($this->passwordrepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
    }

    

    public function signupNewUser() {
        // Debug output to check input values
        echo "Full Name: " . $this->fullname . "<br>";
        echo "Password: " . $this->password . "<br>";
        echo "Password Repeat: " . $this->passwordrepeat . "<br>";
        echo "Email: " . $this->email . "<br>";
        
        if ($this->invalidEmail() == false) {
            header("location: ../index.php?error=invalidemail");
            exit();
        }
        if ($this->invalidName() == false) {
            header("location: ../index.php?error=invalidusernameid");
            exit();
        }
        if ($this->emptyInput() == false) {
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if ($this->pwdMatch() == false) {
            header("location: ../index.php?error=unmatchedpassword");
            exit();
        }
        $this->setNewUser($this->fullname, $this->password, $this->email);
    }
    
}
?>
