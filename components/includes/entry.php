<?php 

class Entry extends Database {
    protected function setUsername($username) {
        $stmt = $this->connect()->prepare('INSERT INTO scoreboard username VALUES ?;');
        
        if(!$stmt->execute($username)) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function setScore($score) {
        $stmt = $this->connect()->prepare('INSERT INTO players score VALUES ?;');
        
        if(!$stmt->execute($score)) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }
    
    protected function checkUser($username) {
        $stmt = $this->connect()->prepare('SELECT username FROM scoreboard WHERE username = ?;');
        
        if(!$stmt->execute($username)) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
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