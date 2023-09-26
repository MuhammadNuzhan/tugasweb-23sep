<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Load autoloader and create a PHPMailer instance
    require 'vendor/autoload.php';
    $mail = new PHPMailer(true);

    // Set up SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'muhammadnuzhan130505@gmail.com';
    $mail->Password = 'holv qrzv tjns iqxx';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Ambil data dari formulir
    $nama = $_POST["nama"];
    $email_pengirim = $_POST["email"];
    $subjek = $_POST["subjek"];
    $pesan = $_POST["pesan"];

    // Set email content
    $mail->isHTML(false);
    $mail->Subject = $subjek;
    $mail->addReplyTo($email_pengirim, $nama);
    $mail->Body = "Email: $email_pengirim\n";
    $mail->Body = "Pesan:\n$pesan";

    $tujuan = 'muhammadnuzhan27@gmail.com';

    // Set email sender and recipient
    $mail->setFrom($email_pengirim, $nama);
    $mail->addAddress($tujuan);

    try {
        // Send the email
        $mail->send();
        echo "Pesan berhasil terkirim";
        header("Location: index.php#contact");
        exit();
    } catch (Exception $e) {
        echo "Pesan gagal terkirim. Pesan error: {$mail->ErrorInfo}";
    }
}
