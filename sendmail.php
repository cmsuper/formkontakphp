<?php
// Ini adalah script yang menerima request dari Form Kontak index.php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Pastikan Anda telah menginstal PHPMailer melalui Composer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $mail = new PHPMailer(true);

    try {
        // Konfigurasi SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.example.com'; // Ganti menggunakan server SMTP Anda
        $mail->SMTPAuth   = true;
        $mail->Username   = 'your_username'; // Ganti menggunakan username SMTP Anda
        $mail->Password   = 'your_password'; // Ganti menggunakan password SMTP Anda
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Gunakan ENCRYPTION_SMTPS jika Anda menggunakan SSL
        $mail->Port       = 587; // Ganti menggunakan port SMTP Anda

        // Set pengirim dan penerima
        $mail->setFrom($email, $name);
        $mail->addAddress('recipient@example.com'); // Ganti menggunakan alamat email penerima

        // Set isi email
        $mail->isHTML(true);
        $mail->Subject = 'Pesan dari Formulir Kontak';
        $mail->Body    = $message;

        // Kirim email
        $mail->send();
        echo 'Pesan Anda berhasil dikirim ke alamat tujuan';
    } catch (Exception $e) {
        echo "Yah, ... Pesan gagal dikirim. Kesalahannya adalah: {$mail->ErrorInfo}";
    }
}
?>
