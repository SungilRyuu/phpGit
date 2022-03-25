<?php

    include "../connect/session.php";
    unset($_SESSION['youEmail']);
    unset($_SESSION['memberID']);
    unset($_SESSION['youName']);

    //메인 
    Header("Location: ../pages/main.php");
?>