<?php
include "config.php";
session_start();
if (!$_SESSION["loggedin"]) {
    header("Location: ./login.php");
}
$sql = "SELECT * FROM keuangan.user WHERE us = '$_SESSION[username]'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
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
    <title>Home</title>
</head>

<body>
    <div class="home-content">
        <div class="home-nav">
            <div class="home-nav-text">
                Aplikasi Pengelola Keuangan
            </div>
            <div class="home-nav-buttons">
                <a href="./home.php">Home</a>
                <a href="./profile.php">Profile</a>
                <a href="./logout.php">Logout</a>
            </div>
        </div>
        <div class="home-main">

            <div class="home-text">
                Halo, <?php echo '<p class="home-text-bold">' . $row["nd"] . "&nbsp" . $row["nt"] . "&nbsp" . $row["nb"] . '</p>'; ?>
                Selamat Datang di Aplikasi Pengelola Keuangan
            </div>
        </div>
    </div>
</body>

</html>