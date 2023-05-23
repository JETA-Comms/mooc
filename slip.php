<?php include('server.php')


    // // $sql = "SELECT * FROM users";

    // $result = mysqli_query($db, $sql);
    // // while ($users = mysqli_fetch_all($result, MYSQLI_ASSOC)) {
    // $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

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



<!-- The Acknowledgement slip section -->


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
            <img src="./passports/<?php echo $_SESSION['passport']; ?>" alt="" width="200">
        </div>


        <div class="welcome-letter">
            <p>Dear <strong><?php echo $_SESSION['username']; ?></strong>,</p>
            <p>I hereby acknowledge the receipt of your application with Application No. <strong><?php echo $_SESSION['regnumber']; ?></strong> for
            admission to this Polytechnic for a course of study leading to HND (<strong><?php echo $_SESSION['email']; ?></strong>). Please print
            your Acknowledgment and Screening Slip by clicking on appropriate button below. Come with the slips on
            the screening date.</p>

            <?php include "signature.php"; ?>

            
        </div>

        <hr>




    </div>






</body>
</html>



