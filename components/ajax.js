function submitScore(score) {
    $(document).ready(function() {
        var data = {
            action: "save",
            score: score
        }

        $.ajax({
            url: '../includes/scores.php',
            type: 'POST',
            data: data,
            success: function(response) {
                if (response == 1) {
                    console.log("SUBMITSCORE");
                    window.location.href = '../leaderboard.php'; 
                } 
            }
        });

    })
}

function submitMultiScores(player1, player2, score1, score2) {
    $(document).ready(function() {
        var data = {
            action: "savetwo",
            player1: player1,
            player2: player2,
            score1: score1,
            score2: score2
        }

        $.ajax({
            url: '../includes/scores.php',
            type: 'POST',
            data: data,
            success: function(response) {
                if (response == 1) {
                    window.location.href = '../leaderboard.php'; 
                } 
            },
            error: function(xhr, status, error) {
                console.error("AJAX error:", status, error);
            }
        });

    })
}