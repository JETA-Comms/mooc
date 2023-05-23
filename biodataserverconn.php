<?php
include "serverq.php";
   
    
    // Log user in from login page
    if (isset($_POST['registerq'])) {
        $student_id = mysqli_real_escape_string($db, $_POST["id"]); //I ran into big error for the entire code that makes the form not updating.
        //I debugged it on Friday 18, Nov 2022 when put "id". I put "student_id" as an array which was not suppose to be the argument
        //I started removing the code one by one, I removed WHERE and the entire table was updated, so I now detected that the argument should be id not student_id.
        $program      = mysqli_real_escape_string($db, $_POST["program"]);
        $course       = mysqli_real_escape_string($db, $_POST["course"]);
        $surname      = mysqli_real_escape_string($db, $_POST["surname"]);
        $firstname    = mysqli_real_escape_string($db, $_POST["firstname"]);
        $othername    = mysqli_real_escape_string($db, $_POST["othername"]);
        $state        = mysqli_real_escape_string($db, $_POST["state"]);
        $phone        = mysqli_real_escape_string($db, $_POST["phone"]);
        $email        = mysqli_real_escape_string($db, $_POST["email"]);
        $sponsname = mysqli_real_escape_string($db, $_POST["sponsname"]);
        $sponsnum = mysqli_real_escape_string($db, $_POST["sponsnum"]);
        $sponsmail = mysqli_real_escape_string($db, $_POST["sponsmail"]);
        $sponsrelationship = mysqli_real_escape_string($db, $_POST["sponsrelationship"]);
        



       

        // // if there are no errors, save user to database
        if (count($errors) == 0) {
            // $last_id = mysqli_insert_id($db);
            // if($last_id){
        
            $query = "UPDATE student_data SET  sponsname= '$sponsname', sponsnum= '$sponsnum', sponsmail= '$sponsmail', sponsrelationship= '$sponsrelationship' 
                        WHERE id= '$student_id' ";
                         //WHERE id= '$student_id'
            // $query = "UPDATE student_data SET  program= '$program', course= '$course', surname= '$surname', firstname= '$firstname', othername= '$othername', phone= '$phone', email= '$email'  
            //              ";
            // $query = "INSERT INTO student_data (sponsname, sponsnum, sponsmail, sponsrelationship) 
            //         VALUES ('$sponsname', '$sponsnum', '$sponsmail', '$sponsrelationship')";

            $result = mysqli_query($db, $query);
            // }

            if($result){
            
            
               
                $_SESSION['success']    = "Student Updated Successfully";
                header('location: paymentcode.php'); 
                exit(0);
            }
            else
            {
                $_SESSION['success']    = "Student Failed to Update";
                header('location: paymentcode.php'); 
                exit(0);

            }
            
            // }else{
            //     // array_push($errors, "Wrong username/password combination");
            //     array_push($errors, "Invalid Payment Confirmation Code (PCC)");
            // }
        }    
        
    }








    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION["username"]);
        header('location: login.php');
    }




?>



