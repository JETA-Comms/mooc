<?php
    session_start();
    if(!isset($_SESSION["generate"])) {
        header("Location: app-form.php");
        exit();
    }


    // if(!isset($_SESSION["appnumber"])) {
    //     header("Location: exam.php");
    //     exit();
    // }
?>