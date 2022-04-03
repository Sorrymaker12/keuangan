<?php
session_start();
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Login</title>
</head>

<body>
    <div class="login-content">
        <div class="login-title">
            <h1>Login</h1>
        </div>
        <div class="login-form">
            <form action="./loginprocess.php" method="post">
                <div class="login-container">
                    <div class="login-label">Username </div>
                    <input class="login-input" type="text" name="username" id="username">
                </div>
                <div class="login-container">
                    <div class="login-label">Password </div>
                    <input class="login-input" type="password" name="password" id="password">
                </div>
                <div class="login-buttons-wrapper">
                    <a class="back-button" href="./welcome.php">Back</a>
                    <input class="login-button" type="submit" value="Login" name="login">
                </div>
            </form>
        </div>
        <div class="regis-error-msg">
            <?php
            if (isset($_SESSION["error"])) {
                echo $_SESSION["error"];
                unset($_SESSION["error"]);
            }
            ?>
        </div>
    </div>
</body>

</html>