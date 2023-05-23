<?php
    session_start();
    
    $username = "";
    $email = "";
    $phone = "";
    $password = "";
    $id = "";
    $regnumber = "";
    $passport = "";
    $folder = "";
    $result = "";
    $host = "localhost";
    $dbuser = "root";
    $dbpass = '';
    $dbase = "registration";
    $errors = array();


    // Connect to the database
    $db = mysqli_connect($host, $dbuser, $dbpass, $dbase);

    
    // Log user in from login page
    if (isset($_POST['confirm'])) {
        // $username = mysqli_real_escape_string($db, $_POST["username"]);
        $paymentcode = mysqli_real_escape_string($db, $_POST["paymentcode"]);
       

        // // if there are no errors, save user to database
        if (count($errors) == 0) {
        //     $password = md5($password); //encrypt password before storing in database (security)
        //     // $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
            $query = "SELECT * FROM student_data WHERE paymentcode = '$paymentcode'";
            $result = mysqli_query($db, $query);
            
            if($row = mysqli_fetch_array($result)) {
                $program    = $row['program'];
                $course     = $row['course'];
                $surname    = $row['surname'];
                $firstname  = $row['firstname'];
                $othername  = $row['othername'];
                $phone      = $row['phone'];
                $state      = $row['state'];
                $email      = $row['email'];
            // }
            
                      
                //log user in
               
                $_SESSION['program'] = $program;
                $_SESSION['course'] = $course;
                $_SESSION['surname'] = $surname;
                $_SESSION['firstname'] = $firstname;
                $_SESSION['othername'] = $othername;
                $_SESSION['phone'] = $phone;
                $_SESSION['state'] = $state;
                $_SESSION['email'] = $email;
               
                $_SESSION['success']    = "You are now logged in";
                header('location: biodata.php'); 
            
            }else{
                // array_push($errors, "Wrong username/password combination");
                array_push($errors, "Invalid Payment Confirmation Code (PCC)");
            }
        }    
        
    }








    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION["username"]);
        header('location: login.php');
    }




?>



