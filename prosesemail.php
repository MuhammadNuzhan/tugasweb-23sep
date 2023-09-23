<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];

    // Konfigurasi email
    $to = 'muhammadnuzhan29@gmail.com';
    $subject = 'Pesan dari Form Kirim Email';
    $message = "Nama: $nama\n";
    $message .= "Telepon: $telp\n";
    $message .= "Email: $email\n";

    // Mengirim email
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    // Redirect kembali ke halaman form
    header('Location: form.html');
} else {
    echo "Permintaan tidak valid";
}
//