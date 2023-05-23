<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student's Profile</title>
    <link rel="stylesheet" href="./assets/css/student.css">
</head>
<body>
    <?php include "navbar.php"; ?>
    <div class="profile-container">

        <!-- Student menu section -->
        <div class="student-menu">
            <div class="profile-passport">
                <img src="./assets/img/author.jpg" alt="Profile Picture" class="profile-picture">
            </div>

            <div class="student-name">
                <h4>ODEWAYE MAYOMI PETER</h4>
            </div>

            <div class="profile-menu">
                <ul>
                    <li class="dashboard-menu"><a href="#">Dashboard</a></li>
                    <li class="dashboard-menu"><a href="#">My Courses</a></li>
                    <li class="dashboard-menu"><a href="#">Profile</a></li>
                    <li class="dashboard-menu"><a href="#">e-Assignment</a></li>
                    <li class="dashboard-menu"><a href="#">e-Learning</a></li>
                    <li class="dashboard-menu"><a href="#">Results</a></li>
                    <li class="dashboard-menu"><a href="#">Accomplishments</a></a></li>
                </ul>
                <button>Logout</button>
            </div>
        </div>

        <!-- Learning Details section -->
        <div class="learning-menu">
            <div class="e-learning">
                <h5>e-Learning</h5>
                    <p>
                        Access the e-learning
                        platform here and gain
                        access to lecture materials
                        and courseware directly
                        from your lecturers
                    </p>

                    <button class="view">View</button>
            </div>

            <div class="e-learning">
                <h5>e-Assignment</h5>
                    <p>
                        Receive and submit
                        assignments, tests and
                        other educational material
                        for your e-learning courses.
                    </p>

                    <button class="view">View</button>
            </div>
        </div>


        <div class="learning-menu">
            <div class="e-learning">
                <h5>My Courses</h5>
                    <p>
                        Access the courses you
                        have enrolled for at JETA
                        Communications TechHub
                        and see your progress so
                        far.
                    </p>

                    <button class="view">View</button>
            </div>

            <div class="e-learning">
                <h5>Result</h5>
                    <p>
                        Check your academic
                        performance here.
                    </p>

                    <button class="view">View</button>
            </div>
        </div>

    </div>
    
</body>
</html>