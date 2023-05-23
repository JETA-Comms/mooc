<?php include 'server.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload preview</title>
    <link rel="stylesheet" href="assets/css/image.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="img.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="profileImage">Profile Image</label>
                    <input type="file" name="profileImage" id="profileImage" class="form-control">
                </div>
                <div class="form-group">
                    <label for="bio">Bio</label>
                    <textarea name="bio" id="bio" class="form-control"></textarea>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>
