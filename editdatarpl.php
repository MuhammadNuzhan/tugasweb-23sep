<?php
include "koneksi.php";
// Cek apakah tombol "bedit" telah diklik
if (isset($_POST['bedit'])) {
    // Ambil data yang dikirimkan dari formulir edit
    $absen = $_POST['absen'];
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $gender = $_POST['gender'];

    // Query SQL untuk melakukan pembaruan data siswa berdasarkan nomor absen
    $query = "UPDATE datarpl SET Nama='$nama', Usia='$usia', Gender='$gender' WHERE Absen='$absen'";
    $result = mysqli_query($konek, $query);

    // Cek apakah pembaruan data berhasil
    if ($result) {
        echo "success";
    } else {
        echo "error";
    }
}
