<?php
session_start();
include "config.php";

if (isset($_POST["edit"])) {
    $_SESSION["registersuccess"] = true;
    // validation and insert to db

    // nama depan, tengah, blkg
    $nd = $_POST["namadepan"];
    trim($nd);
    if (empty($nd)) {
        $_SESSION["registersuccess"] = false;
        $_SESSION["error"] =  $_SESSION["error"] . "Nama Depan tidak boleh kosong<br>";
    } else {
        $_SESSION["upsuccess"] = true;
        $sql = "UPDATE keuangan.user set nd = '$nd' where us = '$_SESSION[username]'";
        $result = mysqli_query($con, $sql);
        if (!$result) {
            $_SESSION["upsuccess"] = false;
            $_SESSION["error"] =  $_SESSION["error"] . "Error: " . $sql . "<br>" . mysqli_error($con);
            header("location: ./profileedit.php");
        } else {
            header("location: ./profile.php");
        }
    }

    $nt = $_POST["namatengah"];
    trim($nt);
    if (empty($nt)) {
        $_SESSION["registersuccess"] = false;
        $_SESSION["error"] =  $_SESSION["error"] . "Nama Tengah tidak boleh kosong<br>";
    } else {
        $_SESSION["upsuccess"] = true;
        $sql = "UPDATE keuangan.user set nt = '$nt' where us = '$_SESSION[username]'";
        $result = mysqli_query($con, $sql);
        if (!$result) {
            $_SESSION["upsuccess"] = false;
            $_SESSION["error"] =  $_SESSION["error"] . "Error: " . $sql . "<br>" . mysqli_error($con);
            header("location: ./profileedit.php");
        } else {
            header("location: ./profile.php");
        }
    }

    $nb = $_POST["namabelakang"];
    trim($nb);
    if (empty($nb)) {
        $_SESSION["registersuccess"] = false;
        $_SESSION["error"] =  $_SESSION["error"] . "Nama Belakang tidak boleh kosong<br>";
    } else {
        $_SESSION["upsuccess"] = true;
        $sql = "UPDATE keuangan.user set nb = '$nb' where us = '$_SESSION[username]'";
        $result = mysqli_query($con, $sql);
        if (!$result) {
            $_SESSION["upsuccess"] = false;
            $_SESSION["error"] =  $_SESSION["error"] . "Error: " . $sql . "<br>" . mysqli_error($con);
            header("location: ./profileedit.php");
        } else {
            header("location: ./profile.php");
        }
    }


    // tempat dan tanggal lahir
    $tl = $_POST["tempatlahir"];
    trim($tl);
    if (empty($tl)) {
        $_SESSION["registersuccess"] = false;
        $_SESSION["error"] =  $_SESSION["error"] . "Tempat Lahir tidak boleh kosong<br>";
    } else {
        $_SESSION["upsuccess"] = true;
        $sql = "UPDATE keuangan.user set tl = '$tl' where us = '$_SESSION[username]'";
        $result = mysqli_query($con, $sql);
        if (!$result) {
            $_SESSION["upsuccess"] = false;
            $_SESSION["error"] =  $_SESSION["error"] . "Error: " . $sql . "<br>" . mysqli_error($con);
            header("location: ./profileedit.php");
        } else {
            header("location: ./profile.php");
        }
    }

    $tgl = $_POST["tanggallahir"];
    trim($tgl);
    if (empty($tgl)) {
        $_SESSION["registersuccess"] = false;
        $_SESSION["error"] =  $_SESSION["error"] . "Tanggal Lahir tidak boleh kosong<br>";
    } else {
        $_SESSION["upsuccess"] = true;
        $sql = "UPDATE keuangan.user set tgl = '$tgl' where us = '$_SESSION[username]'";
        $result = mysqli_query($con, $sql);
        if (!$result) {
            $_SESSION["upsuccess"] = false;
            $_SESSION["error"] =  $_SESSION["error"] . "Error: " . $sql . "<br>" . mysqli_error($con);
            header("location: ./profileedit.php");
        } else {
            header("location: ./profile.php");
        }
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
            } else {
                $_SESSION["upsuccess"] = true;
                $sql = "UPDATE keuangan.user set nik = '$nik' where us = '$_SESSION[username]'";
                $result = mysqli_query($con, $sql);
                if (!$result) {
                    $_SESSION["upsuccess"] = false;
                    $_SESSION["error"] =  $_SESSION["error"] . "Error: " . $sql . "<br>" . mysqli_error($con);
                    header("location: ./profileedit.php");
                } else {
                    header("location: ./profile.php");
                }
            }
        }
    }

    // warga negara
    $wn = $_POST["warganegara"];
    trim($wn);
    if (empty($wn)) {
        $_SESSION["registersuccess"] = false;
        $_SESSION["error"] =  $_SESSION["error"] . "Warga Negara tidak boleh kosong<br>";
    } else {
        $_SESSION["upsuccess"] = true;
        $sql = "UPDATE keuangan.user set wn = '$wn' where us = '$_SESSION[username]'";
        $result = mysqli_query($con, $sql);
        if (!$result) {
            $_SESSION["upsuccess"] = false;
            $_SESSION["error"] =  $_SESSION["error"] . "Error: " . $sql . "<br>" . mysqli_error($con);
            header("location: ./profileedit.php");
        } else {
            header("location: ./profile.php");
        }
    }

    // email
    $em = $_POST["email"];
    trim($em);
    if (empty($em)) {
        $_SESSION["registersuccess"] = false;
        $_SESSION["error"] =  $_SESSION["error"] . "Email tidak boleh kosong<br>";
    } else {
        $_SESSION["upsuccess"] = true;
        $sql = "UPDATE keuangan.user set em = '$em' where us = '$_SESSION[username]'";
        $result = mysqli_query($con, $sql);
        if (!$result) {
            $_SESSION["upsuccess"] = false;
            $_SESSION["error"] =  $_SESSION["error"] . "Error: " . $sql . "<br>" . mysqli_error($con);
            header("location: ./profileedit.php");
        } else {
            header("location: ./profile.php");
        }
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
            } else {
                $_SESSION["upsuccess"] = true;
                $sql = "UPDATE keuangan.user set nh = '$nh' where us = '$_SESSION[username]'";
                $result = mysqli_query($con, $sql);
                if (!$result) {
                    $_SESSION["upsuccess"] = false;
                    $_SESSION["error"] =  $_SESSION["error"] . "Error: " . $sql . "<br>" . mysqli_error($con);
                    header("location: ./profileedit.php");
                } else {
                    header("location: ./profile.php");
                }
            }
        }
    }

    // alamat
    $al = $_POST["alamat"];
    trim($al);
    if (empty($al)) {
        $_SESSION["registersuccess"] = false;
        $_SESSION["error"] =  $_SESSION["error"] . "Alamat tidak boleh kosong<br>";
    } else {
        $_SESSION["upsuccess"] = true;
        $sql = "UPDATE keuangan.user set al = '$al' where us = '$_SESSION[username]'";
        $result = mysqli_query($con, $sql);
        if (!$result) {
            $_SESSION["upsuccess"] = false;
            $_SESSION["error"] =  $_SESSION["error"] . "Error: " . $sql . "<br>" . mysqli_error($con);
            header("location: ./profileedit.php");
        } else {
            header("location: ./profile.php");
        }
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
            } else {
                $_SESSION["upsuccess"] = true;
                $sql = "UPDATE keuangan.user set kp = '$kp' where us = '$_SESSION[username]'";
                $result = mysqli_query($con, $sql);
                if (!$result) {
                    $_SESSION["upsuccess"] = false;
                    $_SESSION["error"] =  $_SESSION["error"] . "Error: " . $sql . "<br>" . mysqli_error($con);
                    header("location: ./profileedit.php");
                } else {
                    header("location: ./profile.php");
                }
            }
        }
    }

    if (!$_SESSION["registersuccess"]) {
        header("location: ./profileedit.php");
    } else {
        header("location: ./profile.php");
    }
} else {
    $_SESSION["error"] = "failed to update";
    header("Location: register.php");
}
