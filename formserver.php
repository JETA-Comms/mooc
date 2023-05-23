<?php
include 'serverq.php';
// For For biodata------------- Correct one
    // session_start();
    
       
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
                $student_id = $row['id'];
                $program    = $row['program'];
                $course     = $row['course'];
                $surname    = $row['surname'];
                $firstname  = $row['firstname'];
                $othername  = $row['othername'];
                $phone      = $row['phone'];
                $state      = $row['state'];
                $email      = $row['email'];
                $sponsname      = $row['sponsname'];
                $sponsnum      = $row['sponsnum'];
                $sponsmail      = $row['sponsmail'];
                $sponsrelationship      = $row['sponsrelationship'];
                
            // }
            
                      
                //log user in
               
                $_SESSION['id'] = $student_id;
                $_SESSION['program'] = $program;
                $_SESSION['course'] = $course;
                $_SESSION['surname'] = $surname;
                $_SESSION['firstname'] = $firstname;
                $_SESSION['othername'] = $othername;
                $_SESSION['phone'] = $phone;
                $_SESSION['state'] = $state;
                $_SESSION['email'] = $email;
                $_SESSION['sponsname'] = $sponsname;
                $_SESSION['sponsnum'] = $sponsnum;
                $_SESSION['sponsmail'] = $sponsmail;
                $_SESSION['sponsrelationship'] = $sponsrelationship;

               
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



