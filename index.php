<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LesCheck | Home</title>
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
                <a href="./game.php"><button class="button" id="startButton">Player vs AI</button></a>
                <a href="./multiplayer.php"><button class="button" id="multiplayerButton">Player vs Player</button></a>
                <a href="./instruction.php"><button class="button" id="instructionsButton">Instructions/Exit Player</button></a>
            </div>
            <div class="greet-user">
                <?php 
                    if(isset($_SESSION["playername"])) {
                ?>
                        <h1>Welcome, <?php echo $_SESSION["playername"]; ?></h1>
                <?php
                    } 
                    else {
                ?>
                        <h1>WALANG PLAYER</h1>
                <?php
                    }
                ?>
            </div>
            
        </div>
        <DIV class="spinning">
            <DIV class="object3d chess-defaults">
                <!-- The Stage -->
                <div class="reusable-rect main-stage">
                    <div class="sides side1"></div>
                    <div class="sides side2"></div>
                
                    <!-- Elements over Stage -->
                    <div class="main-elements">
                        <DIV class="board">
                            <!-- RED -->
                            <div class="piece PAWN" style="--v:5;--h:1;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div>
                        
                            <div class="piece PAWN" style="--v:5;--h:3;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div>
                        
                            <div class="piece PAWN" style="--v:5;--h:5;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div>
                            
                            <div class="piece PAWN" style="--v:5;--h:7;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div>
                        
                            <div class="piece PAWN" style="--v:6;--h:0;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div>
                        
                            <div class="piece PAWN" style="--v:6;--h:2;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div>
                        
                            <div class="piece PAWN" style="--v:6;--h:4;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div>
                            
                            <div class="piece PAWN" style="--v:6;--h:6;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div>
                            
                            <div class="piece PAWN" style="--v:7;--h:1;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div>
                        
                            <div class="piece PAWN" style="--v:7;--h:3;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div>
                        
                            <div class="piece PAWN" style="--v:7;--h:5;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div>
                            
                            <div class="piece PAWN" style="--v:7;--h:7;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div> 
                            
                            <!-- BLUE -->
                            <div class="piece BLUE PAWN" style="--v:0;--h:0;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div>
                        
                            <div class="piece BLUE PAWN" style="--v:0;--h:2;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div>
                        
                            <div class="piece BLUE PAWN" style="--v:0;--h:4;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div>
                            
                            <div class="piece BLUE PAWN" style="--v:0;--h:6;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div>
                        
                            <div class="piece BLUE PAWN" style="--v:1;--h:1;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div>
                        
                            <div class="piece BLUE PAWN" style="--v:1;--h:3;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div>
                        
                            <div class="piece BLUE PAWN" style="--v:1;--h:5;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div>
                            
                            <div class="piece BLUE PAWN" style="--v:1;--h:7;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div>
                            
                            <div class="piece BLUE PAWN" style="--v:2;--h:0;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div>
                        
                            <div class="piece BLUE PAWN" style="--v:2;--h:2;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div>
                        
                            <div class="piece BLUE PAWN" style="--v:2;--h:4;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div>
                            
                            <div class="piece BLUE PAWN" style="--v:2;--h:6;">
                                <div class="reusable-rect piece-base"> <div class="sides side1"></div> <div class="sides side2"></div> </div>
                            </div>           
                        </DIV>
                    </div>
                </div>
            </DIV>
        </DIV>
        <div class="circles">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <script type="text/javascript" src="./components/init.js"></script>
</body>
</html>

