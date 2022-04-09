<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destroy all</title>
</head>
<body>
    <h1>This page destroys all variables in this webpage</h1>
    <?php 
    session_destroy()
    ?>
        <br>
    <a href="read_views.php">Go to read_views.php page</a>
    <br>
    <a href="views1.php">Go to views1.php page</a>
</body>
</html>