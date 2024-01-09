<?php

if(isset($_POST["submit"])) {
    
    include "./database.php";
    include "./entry.php";
    include "./formhandler.php";
    include "./ingame.php";

    if($_POST["player"] == "one") {
        $username = $_POST["username"];
        $score = 0;

        $signin = new Formhandler($username, $score);
        $signin->verifyPlayer();

        $ingame = new Ingame();
        $ingame->getPlayer($username);
    
        header("location: ../home.php?error=none");
    } else if ($_POST["player"] == "two") {
        session_start();
        $_SESSION["playername-prev"] = $_SESSION["playername"];
        $GLOBALS["firstplayer"] = $_SESSION["playername-prev"];
        session_write_close();

        $username = $_POST["username"];
        $score = 0;

        $signin = new Formhandler($username, $score);
        $signin->verifyPlayer();

        $ingame = new Ingame();
        $ingame->getPlayer($username);
        header("location: ../multiplayer.php?error=none");
    }
    
}