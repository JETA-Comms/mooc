<?php

    $server = "localhost";
    $name = "root";
    $password = "";
    $dbname = "cbe";


    //Connect to the database
    $db = mysqli_connect($server, $name, $password, $dbname);

    //If the Submit button is clicked it will submit all the questions to the database
    if (isset($_POST["submit"])) {
        $question = mysqli_real_escape_string($db, $_POST["question"]);
        $optA = mysqli_real_escape_string($db, $_POST["optA"]);
        $optB = mysqli_real_escape_string($db, $_POST["optB"]);
        $optC = mysqli_real_escape_string($db, $_POST["optC"]);
        $optD = mysqli_real_escape_string($db, $_POST["optD"]);
        $optE = mysqli_real_escape_string($db, $_POST["optE"]);
        $img = mysqli_real_escape_string($db, $_FILES["img"] ["name"]);
        $tempname = mysqli_real_escape_string($db, $_FILES["img"] ["temp_name"]);
        $folder = "./img". $img;
        $ans = mysqli_real_escape_string($db, $_POST["answer"]);


        if (move_upload_file($_FILES["img"] ["temp_name"], $folder)){
            echo "The file" . basename($_FILES["img"]["name"]). "has been uploaded successfully";
        }else{
            echo "error to upload file";
        }

        $query = "INSERT INTO tablename (question, optA, optB, optC, optC, optD, optE, img, ans)
                  VALUES ('$question', '$optA', '$optB', '$optC', '$optD', '$optD', '$optE', '$optD', '$img', '$ans')";
        
        if (mysqli_query($db, $query)){
            print_r($folder);
        }
    }






?>