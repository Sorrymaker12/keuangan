<?php
session_start();
include "config.php";

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM keuangan.user WHERE us = '$username' AND pw = '$password'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            header("location: home.php");
        } else {
            $_SESSION["error"] = "Username atau password salah";
            header("location: login.php");
        }
    } else {
        header("Location: ./login.php");
        $_SESSION["error"] = "Username atau password salah <br>";
    }
}
