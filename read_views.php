<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Variables</title>
</head>
<body>
    <h1>This site reads the variables</h1>
    <?php  
    echo '<p>Your views is: ' .  $_SESSION['views'] . '</p>';
    echo '<p>Your browser is: ' .  $_SESSION['browser'] . '</p>';
    echo '<p>The website author is: ' .  $_SESSION['name'] . '</p>';
    foreach($_SESSION['grades'] as $grade){
        echo "<li>$grade</li>";
    }
    ?>

    <br>
    <a href="unset_views.php">Go to unset_views.php page</a>
    <br>
    <a href="views1.php">Go to views1.php page</a>
    <br>
    <a href="destroy_all.php">Go to destroy_all.php page</a>
    
</body>
</html>
