<?php 

session_start()

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unset Variables</title>
</head>
<body>
    <h1>This site unsets the variables</h1>
    <?php 

    unset($_SESSION['views']);
    unset($_SESSION['browser']);

    ?>
    <br>
    <a href="read_views.php">Go to read_views.php page</a>
    <br>
    <a href="views1.php">Go to views1.php page</a>
    <br>
    <a href="destroy_all.php">Go to destroy_all.php page</a>
</body>
</html>

