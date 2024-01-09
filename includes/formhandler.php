<?php

class Formhandler extends Entry {
    private $username;
    private $score;
    private $error;

    public function __construct($username, $score) {
        $this->username = $username;
        $this->score = $score;
    }

    public function verifyPlayer() {
        if ($this->emptyInput() == false) {
            $this->setError('The player name field is required.');
            header("location: ../username.php?error=emptyUsername");
            exit();
        }
        if ($this->invalidUn() == false) {
            $this->setError('Please enter a valid username.');
            header("location: ../username.php?error=invalidUsername");
            exit();
        }
        if ($this->unTakenCheck() == false) {
            $this->setError('This username is already taken.');
            header("location: ../username.php?error=sameUsername");
            exit();
        }

        $this->setUsername($this->username);
        $this->setScore($this->username, $this->score);
    }


    private function setError($message) {
        session_start();
        $_SESSION["error"] = $message;
        session_write_close();
    }
    private function emptyInput() {
        $result = false;
        if(empty($this->username) || $this->score < 0) {
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




