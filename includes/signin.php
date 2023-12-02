<?php

if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $score = 0;

    include "./database.php";
    include "./entry.php";
    include "./formhandler.php";
    include "./ingame.php";

    $signin = new Formhandler($username, $score);

    $signin->verifyPlayer();

    $ingame = new Ingame();

    $ingame->getPlayer($username);

    header("location: ../index.php?error=none");
}