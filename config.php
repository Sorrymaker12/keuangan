<?php
$server = "localhost";
$user = "root";
$password = "";
$db_name = "keuangan";

$con = mysqli_connect($server, $user, $password, $db_name);

if ($con) {
} else {
    throw new Exception("Koneksi ke database gagal");
}
