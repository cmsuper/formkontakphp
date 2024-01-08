Untuk menggunakannya, silakan edit file sendmail.php pada bagian ;

// Konfigurasi SMTP
$mail->Host       = 'smtp.example.com'; // Ganti menggunakan server SMTP Anda
$mail->Username   = 'your_username'; // Ganti menggunakan username SMTP Anda
$mail->Password   = 'your_password'; // Ganti menggunakan password SMTP Anda
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Gunakan ENCRYPTION_SMTPS jika Anda menggunakan SSL
$mail->Port       = 587; // Ganti menggunakan port SMTP Anda

 // Set pengirim dan penerima
 $mail->addAddress('recipient@example.com'); // Ganti menggunakan alamat email penerima

 // Set isi email
 $mail->Subject = 'Pesan dari Formulir Kontak';
