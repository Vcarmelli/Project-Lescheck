<?php

if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $score = 0;

    include "./database.php";
    include "./entry.php";
    include "./formhandler.php";

    $signin = new Formhandler($username, $score);

    $signin->verifyPlayer();

    header("location: ../index.php?error=none");
}