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
            <h4 class="sub-title">Leaderboard</h4>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Players</th>
                    <th>Scores</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include './includes/database.php';

                    $dbase = new Database();
                    $stmt = $dbase->connect()->prepare('SELECT * FROM players;');
                    $stmt->execute();
                    $counter = 0;
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                            <td><?php echo $row["username"]; ?></td>
                            <td><?php echo $row["score"]; ?></td>
                        </tr>
                    <?php } 
                ?>
            </tbody>
        </table>


        <div class="button-container">
            <a href="./index.php"><button class="button">Back to Menu</button></a>
        </div>
    </div>
    
</body>
</html>
