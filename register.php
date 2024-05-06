<?php

    include('db_config.php');


    // $password =  $_POST['password'];
    // $password_double =  $_POST['password_duble'];
    $options = array('Moldova', 'Russiaa', 'Mackdac', 'Antilopa');

    // setcookie('test_cookies', 'pizza', time() + (864000 * 2), '/',  '' ,'' ,true);

    // $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // $password_verify = password_verify($password_double, $password_hash) ? 'isValid': 'invalid';

    if(isset($_POST['submit'])){
        $username =  $_POST['username'];
        $password =  $_POST['password'];

        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (username, password) VALUES ('{$username}', '{$password_hash}')";

        try{
            mysqli_query($conn, $sql);
        }
        catch(mysqli_sql_exception){
            echo 'Could not register user';
        }

        mysqli_close($conn);
    }

  
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
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" >
        <label for="country">Country</label>
        <select name="country" id="country ">
            <?php
                foreach($options as $option){
                    echo "<option value='{$option}' >{$option}</option>";
                }
            ?>
        </select>
        <label for="password">Password</label>
        <input type="text" name="password" id="password">
        <label for="password_duble">Repeat password</label>
        <input type="text" name="password_duble" id="password_duble">
        <?php echo $password_verify ?>
        <input type="submit" name="submit">
        <a href="login.php">login</a>
    </form>
    <?php include('templates/footer.php') ?>
</body>
</html>