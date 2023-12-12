<?php
    session_start();
    session_unset();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&family=Londrina+Solid:wght@100;300;400;900&family=Poppins:wght@400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/instruction.css">
</head>
<body>
    <div class="box">
        <div class="title-container">
            <h1 class="instr-title">LesCheck</h1>
            <h4 class="sub-title">Instruction</h4>
        </div>
        <div class="container">
            <div class="column">
                <h2>How to play</h2>
                <p>1. Choose to play against the computer or with a friend
                    <br>2. Press on a piece to select it and then choose a move or jump, press it again to put it down
                    <br> 3. Always keep your pieces doubled up diagonally to block your opponent's jumps
                    <br> 4. Quickly get your pieces promoted to kings so they can move forward and backward across the board
                    <br> 5. Try to lure your opponent into a double or triple jump trap
                    <br> 6. Use the side of the board to prevent being jumped, but don't get stuck!</p>
            </div>

            <div class="column">
                <h2>Rules</h2>
                <p>The goal of Checkers is to remove all your opponent's pieces from the board or prevent them from making a move.
                    <br>
                    <br>Pieces move diagonally, always staying on the dark squares. Pieces can "slide" to an adjacent open square or "jump" over an opponent's pieces, removing them from the board. Normal pieces move toward the opposite side of the board.
                    <br>
                    <br>If the force jumps rule is in effect, the player must make a jump move when available. In the event of a double or triple jump opportunity, only the first jump is required.
                    <br>
                    <br>When a normal piece reaches the last row on the opposite side of the board it is promoted into a "King" piece. Promoted pieces may move towards either side of the board.
                    <br>
                    <br>The game is over when one player has no remaining pieces or can't make any valid moves. You may also elect a draw if each team only has 1 king remaining.</p>
            </div>
        </div>
        <div class="button-container">
            <a href="./index.php"><button class="button">Back to Menu</button></a>
        </div>
    </div>
    
</body>
</html>
