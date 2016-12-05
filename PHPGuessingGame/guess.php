<!DOCTYPE html>
<html>
<head>
    <title>Guessing Game</title>
</head>
<body>
<h1>Feeling Lucky?</h1>
<p>
    <?php
    if( ! isset($_GET['guess'])) {
        echo("Missing guess parameter");
    } else if ( $_GET['guess'] == 0) {
        echo("Your guess is not valid");
    } else if ( $_GET['guess'] < 42) {
        echo("Your guess is too low");
    } else if ( $_GET['guess'] > 42) {
    } else {
        echo ("Congrats - It's your lucky day");
    }
    ?>
</p>
</body>
</html>