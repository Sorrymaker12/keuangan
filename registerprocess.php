<?php
include("config.php");
session_start();
$_SESSION["error"] = "";

if (isset($_POST["sub"])) {
    $_SESSION["registersuccess"] = true;
    // validation and insert to db

    // nama depan, tengah, blkg
    $nd = $_POST["namadepan"];
    trim($nd);
    if (empty($nd)) {
        $_SESSION["registersuccess"] = false;
        $_SESSION["error"] =  $_SESSION["error"] . "Nama Depan tidak boleh kosong<br>";
    }

    $nt = $_POST["namatengah"];
    trim($nt);
    if (empty($nt)) {
        $_SESSION["registersuccess"] = false;
        $_SESSION["error"] =  $_SESSION["error"] . "Nama Tengah tidak boleh kosong<br>";
    }
    $nb = $_POST["namabelakang"];
    trim($nb);
    if (empty($nb)) {
        $_SESSION["registersuccess"] = false;
        $_SESSION["error"] =  $_SESSION["error"] . "Nama Belakang tidak boleh kosong<br>";
    }


    // tempat dan tanggal lahir
    $tl = $_POST["tempatlahir"];
    trim($tl);
    if (empty($tl)) {
        $_SESSION["registersuccess"] = false;
        $_SESSION["error"] =  $_SESSION["error"] . "Tempat Lahir tidak boleh kosong<br>";
    }

    $tgl = $_POST["tanggallahir"];
    trim($tgl);
    if (empty($tgl)) {
        $_SESSION["registersuccess"] = false;
        $_SESSION["error"] =  $_SESSION["error"] . "Tanggal Lahir tidak boleh kosong<br>";
    }

    // NIK dan verifikasi NIK
    $nik = $_POST["nik"];
    trim($nik);
    if (empty($nik)) {
        $_SESSION["registersuccess"] = false;
        $_SESSION["error"] =  $_SESSION["error"] . "NIK tidak boleh kosong<br>";
    } else {
        if (!is_numeric($nik)) {
            $_SESSION["error"] = $_SESSION["error"] . "NIK harus angka<br>";
            $_SESSION["registersuccess"] = false;
        } else {
            if (strlen($nik) != 16) {
                $_SESSION["error"] = $_SESSION["error"] . "NIK harus 16 digit<br>";
                $_SESSION["registersuccess"] = false;
            }
        }
    }

    // warga negara
    $wn = $_POST["warganegara"];
    trim($wn);
    if (empty($wn)) {
        $_SESSION["registersuccess"] = false;
        $_SESSION["error"] =  $_SESSION["error"] . "Warga Negara tidak boleh kosong<br>";
    }

    // email
    $em = $_POST["email"];
    trim($em);
    if (empty($em)) {
        $_SESSION["registersuccess"] = false;
        $_SESSION["error"] =  $_SESSION["error"] . "Email tidak boleh kosong<br>";
    }

    // nomor hp
    $nh = $_POST["nohp"];
    trim($nh);
    if (empty($nh)) {
        $_SESSION["registersuccess"] = false;
        $_SESSION["error"] =  $_SESSION["error"] . "Nomor HP tidak boleh kosong<br>";
    } else {
        if (!is_numeric($nh)) {
            $_SESSION["error"] = $_SESSION["error"] . "Nomor HP harus angka<br>";
            $_SESSION["registersuccess"] = false;
        } else {
            if (strlen($nh) != 12) {
                $_SESSION["error"] = $_SESSION["error"] . "Nomor HP harus 12 digit<br>";
                $_SESSION["registersuccess"] = false;
            }
        }
    }

    // alamat
    $al = $_POST["alamat"];
    trim($al);
    if (empty($al)) {
        $_SESSION["registersuccess"] = false;
        $_SESSION["error"] =  $_SESSION["error"] . "Alamat tidak boleh kosong<br>";
    }

    // kodepos
    $kp = $_POST["kodepos"];
    trim($kp);
    if (empty($kp)) {
        $_SESSION["registersuccess"] = false;
        $_SESSION["error"] =  $_SESSION["error"] . "Kode Pos tidak boleh kosong<br>";
    } else {
        if (!is_numeric($kp)) {
            $_SESSION["error"] = $_SESSION["error"] . "Kode Pos harus angka<br>";
            $_SESSION["registersuccess"] = false;
        } else {
            if (strlen($kp) != 5) {
                $_SESSION["error"] = $_SESSION["error"] . "Kode Pos harus 5 digit<br>";
                $_SESSION["registersuccess"] = false;
            }
        }
    }

    // username 
    $us = $_POST["username"];
    trim($us);
    if (empty($us)) {
        $_SESSION["registersuccess"] = false;
        $_SESSION["error"] =  $_SESSION["error"] . "Username tidak boleh kosong<br>";
    }

    // password
    $pw = $_POST["password"];
    trim($pw);
    $cpw = $_POST["confirmpassword"];
    trim($cpw);
    if (empty($cpw) && empty($pw)) {
        $_SESSION["registersuccess"] = false;
        $_SESSION["error"] =  $_SESSION["error"] . "Password dan Konfirmasi Password tidak boleh kosong<br>";
    } else {
        if ($pw != $cpw) {
            $_SESSION["registersuccess"] = false;
            $_SESSION["error"] =  $_SESSION["error"] . "Password dan Konfirmasi Password harus sama<br>";
        }
    }

    // foto profil
    $namafoto = $_FILES["fotoprofil"]["name"];
    trim($namafoto);
    $tmp_nama = $_FILES["fotoprofil"]["tmp_name"];
    trim($tmp_nama);

    $dir = "./uploads/";

    $tn =  $dir . $namafoto;

    $upload = move_uploaded_file($tmp_nama, $tn);

    if (!$upload) {
        $_SESSION["registersuccess"] = false;
        $_SESSION["error"] =  $_SESSION["error"] . "Upload foto profil gagal<br>";
    }

    if (!$_SESSION["registersuccess"]) {
        header("location: register.php");
    } else {
        //insert to db
        $_SESSION["querysuccess"] = true;
        $str_query = "insert into keuangan.user value ('$nd', '$nt', '$nb', '$tl', '$tgl', '$nik', '$wn', '$em', '$nh', '$al', '$kp','$us', '$pw', '$tn')";
        $query = mysqli_query($con, $str_query);
        if (!$query) {
            $_SESSION["registersuccess"] = false;
            $_SESSION["error"] =  $_SESSION["error"] . "Error: " . $query . "<br>" . mysqli_error($con);
            header("location: ./register.php");
        } else {
            $_SESSION["succmsg"] = "Register berhasil";
            header("location: ./welcome.php");
        }
    }
} else {
    // return to register page and show error
    $_SESSION["error"] = "failed to register";
    header("Location: ./register.php");
}
