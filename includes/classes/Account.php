<?php

class Account {


    public function __construct(){
    
    }

    public function register(){
        $this->validateUsername($username);
        $this->validateFirstName($firstName);
        $this->validateLastName($lastName);
        $this->validateEmails($email1, $email2);
        $this->validatePasswords($password1, $password2);
    }

    private function validateUsername($un){
        echo "something";
    }

    private function validateFirstName($fn){
        
    }

    private function validateLastName($ln){
        
    }

    private function validateEmails($em1, $em2){
        
    }

    private function validatePasswords($px1, $pw2){
        
    }
}


?>