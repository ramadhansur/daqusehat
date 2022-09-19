<?php
error_reporting(0);
session_start();
    if($_SESSION["keterangan"] == "Admin") {
        header("Location: ./admin/admin.php");
    } else if($_SESSION["keterangan"] == "Resepsionis") {
        header("Location: ./resepsionis/index.php");
    } else if($_SESSION["keterangan"] == "Laboratorium") {
        header("Location: ./laboratorium/lab.php");
    } else if($_SESSION["keterangan"] == "Farmasi") {
        header("Location: ./farmasi/farmasi.php");
    } else if($_SESSION["keterangan"] == "KIA") {
        header("Location: ./kia/kia.php");
    } else if($_SESSION["keterangan"] == "poligigi") {
        header("Location: ./poligigi/poligigi.php");
    } else if($_SESSION["keterangan"] == "dokter") {
        header("Location: ./poliumum/poliumum.php");
    } else {
        echo "
            <script>
                window.location = 'index.html';
            </script>
        ";
    }
?>