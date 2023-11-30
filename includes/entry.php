<?php 

class Entry extends Database {
    protected function setUsername($username) {
        $stmt = $this->connect()->prepare('INSERT INTO players (username) VALUES ?;');
        
        if(!$stmt->execute(array($username))) {
            $stmt = null;
            header("location: ../index.php?error=setUNfailed");
            exit();
        }
        $stmt = null;
    }

    protected function setScore($score) {
        $stmt = $this->connect()->prepare('INSERT INTO players score VALUES ?;');
        
        if(!$stmt->execute($score)) {
            $stmt = null;
            header("location: ../index.php?error=setScoreFailed");
            exit();
        }
        $stmt = null;
    }
    
    protected function checkUser($username) {
        $stmt = $this->connect()->prepare('SELECT username FROM players WHERE username = ?;');
        
        if(!$stmt->execute(array($username))) {
            $stmt = null;
            header("location: ../index.php?error=checkUserFailed");
            exit();
        }

        $resultCheck = false; 
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        }
        else {
            $resultCheck = true;
        }
        
        return $resultCheck;    
    }
}