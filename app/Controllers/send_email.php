<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
require_once('C:\xampp\htdocs\crud\crud_2\vendor\phpmailer\phpmailer\src\Exception.php');
require_once('C:\xampp\htdocs\crud\crud_2\vendor\phpmailer\phpmailer\src\PHPMailer.php');
require_once('C:\xampp\htdocs\crud\crud_2\vendor\phpmailer\phpmailer\src\SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Configurar o charset
ini_set('default_charset', 'UTF-8');

$phpmailer =  new PHPMailer(true);

try {
	// Looking to send emails in production? Check out our Email API/SMTP product!

// Configurações de servidor
$phpmailer->isSMTP();
$phpmailer->Host = 'sandbox.smtp.mailtrap.io';
$phpmailer->CharSet = 'UTF-8';

$phpmailer->SMTPAuth = true;
$phpmailer->Port = 2525;
$phpmailer->Username = 'b54e762c2d7a16';
$phpmailer->Password = 'f769202812f9cc';

// Configurações de remetente e destinatário
 $phpmailer->setFrom('mateusbarrosflamengo@gmail.com', 'Mailer');
 $phpmailer->addAddress($email, $nome);  

// Conteúdo do E-mail
    $phpmailer->isHTML(true);
    $phpmailer->Subject = 'Assunto do E-mail';
    // $phpmailer->addEmbeddedImage();
    $phpmailer->Body = '<h1>Olá '.$nome.'!</h1>
    <p>Você criou sua conta com sucesso!</p>';
    $phpmailer->AltBody = 'Olá';

     // Enviar o e-mail
    $phpmailer->send();
    
} catch (Exception $e) {
	echo "erro". $mail->ErrorInfo;
}