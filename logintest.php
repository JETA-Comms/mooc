<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | JETA Comms TechHub</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php
    require('server.php');
    // session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['login'])) {
        // $username = stripslashes($_POST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($db, $_SESSION['username']);
        // $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($db, $_SESSION["password"]);
        // Check user is exist in the database
        $query    = "SELECT * FROM users WHERE username='$username' AND password='".md5($password)."'";
        $result = mysqli_query($db, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // $_SESSION['password_1'] = $password;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>



    <div class="header">
        <h2>Login</h2>
    </div>
    
    <form action="login.php" method="post">
        <!-- display validation errors here -->
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input type="text" name="password_1">
        </div>

        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>

        <p>
            Don't have an account? <a href="register.php">Register</a>
        </p>

    </form>

<?php
    }
?>

</body>
</html>

