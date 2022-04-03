<?php
include "config.php";
session_start();
if (!$_SESSION["loggedin"]) {
    header("Location: ./login.php");
}

if (isset($_POST["edit"])) {
    $_SESSION["upsuccess"] = true;
    $namafoto = $_FILES["fotoprofil"]["name"];
    trim($namafoto);
    $tmp_nama = $_FILES["fotoprofil"]["tmp_name"];
    trim($tmp_nama);

    $dir = "./uploads/";

    $tn =  $dir . $namafoto;

    $upload = move_uploaded_file($tmp_nama, $tn);

    if (!$upload) {
        $_SESSION["upsuccess"] = false;
        $_SESSION["error"] =  $_SESSION["error"] . "Upload foto profil baru gagal<br>";
        header("location: ./imgedit.php");
    }

    if ($_SESSION["upsuccess"]) {
        $_SESSION["querysuccess"] = true;
        $sql = "UPDATE keuangan.user set fp = '$tn' where us = '$_SESSION[username]'";
        $result = mysqli_query($con, $sql);
        if (!$result) {
            $_SESSION["upsuccess"] = false;
            $_SESSION["error"] =  $_SESSION["error"] . "Error: " . $sql . "<br>" . mysqli_error($con);
            header("location: ./imgedit.php");
        } else {
            header("location: ./profile.php");
        }
    }
}
