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
    if (isset($_POST['elogin'])) {
        // $username = mysqli_real_escape_string($db, $_POST["username"]);
        $paymentCode = mysqli_real_escape_string($db, $_POST["paymentCode"]);
       

        // // if there are no errors, save user to database
        if (count($errors) == 0) {
        //     $password = md5($password); //encrypt password before storing in database (security)
        //     // $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
            $query = "SELECT * FROM users WHERE paymentCode = '$paymentCode'";
            $result = mysqli_query($db, $query);
            
            if($row = mysqli_fetch_array($result)) {
                $username = $row['username'];
                $passport = $row['passport'];
                $email = $row['email'];
                $regnumber = $row['regnumber'];
            // }
            
                      
                //log user in
               

                $_SESSION['username'] = $username;
                $_SESSION['passport'] = $passport;
                $_SESSION['email'] = $email;
                $_SESSION['phone'] = $phone;
                $_SESSION['regnumber'] = $regnumber;
                $_SESSION['success'] = "You are now logged in";
                header('location: dashboardq.php'); 
            
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



