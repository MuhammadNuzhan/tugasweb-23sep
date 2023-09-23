<?php
session_start();

if (!isset($_SESSION['login'])){
    echo "<script>alert('Silakan login terlebih dahulu!'); location.href='login.php';</script>";
}
?>