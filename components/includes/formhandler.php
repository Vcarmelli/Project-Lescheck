<?php

class Formhandler extends Entry {
    private $username;
    private $score;

    public function __construct($username, $score) {
        $this->username = $username;
        $this->score = $score;
    }

    public function verifyPlayer() {
        if($this->emptyInput() == false) {
            header("location: ../index.php?error=emptyInput");
            exit();
        }
        if($this->invalidUn() == false) {
            header("location: ../index.php?error=invalidUsername");
            exit();
        }
        if($this->unTakenCheck() == false) {
            header("location: ../index.php?error=sameUsername");
            exit();
        }
    }


    private function emptyInput() {
        $result = false;
        if(empty($this->username) || empty($this->score)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result; 
    }


    private function invalidUn() { 
        $result = false;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result; 
    }

    private function unTakenCheck() {
        $result = false;
        if(!$this->checkUser($this->username)) {
            $result = false; 
        }
        else {
            $result = true;
        }
        return $result; 
    }
}




