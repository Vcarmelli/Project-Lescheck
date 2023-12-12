<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&family=Poppins:ital,wght@0,100;0,300;0,400;0,600;0,900;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/index.css">
</head>
<body>
    <div class="wrap">
        <audio autoplay loop class="hidden-audio">
            <source src="./Top Ten - Jeremy Blake.mp3" type="audio/mp3">
            Your browser does not support HTML5 audio
        </audio>

        <div class="main-container">
            <div class="title-container">
                <div class="wrapper ten">
                    <div>
                        <h3 class="bounce">
                            <span>L</span>
                            <span>E</span>
                            <span>S</span>
                            <span>C</span>
                            <span>H</span>
                            <span>E</span>
                            <span>C</span>
                            <span>K</span>
                        </h3>
                    </div>
                </div>
                <audio class="hidden-audio">
                    <source src="./clicksound.mp3" type="audio/mpeg">
                    <source src="./clicksound.ogg" type="audio/ogg">
                    Your browser does not support HTML5 audio
                </audio>
            </div>
            <div class="button-container">
                <a href="./username.php"><button class="button" id="startButton">Start</button></a>
            </div>