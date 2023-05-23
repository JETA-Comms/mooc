<?php include('serverq.php');
    // session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | JETA Comms TechHub</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-body">
    <!-- Including the navbar with the php code written before called navbar.php -->
    <?php include 'navbar.php'; ?>

    <div class="login">

    <div class="banner">
        <div class="login-img">
            <img src="./assets/img/login.jpg" alt="Login" class="img"/>
        </div>
        <div class="banhead">
            <img class="" src="assets/img/mylogo.PNG" alt="logo">
           
            <!-- <h2 class="tagline">JETA Communications<br/>Digital Skills Academy</h2> -->
            <h2 class="tagline">JETA Communications</h2>
        </div>
        <div class="tag-details">
            <p>Log in to your Portal Account to access the<br/> <b>JETA Communciations TechHub</b> <br/>e-Learning Platform</p>
        </div>
        
    </div>


    <!-- The Login session -->
    <div class="login-container">
        <div class="login-header">
            <h2>Login</h2>
        </div>



    
        <form action="exam.php" method="post" class="login-form" entype="multipart/form-data">
        <div>
            <p>Use Local Account to Log in</p>
        </div>
            <!-- display validation errors here -->
            <?php include('errors.php'); ?>
            <div class="input-group">
                <!-- <label for="username">Username</label> -->
                <label for="regnumber">Enter Your Payment Confirmation code</label>
                <!-- <input type="text" name="username"> -->
                <input type="text" name="paymentCode">
            </div>

            <!-- <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password">
            </div> -->

            <div class="input-group">
                <!-- <button type="submit" name="login" class="btn">Login</button> -->
                <input type="submit" name="elogin" class="btn" value="Login"/>
            </div>

            <p>
                Don't have an account? <a href="register.php">Register</a>
            </p>

        </form>

        </div>
    </div>
    




    <footer>
        <?php include 'footer.php'        ?>
    </footer>
    

</body>
</html>

