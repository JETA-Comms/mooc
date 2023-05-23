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

    // if the registration button is clicked 
    if (isset($_POST["register"])) {
        $username   = mysqli_real_escape_string($db, $_POST["username"]);
        $email      = mysqli_real_escape_string($db, $_POST["email"]);
        $phone      = mysqli_real_escape_string($db, $_POST["phone"]);
        $id      = mysqli_real_escape_string($db, $_POST["id"]);
        $regnumber  = mysqli_real_escape_string($db, $_POST["regnumber"]); //This was added on the 4th of Nov, 2022. (I put it when the unique code is not working. It now worked when I inserted it)
        $paymentCode      = mysqli_real_escape_string($db, $_POST["paymentCode"]); //This was added on Nov 13, 2022 for Payment Confirmation Code.
        $passport   = mysqli_real_escape_string($db, $_FILES["passport"]["name"]);
        $tempname   = mysqli_real_escape_string($db, $_FILES["passport"]["tmp_name"]);
        $folder     = "./passports/" . $passport;
        $password_1 = mysqli_real_escape_string($db, $_POST["password_1"]);
        $password_2 = mysqli_real_escape_string($db, $_POST["password_2"]);


        // ensure that form fields are filled properly
        if (empty($username)) {
            array_push($errors, "Username is required");
        }

        if (empty($email)) {
            array_push($errors, "Email is required");
        }

        if (empty($phone)) {
            array_push($errors, "Mobile No. is required");
        }


        if (empty($password_1)) {
            array_push($errors, "Password is required");
        }

        if (move_uploaded_file($_FILES["passport"]["tmp_name"], $folder)) {
            echo "The file ". basename($_FILES["passport"]["name"]). " has been uploaded.";
            $msg = "Image uploaded successfully";
            $css_class = "alert-success";
        } else {
            $msg = "Failed to upload";
            $css_class = "alert-danger";
        }


        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        }

        // if there are no errors, save user to database
        if (count($errors) == 0) {
            $password = md5($password_1); //encrypt password before storing in database (security)
            //I was unable to login because I did not put md5(password encryption) and it really gimme tough time
            $sql = "INSERT INTO users (username, email, phone, password, passport) 
                    VALUES ('$username', '$email', '$phone', '$password', '$passport')";
            

            
            if (mysqli_query($db, $sql)) {
     

                //This section is to generate unique user ID (In my own case I call it Registration Number for the students)
                $last_id = mysqli_insert_id($db);
                if($last_id){
                    // $code = rand(1,99999);
                    // $regnumber = "JETA/".$code."/".$last_id;
                    $year = date("Y");
                    $regnumber = "JETA/"."DSA/".$year."/".$last_id;
                    $query = "UPDATE users SET regnumber ='".$regnumber."' WHERE id = '".$last_id."'";
                    $res = mysqli_query($db, $query);
                }

                if($last_id){
                    $code = rand(1,999999999999);
                    $paymentCode = $code;
                    // $query = "UPDATE users SET paymentCode ='$payementCode' WHERE id = '$last_id'"; I made error here instead of $paymentCode I wrote (payementCode)
                    $query = "UPDATE users SET paymentCode ='$paymentCode' WHERE id = '$last_id'";
                    $res = mysqli_query($db, $query);
                }


            }


            $_SESSION['username'] = $username; //This is not showing because I wrote $_SESSSION instead of $_SESSION. This caused a serious problem and it took me 3 days to fixed
            $_SESSION['phone'] = $phone; //This is not showing because I wrote $_SESSSION instead of $_SESSION. This caused a serious problem and it took me 3 days to fixed
            $_SESSION['email'] = $email;
            $_SESSION['paymentCode'] = $paymentCode;
            // $_SESSION['passport'] = $passport;
            $_SESSION['passport'] = $passport;
            $_SESSION['regnumber'] = $regnumber;
            $_SESSION['success'] = "You are now logged in";
            header('location: slip.php'); //redirect to dashboard ===== I forgot to put ; so I got this error >>>>>Parse error: syntax error, unexpected token "}" in C:\xampp\htdocs\JETA-Reg\account\server.php on line 63
        }    
        
    }



    
    // Log user in from login page
    if (isset($_POST['login'])) {
        // $username = mysqli_real_escape_string($db, $_POST["username"]);
        $email = mysqli_real_escape_string($db, $_POST["email"]);
        $password = mysqli_real_escape_string($db, $_POST["password"]);

        
        if (empty($email)) {
            array_push($errors, "Email is required");
        }


        if (empty($password)) {
            array_push($errors, "Password is required");
        }


        // if there are no errors, save user to database
        if (count($errors) == 0) {
            $password = md5($password); //encrypt password before storing in database (security)
            // $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
            $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
            $result = mysqli_query($db, $query);
            // if (mysqli_num_rows($result) == 1) { //I did not put == (== 1), I only put =(= 1)I got error on this for like 4 days. I later found the issue in the night at exact 11:24PM on 28/10/2022: The error is that I was unable to login
            
            
                //log user in
               

                $_SESSION['username'] = $username; //This is not showing because I wrote $_SESSSION instead of $_SESSION. This caused a serious problem and it took me 3 days to fixed
                $_SESSION['passport'] = $passport;
                $_SESSION['email'] = $email;
                $_SESSION['phone'] = $phone;
                $_SESSION['regnumber'] = $regnumber;
                $_SESSION['success'] = "You are now logged in";
                header('location: dashboard.php'); //redirect to dashboard ===== I forgot to put ; so I got this error >>>>>Parse error: syntax error, unexpected token "}" in C:\xampp\htdocs\JETA-Reg\account\server.php on line 63   
            }else{
                // array_push($errors, "Wrong username/password combination");
                array_push($errors, "Wrong Email/password combination");
            }
           
        }
    }








    if (isset($_GET['logout'])) {
        session_destroy();
        // unset($_SESSION["email"]);
        unset($_SESSION["username"]);
        header('location: login.php');
    }




?>



