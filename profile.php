<?php
include "config.php";
session_start();
if (!$_SESSION["loggedin"]) {
    header("Location: ./login.php");
}
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
    <title>Profile</title>
</head>

<body>
    <div class="profile-content">
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
        <div class="profile-details">
            <div class="input-wrapper">
                <div class="input-left">
                    <div class="input-container">
                        <div class="input-label">Nama Depan </div>
                        <div class="profile-disp">
                            <?php
                            $sql = "SELECT * FROM keuangan.user WHERE us = '$_SESSION[username]'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo $row["nd"];
                            ?></div>
                    </div>
                    <div class="input-container">
                        <div class="input-label">Nama Tengah </div>
                        <div class="profile-disp">
                            <?php
                            $sql = "SELECT * FROM keuangan.user WHERE us = '$_SESSION[username]'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo $row["nt"];
                            ?>
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="input-label">Nama Belakang </div>
                        <div class="profile-disp">
                            <?php
                            $sql = "SELECT * FROM keuangan.user WHERE us = '$_SESSION[username]'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo $row["nb"];
                            ?>
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="input-label">Tempat Lahir </div>
                        <div class="profile-disp">
                            <?php
                            $sql = "SELECT * FROM keuangan.user WHERE us = '$_SESSION[username]'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo $row["tl"];
                            ?>
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="input-label">Tanggal Lahir </div>
                        <div class="profile-disp">
                            <?php
                            $sql = "SELECT * FROM keuangan.user WHERE us = '$_SESSION[username]'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo $row["tgl"];
                            ?>
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="input-label">NIK </div>
                        <div class="profile-disp">
                            <?php
                            $sql = "SELECT * FROM keuangan.user WHERE us = '$_SESSION[username]'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo $row["nik"];
                            ?>
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="input-label">Warga Negara </div>
                        <div class="profile-disp">
                            <?php
                            $sql = "SELECT * FROM keuangan.user WHERE us = '$_SESSION[username]'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo $row["wn"];
                            ?>
                        </div>
                    </div>
                </div>
                <div class="input-right">
                    <div class="input-container">
                        <div class="input-label">Email </div>
                        <div class="profile-disp">
                            <?php
                            $sql = "SELECT * FROM keuangan.user WHERE us = '$_SESSION[username]'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo $row["em"];
                            ?>
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="input-label">Nomor Handphone </div>
                        <div class="profile-disp">
                            <?php
                            $sql = "SELECT * FROM keuangan.user WHERE us = '$_SESSION[username]'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo $row["nh"];
                            ?>
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="input-label">Alamat </div>
                        <div class="profile-disp">
                            <?php
                            $sql = "SELECT * FROM keuangan.user WHERE us = '$_SESSION[username]'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo $row["al"];
                            ?>
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="input-label">Kode Pos </div>
                        <div class="profile-disp">
                            <?php
                            $sql = "SELECT * FROM keuangan.user WHERE us = '$_SESSION[username]'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo $row["kp"];
                            ?>
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="input-label">Username </div>
                        <div class="profile-disp">
                            <?php
                            $sql = "SELECT * FROM keuangan.user WHERE us = '$_SESSION[username]'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo $row["us"];
                            ?>
                        </div>
                    </div>
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
                </div>
            </div>
        </div>
        <div class="profile-button">
            <a class="profile-edit" href="./profileedit.php">Edit Profile</a>
            <a class="profile-edit" href="./imgedit.php">Edit Profile Picture</a>

        </div>
    </div>
</body>

</html>