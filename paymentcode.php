
<?php include('formserver.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation Code | JETA Comms TechHub</title>
    <link rel="stylesheet" href="./paymentcode.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="./paycode.css">


</head>
<body>
    <nav>
        <div class="nav-content container">
           <div class="nav-header">
                <a href="#" class="nav-logo">
                    <img class="logo" src="assets/img/mylogo.PNG" alt="logo">
                </a>
                <div class="menu-icon">
                    <i class="fas fa-bars"></i>
                </div>
           </div>
            <div class="nav-links">
                <a href="#" class="nav-link">Home</a>
                <a href="#" class="nav-link">About</a>
                <a href="#" class="nav-link">Applicant</a>
                <a href="#" class="nav-link">Graduate</a>
                <a href="#" class="nav-link">Help</a>
                <a class="navBtn btn" style="color: var(--clr-white);" href="login.php">Login</a>
            </div>
            
        </div>
    </nav>


    <!-- Payment Confirmation Code Section -->
    <div class="form-wrapper d-flex a-center j-center">
        <div class="form-main">
        
            <div class="form-header">
                <h2 class="form-head-text text-light text-center">Enter your Payment Confirmation Code (PCC)</h2>
            </div>
            <?php include 'errors.php'; ?>
            <form action="paymentcode.php" method="POST" class="pcc">
                <p style="color:red">Enter your Payment Confirmation Code given by the Admin after you made the payment</p>
                <div class="contain">
                    <input type="text" name="paymentcode" class="in" placeholder="123456789012" required>
                    <input type="submit" value="Enter" class="sup" name="confirm">
                </div>
            </form>

        </div>
        
    </div>





    <script src="assets/js/nav.js"></script>


</body>
</html>