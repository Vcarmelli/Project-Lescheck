<?php

class Formhandler extends Entry {
    private $username;
    private $score;

    public function __construct($username, $score) {
        $this->username = $username;
        $this->score = $score;
    }

    public function verifyPlayer() {
        if ($this->emptyInput() == false) {
            $this->setError('The player name field is required.');
            $this->redirectPage();
        }
        if ($this->invalidUn() == false) {
            $this->setError('Please enter a valid username.');
            $this->redirectPage();
        }

        $this->setUsername($this->username);
        $this->setScore($this->username, $this->score);
    }

    private function setError($message) {
        session_start();
        $_SESSION["error"] = $message;
        session_write_close();
    }

    private function redirectPage() {
        if($_POST["player"] == "one") {
            header("location: ../username.php?error=invalidUsername");
        } 
        else if ($_POST["player"] == "two") {
            header("location: ../username-playertwo.php?error=invalidUsername");
        }
        $_SESSION["error"] = '';
        exit();
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
}




