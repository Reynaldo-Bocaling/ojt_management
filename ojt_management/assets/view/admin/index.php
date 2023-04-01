<?php

// if(isset($_POST['admin_login_btn'])){
//     header('location: ')
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="shortcut icon" href="../assets/logo/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/admin_login.css">
</head>

<body>
    <div class="container">

        <form action="dashboard.php" method="post">
            <div class="title">Sign in</div>
            <div class="input">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="">
            </div>

            <div class="input">
                <label for="password">Password</label>
                <input type="text" name="password" id="password" placeholder="">
            </div>
            <input type="submit" value="Login" name="admin_login_btn">
        </form>

    </div>
</body>

</html>