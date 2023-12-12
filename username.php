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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <form class="main-container user-input" method="post" action="./includes/signin.php">
        <div class="title-container enter">
            <div class="wrapper ten">
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
        <div class="group">      
            <input type="text" name="username" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Player Name</label>
        </div>
        <button class="button" type="submit" name="submit" onClick="window.location.href='./index.php';">Enter Game</button>
    </form>
</body>
</html>