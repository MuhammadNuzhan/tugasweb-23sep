<?php
// Pastikan Anda memiliki koneksi ke database
include "koneksi.php";

// Cek apakah form telah disubmit
if (isset($_POST['bsimpan'])) {
    // Ambil data dari form
    $absen = $_POST['absen'];
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $gender = $_POST['gender'];

    // Buat query SQL INSERT
    $query = "INSERT INTO datarpl (Absen, Nama, Usia, Gender) VALUES ('$absen', '$nama', '$usia', '$gender')";

    // Eksekusi query INSERT
    $result = mysqli_query($konek, $query);

    // Cek apakah penambahan data berhasil
    if ($result) {
        // Redirect kembali ke halaman yang menampilkan data
        header("Location: datarpl.php");
        exit();
    } else {
        // Tampilkan pesan error jika terjadi masalah saat menambahkan data
        echo "Error: " . mysqli_error($konek);
    }
}
