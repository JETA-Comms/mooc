<?php include('serverq.php'); ?>


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
                <h2 class="form-head-text text-light text-center">Application Form Invoice</h2>
                <p class="text-light text-center">Provide your programme and course of choice, then fill other personal details below.</p>
            </div>
            <?php //include 'errors.php'; ?>
            <form action="app-form.php" method="post" class="form">
                <div class="form-single-group">
                    <h4 class="fw-semiBold text-grey-700 mt-1 mb-half" style="font-size: 1.25rem;">Choose Programme</h4>
                    <div class="form-grid">
                        <div class="input-group d-flex">
                            <label for="program mb-half">Programme</label>
                            <select name="program" id="programme" required>
                                <option value="Summer Coaching">Summer Coaching</option>
                                <option value="Evening Session">Evening Session</option>
                                <option value="Morning - Afternoon">Morning - Afternoon</option>
                                <option value="Weekend Only">Weekend Only</option>
                            </select>
                        </div>
                        <div class="input-group d-flex">
                            <label for="course mb-half">Course</label>
                            <select name="course" id="programme" required>
                                <option value="Computer Networking" selected>Computer Networking</option>
                                <option value="Coding4Kids">Coding4Kids</option>
                                <option value="Coding4Youths">Coding4Youths</option>
                                <option value="Coding4Teens">Coding4Teens</option>
                                <option value="Website Development">Website Development</option>
                                <option value="Computer Basics">Computer Basics</option>
                                <option value="Hardware Development">Hardware Development</option>
                                <option value="Software Development">Software Development</option>
                                <option value="Graphic Design">Graphic Design</option>
                                <option value="Microsoft Office Applications">Microsoft Office Applications</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-single-group">
                    <h4 class="fw-semiBold text-grey-700 mb-half" style="font-size: 1.25rem;">Personal Details</h4>
                    <div class="form-grid">
                        <div class="input-group d-flex">
                            <label for="surname">Surname</label>
                            <input type="text" name="surname" id="surname" required/>
                        </div>
                        <div class="input-group d-flex">
                        <label for="firstname">First Name</label>
                            <input type="text" name="firstname" id="firstname" required/>
                        </div>
                        <div class="input-group d-flex">
                            <label for="othername">Other Name</label>
                            <input type="text" name="othername" id="othername" required/>
                        </div>

                        <div class="input-group d-flex">
                            <label for="state mb-half">State</label>
                            <select name="state" id="programme" required>
                                <option value="Ogun" selected>Ogun </option>
                                <option value="Lagos">Lagos</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Africa">Africa </option>
                            </select>
                        </div>

                        <div class="input-group d-flex">
                            <label for="phone">Mobile Number</label>
                            <input type="tel" name="phone" placeholder="081XXXXXXXX"  required/>
                        </div>

                        <div class="input-group d-flex">
                            <label for="email">Email</label>
                            <input type="email" name="email" required/>
                        </div>
                    </div>
                </div>

                <div class="d-flex a-center mb-2" style="justify-content: ; gap: 1rem;">
                    <div class="input-group">
                        <input type="submit" name="generate" class="btn" value="Generate Form Invoice" />
                    </div>
                    <!-- <p>Already a member? <a href="login.php">Login</a></p> -->
                </div>

            </form>

        </div>
        
    </div>
    <?php include('footer.php'); ?>


</body>
</html>