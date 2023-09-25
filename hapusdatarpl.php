<?php
// Pastikan Anda memiliki koneksi ke database
include "koneksi.php";

// Cek apakah ID Absen yang akan dihapus sudah dikirimkan melalui parameter POST atau GET
if (isset($_POST['absen'])) {
    $id_absen = $_POST['absen'];

    // Buat query SQL DELETE
    $query = "DELETE FROM datarpl WHERE Absen = '$id_absen'";

    // Eksekusi query DELETE
    $result = mysqli_query($konek, $query);

    // Cek apakah penghapusan berhasil
    if ($result) {
        // Jika penghapusan berhasil, kirimkan respons 'success' ke JavaScript
        echo 'success';
    } else {
        // Jika terjadi masalah saat menghapus data, kirimkan respons 'error' ke JavaScript
        echo 'error';
    }
} else {
    // Jika ID Absen tidak ditemukan dalam parameter POST atau GET, kirimkan respons 'error' ke JavaScript
    echo 'error';
}
