<?php// include('server.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form | JETA Comms TechHub</title>
    <link rel="stylesheet" href="assets/css/styleb.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>
<body>
    <!-- Including the navbar with the php code written before called navbar.php -->
    <div class="navbar"><?php include 'navbar.php'; ?></div>

    <div class="form-wrapper d-flex a-center j-center">
        <div class="form-main">
        
            <div class="form-header">
                <h2 class="form-head-text text-light text-center">Register To JETA Communications</h2>
                <p class="text-light text-center">Kindly provide the required details below to proceed.</p>
            </div>
            
            <form action="register.php" method="post" enctype="multipart/form-data" class="form">
                <div class="form-single-group">
                    <h4 class="fw-semiBold text-grey-700 mb-half mt-1" style="font-size: 1.25rem;">Choose Programme</h4>
                    <div class="form-grid">
                        <div class="input-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" value="<?php echo $username; ?>"/>
                        </div>
                        <div class="input-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="<?php echo $email; ?>"/>
                        </div>

                        <div class="input-group">
                            <label for="phone">Mobile Number</label>
                            <input type="tel" name="phone" value="<?php echo $phone; ?>"/>
                        </div>

                        <div class="input-group">
                            <label for="password">Password</label>
                            <input type="password" name="password_1"/>
                        </div>

                        <div class="input-group">
                            <label for="password">Confirm Password</label>
                            <input type="password" name="password_2"/>
                        </div>
                    
                        <div class="input-group">
                            <label for="passport">Select image to upload:</label>
                            <input type="file" name="passport" id="fileToUpload"/>
                        </div>
                    </div>
                </div>


                <div class="d-flex a-center mb-2" style="justify-content: ; gap: 1rem;">
                    <div class="input-group">
                        <input type="submit" name="register" class="btn" value="Register"/>
                    </div>
                    <p>Already a member? <a href="login.php">Login</a></p>
                </div>

            </form>

        </div>
        
    </div>
    <?php include('footer.php'); ?>


</body>
</html>