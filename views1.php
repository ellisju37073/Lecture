<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Views is a great page</title>
</head>
<body>
    <h1>Creating Variables</h1>
    <?php 
    if (!isset($_SESSION['views'])) {
        $_SESSION['views'] = 0;
    } else {
        $_SESSION['views'] = $_SESSION['views'] + 1;
    }

    if (!isset($_SESSION['browser'])) {
        $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
    }

    if (!isset($_SESSION['name'])) {
        $_SESSION['name'] = 'Justin Ellis';
    }

    if (!isset($_SESSION['grades'])) {
        $_SESSION['grades'] = [100, 90, 75];}

    echo '<p>Your views is: ' .  $_SESSION['views'] . '</p>';
    echo '<p>Your browser is: ' .  $_SESSION['browser'] . '</p>';
    echo '<p>The website author is: ' .  $_SESSION['name'] . '</p>';
    foreach($_SESSION['grades'] as $grade){
        echo "<li>$grade</li>";
    }
    ?>
    <br>
    <a href="read_views.php">Go to read_views.php page</a>
    <br>
    <a href="unset_views.php">Go to unset_views.php page</a>
    <br>
    <a href="destroy_all.php">Go to destroy_all.php page</a>


</body>
</html>