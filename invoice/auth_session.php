<?php
    session_start();
    if(!isset($_SESSION["email"])) {
        header("Location: login.php");
        exit();
    }


    if(!isset($_SESSION["appnumber"])) {
        header("Location: exam.php");
        exit();
    }
?>