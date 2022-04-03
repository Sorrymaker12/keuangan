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
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Edit Profile</title>
</head>

<body>
    <div class="edit-profile-content">
        <div class="regis-title">
            <h1>Edit Profile</h1>
        </div>
        <div class="regis-form-wrapper">
            <form action="./profileeditprocess.php" method="post" enctype="multipart/form-data">
                <div class="input-wrapper">
                    <div class="input-left">
                        <div class="input-container">
                            <div class="input-label">Username </div>
                            <input class="input-input" type="text" name="username" value="<?php echo $row['us'] ?>" readonly>
                        </div>
                        <div class="input-container">
                            <div class="input-label">Nama Depan </div>
                            <input class="input-input" type="text" name="namadepan" value="<?php echo $row['nd'] ?>">
                        </div>
                        <div class="input-container">
                            <div class="input-label">Nama Tengah </div>
                            <input class="input-input" type="text" name="namatengah" value="<?php echo $row['nt'] ?>">
                        </div>
                        <div class="input-container">
                            <div class="input-label">Nama Belakang </div>
                            <input class="input-input" type="text" name="namabelakang" value="<?php echo $row['nb'] ?>">
                        </div>
                        <div class="input-container">
                            <div class="input-label">Tempat Lahir </div>
                            <input class="input-input" type="text" name="tempatlahir" value="<?php echo $row['tl'] ?>">
                        </div>
                        <div class="input-container">
                            <div class="input-label">Tanggal Lahir </div>
                            <input class="input-input" type="date" name="tanggallahir" value="<?php echo $row['tgl'] ?>">
                        </div>
                    </div>
                    <div class="input-right">
                        <div class="input-container">
                            <div class="input-label">Email </div>
                            <input class="input-input" type="email" name="email" value="<?php echo $row['em'] ?>">
                        </div>
                        <div class="input-container">
                            <div class="input-label">Nomor Handphone </div>
                            <input class="input-input" type="text" name="nohp" value="<?php echo $row['nh'] ?>">
                        </div>
                        <div class="input-container">
                            <div class="input-label">Alamat </div>
                            <input class="input-input" type="text" name="alamat" value="<?php echo $row['al'] ?>">
                        </div>
                        <div class="input-container">
                            <div class="input-label">Kode Pos </div>
                            <input class="input-input" type="text" name="kodepos" value="<?php echo $row['kp'] ?>">
                        </div>
                        <div class="input-container">
                            <div class="input-label">NIK </div>
                            <input class="input-input" type="text" name="nik" value="<?php echo $row['nik'] ?>">
                        </div>
                        <div class="input-container">
                            <div class="input-label">Warga Negara </div>
                            <input class="input-input" type="text" name="warganegara" value="<?php echo $row['wn'] ?>">
                        </div>
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