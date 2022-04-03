<?php
session_start();
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
    <title>Register</title>
</head>

<body>
    <div class="regis-content">
        <div class="regis-title">
            <h1>Register</h1>
        </div>
        <div class="regis-form-wrapper">
            <form action="./registerprocess.php" method="post" enctype="multipart/form-data">
                <div class="input-wrapper">
                    <div class="input-left">
                        <div class="input-container">
                            <div class="input-label">Nama Depan </div>
                            <input class="input-input" type="text" name="namadepan">
                        </div>
                        <div class="input-container">
                            <div class="input-label">Nama Tengah </div>
                            <input class="input-input" type="text" name="namatengah">
                        </div>
                        <div class="input-container">
                            <div class="input-label">Nama Belakang </div>
                            <input class="input-input" type="text" name="namabelakang">
                        </div>
                        <div class="input-container">
                            <div class="input-label">Tempat Lahir </div>
                            <input class="input-input" type="text" name="tempatlahir">
                        </div>
                        <div class="input-container">
                            <div class="input-label">Tanggal Lahir </div>
                            <input class="input-input" type="date" name="tanggallahir">
                        </div>
                        <div class="input-container">
                            <div class="input-label">NIK </div>
                            <input class="input-input" type="text" name="nik">
                        </div>
                        <div class="input-container">
                            <div class="input-label">Warga Negara </div>
                            <input class="input-input" type="text" name="warganegara">
                        </div>
                        <div class="input-container">
                            <div class="input-label">Foto Profil </div>
                            <input class="input-input" type="file" name="fotoprofil">
                        </div>
                    </div>
                    <div class="input-right">
                        <div class="input-container">
                            <div class="input-label">Email </div>
                            <input class="input-input" type="email" name="email">
                        </div>
                        <div class="input-container">
                            <div class="input-label">Nomor Handphone </div>
                            <input class="input-input" type="text" name="nohp">
                        </div>
                        <div class="input-container">
                            <div class="input-label">Alamat </div>
                            <input class="input-input" type="text" name="alamat">
                        </div>
                        <div class="input-container">
                            <div class="input-label">Kode Pos </div>
                            <input class="input-input" type="text" name="kodepos">
                        </div>
                        <div class="input-container">
                            <div class="input-label">Username </div>
                            <input class="input-input" type="text" name="username">
                        </div>
                        <div class="input-container">
                            <div class="input-label">Password </div>
                            <input class="input-input" type="password" name="password">
                        </div>
                        <div class="input-container">
                            <div class="input-label">Confirm Password </div>
                            <input class="input-input" type="password" name="confirmpassword">
                        </div>
                    </div>
                </div>
                <div class="form-buttons-wrapper">
                    <a class="kembali-button" href="./welcome.php">Kembali</a>
                    <input class="submit-button" type="submit" name="sub">
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