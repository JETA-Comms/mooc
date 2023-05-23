<?php //include('formserver.php');
include('serverq.php');
?>


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
                <h2 class="form-head-text text-light text-center">REGISTRATION FORM</h2>
                <p class="text-light text-center">Provide your programme and course of choice, then fill other personal details below.</p>
            </div>
           <?php
                if(isset($_SESSION['id']));
                {
                    $student_id = mysqli_real_escape_string($db, $_SESSION['id']);
                    $query = "SELECT * FROM student_data WHERE id = '$student_id' ";
                    $result = mysqli_query($db, $query);

                    if(mysqli_num_rows($result) > 0)
                    {
                        $student = mysqli_fetch_array($result);
                        // print_r($student);
                        ?>  
                            <form action="biodataserverconn.php" method="post" enctype="multipart/form-data" class="form">
                                <div class="form-single-group">
                                <input type="text" name="id" value="<?= $student['id']; ?>" required/>
                                <?= date('Y') - 1; ?>
                                    <h4 class="fw-semiBold text-grey-700 mt-1 mb-half" style="font-size: 1.25rem;">Choose Programme</h4>
                                    <div class="form-grid">
                                        <div class="input-group d-flex">
                                            <label for="program mb-half">Programme</label>
                                            <select name="program" id="programme" disabled>
                                                <option value="Summer Coaching" ><?php echo $student['program']; ?></option>
                                                
                                            </select>
                                        </div>
                                        <div class="input-group d-flex">
                                            <label for="course mb-half">Course</label>
                                            <select name="course" id="programme" readonly>
                                                <option value="Computer Networking"><?php echo $student['course']; ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-single-group">
                                    <h4 class="fw-semiBold text-grey-700 mb-half" style="font-size: 1.25rem;">Personal Details</h4>
                                    <div class="form-grid">
                                        <div class="input-group d-flex">
                                            <label for="surname">Surname</label>
                                            <input type="text" name="surname" id="surname" value="<?php echo $student['surname']; ?>" style="background-color: azure;" readonly/>
                                        </div>
                                        <div class="input-group d-flex">
                                        <label for="firstname">First Name</label>
                                            <input type="text" name="firstname" id="firstname" value="<?php echo $student['firstname']; ?>" readonly/>
                                        </div>
                                        <div class="input-group d-flex">
                                            <label for="othername">Other Name</label>
                                            <input type="text" name="othername" id="othername" value="<?php echo $student['othername']; ?>" readonly/>
                                        </div>

                                        <div class="input-group d-flex">
                                            <label for="state mb-half">State</label>
                                            <select name="state" id="programme" readonly>
                                                <option value="Ogun" readonly><?php echo $student['state']; ?></option>
                                                <option value="Ogun" >Ayobo</option>
                                            
                                            </select>
                                        </div>

                                        <div class="input-group d-flex">
                                            <label for="phone">Mobile Number</label>
                                            <input type="tel" name="phone"  value="<?php echo $student['phone']; ?>"  readonly/>
                                        </div>

                                        <div class="input-group d-flex">
                                            <label for="email">Email</label>
                                            <input type="email" name="email"  value="<?php echo $student['email']; ?>" readonly/>
                                        </div>
                                    </div>
                                </div>
                        
                                

                                <div class="form-single-group">
                                    <h4 class="fw-semiBold text-grey-700 mb-half" style="font-size: 1.25rem;">Sponsor Details</h4>
                                    <div class="form-grid">
                                        
                                        <div class="input-group d-flex">
                                            <label for="sponsname">Sponsor Name</label>
                                            <input type="text" name="sponsname" value="<?= $student['sponsname']; ?>" required/>
                                        </div>
                                        <div class="input-group d-flex">
                                        <label for="sponsnum">Sponsor Number</label>
                                            <input type="text" name="sponsnum" id="firstname" value="<?= $student['sponsnum']; ?>" required/>
                                        </div>
                                        <div class="input-group d-flex">
                                            <label for="sponsmail">Sponsor Email</label>
                                            <input type="text" name="sponsmail" id="othername" value="<?= $student['sponsmail']; ?>" required/>
                                        </div>

                                        
                                        <div class="input-group d-flex">
                                            <label for="sponsrelationship">Relationship</label>
                                            <input type="tel" name="sponsrelationship" placeholder="081XXXXXXXX" value="<?= $student['sponsrelationship']; ?>" />
                                        </div>

                                    
                                    </div>
                                </div>


                                <div class="d-flex a-center mb-2" style="justify-content: ; gap: 1rem;">
                                    <div class="input-group">
                                        <input type="submit" name="registerq" class="btn" value="SUBMIT FORM" />
                                    </div>
                                    <!-- <p>Already a member? <a href="login.php">Login</a></p> -->
                                </div>

                            </form>
                            <?php
                    }
                    else
                    {
                        // echo $student_id = $_SESSION['id'];
                        echo "<h2> No Such ID Found </h2>";
                    }
                    
                }
                ?>

        </div>
        
    </div>
    <?php include('footer.php'); ?>


</body>
</html>