<?php
session_start();
include "config.php";
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
    <title>Edit Profile Picture</title>
</head>

<body>
    <div class="edit-profile-content">
        <div class="regis-title">
            <h1>Edit Profile Picture</h1>
        </div>
        <div class="regis-form-wrapper">
            <form action="./imgeditprocess.php" method="post" enctype="multipart/form-data">
                <div class="input-wrapper">
                    <div class="input-container">
                        <div class="input-label">Foto Profil </div>
                        <div class="profile-disp">
                            <?php
                            $sql = "SELECT * FROM keuangan.user WHERE us = '$_SESSION[username]'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo  '<img src="' . $row["fp"] . '">';
                            ?>
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="input-label">Foto Profil Baru </div>
                        <input class="input-input" type="file" name="fotoprofil">
                    </div>
                </div>
                <div class="form-buttons-wrapper">
                    <a class="kembali-button" href="./profile.php">Kembali</a>
                    <input class="submit-button" type="submit" name="edit">
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