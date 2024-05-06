<?php

    $db_server = 'localhost';
    $db_user = 'root';
    $db_pass= '';
    $db_name = "testauth";
    $con = "";



    try{ 
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
        echo 'is conected';
    }catch(mysqli_sql_exception){
        echo 'is not conection';
    }

?>