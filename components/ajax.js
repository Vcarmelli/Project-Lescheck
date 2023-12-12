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
                console.log(response);
            }
        });

    })
}