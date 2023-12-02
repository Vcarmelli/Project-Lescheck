<?php

// BACK-END FOR DATABASE
class Scores extends Database {

    public function __construct() {
        if(isset($_POST["action"])) {
            if($_POST["action"] == "save") {
                $this->save();
            }
            else {
                echo "<script>console.log('DI NAGANA? SCORES.PHP');</script>";
            }
        }
    }
    
    private function save() {
        $player = $_POST["username"];
        $result = $_POST["score"];
    
        try {
            $stmt = $this->connect()->prepare('UPDATE players SET score = ? WHERE username = ?;');
        
            if(!$stmt->execute(array($result, $player))) {
                $stmt = null;
                header("location: ../index.php?error=scoreboardNotUpdated");
                exit();
            }
            $stmt = null;
            echo 1;
        } 
        catch (Exception $e) {
            die("Query Failed in scores.php: " . $e->getMessage());
        }
    }


}

