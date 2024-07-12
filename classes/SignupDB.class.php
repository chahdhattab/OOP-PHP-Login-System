<?php

class SignupDB extends Dbh {

    protected function setNewUser($fullname, $password, $email) {
        try {
            // Vérifier si l'email est déjà utilisé
            $sql = 'SELECT email FROM users WHERE email = ?';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$email]);
            $result = $stmt->fetch();

            if ($result) {
                throw new Exception("Email already in use");
            }

            // Hacher le mot de passe
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insérer un nouvel utilisateur
            $sql = 'INSERT INTO users (full_name, password, email) VALUES (?, ?, ?)';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$fullname, $hashedPassword, $email]);
            
            echo "User successfully registered";
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
