
<?php 
require ("server.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['username']; ?> | JETA Comms TechHub</title>
    <link rel="stylesheet" href="assets/css/styleb.css" />
    <link rel="stylesheet" href="assets/css/dashboard.css" />
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
</head>
<body>

    <div class="sidebar">
        <a href="#" class="nav-logo d-flex a-center j-center mb-1">
            <img class="logo" src="assets/img/lg.PNG" alt="logo">
        </a>
        <div class="student-pic mt-2 mb-1">
            <!-- <img src="assets/img/author.jpg" alt="User Picture" /> -->
            <img src="./passports/<?php echo $_SESSION['passport']; ?>" alt="User Picture" />
            <!-- <img src="./passports/<?php //echo $_SESSION['passport']; ?>" alt="Profile picture" /> -->
        </div>
        <h1 class="text-green text-center fw-bold student-name mt-1 mb-1">
            <!-- <span class="surname">ODEWAYE</span>
            <span class="firstname">MAYOMI</span>
            <span class="middlename">PETER</span> -->

            <span class="middlename"><?php echo $_SESSION['username']; ?></span>
        </h1>
        <div class="student-details">
            <a href="#" class="student-detail text-grey-700 fw-semiBold" id="active">Dashboard</a>
            <a href="#" class="student-detail text-grey-700 fw-semiBold">My Profile</a>
            <a href="#" class="student-detail text-grey-700 fw-semiBold">My Courses</a>
            <a href="#" class="student-detail text-grey-700 fw-semiBold">e-Assignment</a>
            <a href="#" class="student-detail text-grey-700 fw-semiBold">e-Learning</a>
            <a href="#" class="student-detail text-grey-700 fw-semiBold">Results</a>
            <a href="#" class="student-detail text-grey-700 fw-semiBold">Accomplishments</a>
            <a href="#" class="student-detail text-grey-700 fw-semiBold">Payments</a>
            <a href="dashboard.php?logout='1'" class="student-detail text-grey-700 fw-semiBold dashLogOut">Log Out</a>
        </div>
    </div>

    <div class="main">
    <?php //if (isset($_SESSION['email'])): ?>
        <nav>
            <div class="nav-content dashboard-nav">
                
                <div class="d-flex a-center" style="margin-left: auto; gap: 1rem;">
                    <!-- <div class="nav-header text-light">Welcome,<strong><?php //echo $_SESSION['username']; ?>ODEWAYE MAYOMI</strong></div> -->
                    <div class="nav-header text-light">Welcome,<strong><?php echo $_SESSION['username']; ?></strong></div>
                    <a class="nav-student-pic">
                        <img src="./passports/<?php echo $_SESSION['passport']; ?>" alt="User Picture" />
                    </a>
                    <div class="menu-icon">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
            </div>
        </nav>
        <div id="quickAccesses">
            <div class="widthMaintainer access-cards">
                <li class="access-card">
                    <div class="access-icon mb-half">
                        <img src="assets/img/e-learning.png" alt="Acess ICon">
                    </div>
                    <h3 class="access-header text-grey-700 fw-bold text-center">E-Learning</h3>
                    <p class="text-grey-700 fw-semiBold mb-half text-center">Access the e-learning
                        platform here and gain
                        access to lecture materials
                        and courseware directly
                        from your lecturers.
                    </p>
                    <a href="index.php">
                        <div class="accessBtn d-flex a-center btn text-light">
                            View <i class="fas fa-chevron-right"></i> 
                        </div>
                    </a>
                </li>
                <li class="access-card">
                    <div class="access-icon mb-half">
                        <img src="assets/img/assignments.png" alt="Acess ICon">
                    </div>
                    <h3 class="access-header text-grey-700 fw-bold mb-half text-center">E-Assignment</h3>
                    <p class="text-grey-700 fw-semiBold mb-half text-center">Access the e-learning
                        Receive and submit
                        assignments, tests and
                        other educational material
                        for your e-learning courses.
                    </p>
                    <a href="index.php">
                        <div class="accessBtn d-flex a-center btn text-light">
                            View <i class="fas fa-chevron-right"></i> 
                        </div>
                    </a>
                </li>
                <li class="access-card">
                    <div class="access-icon mb-half">
                        <img src="assets/img/courses.png" alt="Acess ICon">
                    </div>
                    <h3 class="access-header text-grey-700 fw-bold mb-half text-center">My Courses</h3>
                    <p class="text-grey-700 fw-semiBold mb-half text-center">
                        Access the courses you
                        have enrolled for at JETA
                        Communications TechHub
                        and see your progress so
                        far.
                    </p>
                    <a href="index.php">
                        <div class="accessBtn d-flex a-center btn text-light">
                            View <i class="fas fa-chevron-right"></i> 
                        </div>
                    </a>
                </li>
                <li class="access-card">
                    <div class="access-icon mb-half">
                        <img src="assets/img/results.png" alt="Acess ICon">
                    </div>
                    <h3 class="access-header text-grey-700 fw-bold mb-half text-center">E-Learning</h3>
                    <p class="text-grey-700 fw-semiBold mb-half text-center">
                        Access all the courses you have enrolled for here with 
                        outlines, textbooks and videos for each courses.
                    </p>
                    <a href="index.php">
                        <div class="accessBtn d-flex a-center btn text-light">
                            View <i class="fas fa-chevron-right"></i> 
                        </div>
                    </a>
                </li>
                <li class="access-card">
                    <div class="access-icon mb-half">
                        <img src="assets/img/accomplishments.png" alt="Acess ICon">
                    </div>
                    <h3 class="access-header text-grey-700 fw-bold mb-half text-center">Accomplishments</h3>
                    <p class="text-grey-700 fw-semiBold mb-half text-center">
                        Check your certificate of all the courses you have accomplished here
                    </p>
                    <a href="index.php">
                        <div class="accessBtn d-flex a-center btn text-light">
                            View <i class="fas fa-chevron-right"></i> 
                        </div>
                    </a>
                </li>
                <li class="access-card">
                    <div class="access-icon mb-half">
                        <img src="assets/img/payments.png" alt="Acess ICon">
                    </div>
                    <h3 class="access-header text-grey-700 fw-bold mb-half text-center">Payments</h3>
                    <p class="text-grey-700 fw-semiBold mb-half text-center">
                        Check your payment invoice and receipt here.
                    </p>
                    <a href="index.php">
                        <div class="accessBtn d-flex a-center btn text-light">
                            View <i class="fas fa-chevron-right"></i> 
                        </div>
                    </a>
                </li>
            </div>
        </div>
        
    <?php //endif ?>
    </div>

            
        

</body>
</html>