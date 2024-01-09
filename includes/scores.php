<?php
// BACK-END FOR DATABASE
include './database.php';
include "./ingame.php";

if(isset($_POST["action"])) {
    if($_POST["action"] == "save") {
        save();
    } 
    else if ($_POST["action"] == "savetwo") {
        saveScores();
    }
    else {
        echo "<script>console.log('ERROR IN SCORES.PHP');</script>";
    }
}
 
function save() {
    $dbase = new Database();
    $ingame = new Ingame();
    $player = $ingame->getPlayerName();
    $result = $_POST["score"];

    try {
        $stmt = $dbase->connect()->prepare('UPDATE players SET score = ? WHERE username = ?;');
    
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

function saveScores() {
    $dbase = new Database();
    $player1 = $_POST["player1"];
    $player2 = $_POST["player2"];
    $result1 = $_POST["score1"];
    $result2 = $_POST["score2"];

    try {
        $sql = 'UPDATE players 
                SET score = CASE username
                    WHEN ? THEN ? 
                    WHEN ? THEN ? 
                    END WHERE username IN (?, ?);';
        $stmt = $dbase->connect()->prepare($sql);
    
        if(!$stmt->execute(array($player1, $result1, $player2, $result2, $player1, $player2))) {
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
