<?php
    $host = "localhost";
    $user = "sungil";
    $pass = "qlalfqjsghtlqkf1!";
    $db = "sungil";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    if(mysqli_connect_errno()){
        echo "DATABASE Connect False";
    } else {
        //echo "DATABASE Connect True";
    }
?>