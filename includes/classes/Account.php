<?php

class Account {

    private $errorArray;

    public function __construct(){
        $this->errorArray = array();
    }

    public function register($un, $fn, $ln, $em1, $em2, $pw1, $pw2){
        $this->validateUsername($un);
        $this->validateFirstName($fn);
        $this->validateLastName($ln);
        $this->validateEmails($em1, $em2);
        $this->validatePasswords($pw1, $pw2);

        if(empty($this->errorArray)){
            //Insert into db
            return true;
        } else {
            return false;
        }
    }

    public function getError($error){
        if(!in_array($error, $this->errorArray)) {
            $error = "";
        }
        return "<span class='errorMessage'>$error</span>";
    }

    private function validateUsername($un){
        if (strlen($un) > 25 || strlen($un) < 5) {
            array_push($this->errorArray, "Your username must be greater than 5 and thess tha 25 characters in length");
            return;
        }
        //Todo check is username exists
    }

    private function validateFirstName($fn){
        if (strlen($fn) > 25 || strlen($fn) < 2) {
            array_push($this->errorArray, "Your first name must be greater than 2 and thess tha 25 characters in length");
            return;
        }
    }

    private function validateLastName($ln){
        if (strlen($ln) > 25 || strlen($ln) < 2) {
            array_push($this->errorArray, "Your last name must be greater than 2 and thess tha 25 characters in length");
            return;
        }
    }

    private function validateEmails($em1, $em2){
        if($em != $em2){
            array_push($this->errorArray, "Your emails don't match");
            return;
        }

        if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
            array_push($this->errorArray, "Email is invalid");
            return;
        }

        //Todo: check that username isn't in use.

    }

    private function validatePasswords($px1, $pw2){
        if($pw1 != $pw2){
            array_push($this->errorArray, "Your passwords don't match");
            return;
        }

        if(preg_match('/[^A-Za-z0-9]/', $pw1)){
            array_push($this->errorArray, "Your password can only contain letters and numbers.");
            return;
        }

        if (strlen($pw) > 30 || strlen($pw) < 5) {
            array_push($this->errorArray, "Your password must be greater than 5 and thess tha 30 characters in length");
            return;
        }
    }
}


?>