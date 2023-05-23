<?php include('server.php'); 
    //if user is not logged in, they cannot access this page
    // if (empty($_POST['username'])) {
    //     header('location: login.php');
    // }
    $users = "";
    $id = "";
    $password = "";
    $username = "";
    $email = "";


    $sql = "SELECT * FROM users";

    $result = mysqli_query($db, $sql);
    // while ($users = mysqli_fetch_all($result, MYSQLI_ASSOC)) {
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
        // $id = $users['id'];
        // $passport = $users['passport'];
        // $username = $users['username'];
        // $email = $users['email'];
    



?>


 
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
    <!-- including the navbar here -->
    <?php include 'navbar.php'; ?>



    <!-- The dashboard section -->
    <table>
        <thead>
            <th>SN</th>
            <!-- <th>Passport</th> -->
            <th>Username</th>
            <th>Email</th>
            <th>Application Number</th>
            <th>Passport</th>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td>
                    <?php '.$id.' ?>
                </td>
                <!-- <td>
                    <img src="passports/<?php echo $user["passport"] ?>" width="80">
                </td> -->

                <td>
                    <?php echo $user['username']; ?>
                </td>
                
                <td>
                    <?php echo $user['email']; ?>
                </td>

                <td>
                    <?php echo $user['regnumber']; ?>
                </td>

                <td>
                    <img src="passports/<?php echo $user["passport"] ?>" width="80">
                </td>

               
                
            </tr>
            
            
            <?php endforeach; ?>
        </tbody>
    </table>

        
    </div>

</body>
</html>