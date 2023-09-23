<?php
include "koneksi.php";
$a = $_POST['username'];
$b = $_POST['password'];
$login = "select * from login where username= '$a' and password= '$b' ";
$sql = mysqli_query($konek,$login);
$data = mysqli_fetch_array($sql);
session_start();

if(mysqli_num_rows($sql)== 1){
    $_SESSION['login'] = true;
    echo "<script>alert('Selamat Datang ".$data['username'].", Anda berhasil login'); location.href='index.php';</script>";
}
    else {
        echo "<script>alert('Gagal Login'); location.href='index.php';</script>";

}
    ?>