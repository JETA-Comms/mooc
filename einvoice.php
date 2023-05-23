<?php include('serverq.php'); ?>

<?php 
    // session_start();
    // if(!isset($_SESSION['generate'])){
        
    //     header("Location: app-form.php");
        
    //     // header("Location: app-form.php");
    //     die();
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acknowledgment Slip | JETA Comms TechHub</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <!-- including the navbar here -->




<!-- The Invoice Section -->


    <div class="sliphead">
        <div class="acknheader">
            <div class="slipheader">
                <img class="logo" src="assets/img/mylogo.PNG" alt="logo">
            </div>
            <div class="jetahead">
                <h1 class="ack-title">JETA Communications</h1>
                <h3>Digital Skills Academy</h3>
            </div>
            <p>Plot 36, Great Estate(Phase 1), Asore, Ado-Odo Ota, Ogun State, Nigeria.</p>
        </div>
        

        <div class="slip">
            <h2 class="title">Acknowledgment Slip For 2022/2023 Session Admission</h2>
        </div>

        <hr>


        <div>
            <?php echo $_SESSION['program']; ?> <br> 
            <?php echo $_SESSION['course']; ?> <br>             
            <?php echo $_SESSION['state']; ?><br>
            <?php echo $_SESSION['fullname']; ?><br>
            <?php echo $_SESSION['phone']; ?><br>
            <?php echo $_SESSION['email']; ?><br>
            <?php echo $_SESSION['paymentcode']; ?><br>
            <?php echo date('d/m/Y'); ?>
            <?php echo date('D'); ?>
             
        </div>


        <div class="welcome-letter">
            

            <?php include "signature.php"; ?>

            
        </div>

        <hr>




    </div>






</body>
</html>



