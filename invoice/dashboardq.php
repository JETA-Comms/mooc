<?php include('serverq.php'); 
    // // if user is not logged in, they cannot access this page
    // // if (empty($_POST['username'])) {
    // //     header('location: login.php');
    // // }
    // // session_start();
    // $sql = "SELECT * FROM users";

    // $result = mysqli_query($db, $sql);
    // // while ($users = mysqli_fetch_all($result, MYSQLI_ASSOC)) {
    // $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //     // $id = $users['id'];
    //     // $passport = $users['passport'];
    //     // $username = $users['username'];
    //     // $email = $users['email'];

?>


 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['username']; ?> | JETA Comms TechHub</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- including the navbar here -->
    <?php include 'navbar.php'; ?>



    <!-- The dashboard section -->
    <div class="header">
        <h2>Dashboard</h2>
    </div>
    
    <div class="content">
        <?php if(isset($_SESSION['success'])): ?>

            <div class="error success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                    
                </h3>
            </div>
        <?php endif ?>

        
        <?php if (isset($_SESSION['email'])): ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            

            <div>
                <img src="./passports/<?php echo $_SESSION['passport']; ?>" alt="profile picture" width="200">
            </div>

            <div>
                <?php echo $_SESSION['email']; ?>
            </div>
            

            <?php echo $_SESSION['phone']; ?>

            <?php echo $_SESSION['regnumber']; ?>
            
            <!-- <p><a href="login.php" style="color:red">Logout</a></p> -->
            <button><a href="dashboardq.php?logout='1' " style="color:white">Logout</a></button>

            
        <?php endif ?>

    

        
    </div>

</body>
</html>