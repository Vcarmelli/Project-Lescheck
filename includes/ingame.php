<?php

class Ingame extends Database {

    public function getPlayer($username) {
        $stmt = $this->connect()->prepare('SELECT * FROM players WHERE username = ?;');

        if(!$stmt->execute(array($username))) {
            $stmt = null;
            header("location: ../index.php?error=ingamefailed");
            exit();
        }

        if($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../index.php?error=userNotFound");
            exit();
        }

        $player = $stmt->fetchAll(PDO::FETCH_ASSOC);

        session_start();
        $_SESSION["playerid"] = $player[0]["player_id"];
        $_SESSION["playername"] = $player[0]["username"];
        $stmt = null;
    }

}