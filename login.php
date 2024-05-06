<?php
    include('db_config.php');
    foreach($_POST as $key => $value) {
       echo "{$key}: {$value} <br>";
    };

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <?php include('templates/header.php') ?>
    <form action="index.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" >
        <label for="">Password</label>
        <input type="text" name="password">
        <input type="submit" name="submit">
        <a href="register.php">register</a>
    </form>
    <?php include('templates/footer.php') ?>
</body>
</html>