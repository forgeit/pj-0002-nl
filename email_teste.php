<?php 

require_once __DIR__ . '/Config/Config.php';
require_once __DIR__ . Config::AUTOLOAD;

$mail = new PHPMailer();
$mail->From = utf8_encode('site@lisaruth.com.br');
$mail->FromName = utf8_encode('Lisaruth');
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tsl";
$mail->Host = 'smtp.lisaruth.com.br';
$mail->Port = '587';
$mail->Username = 'newsletter=lisaruth.com.br';            //Username of your email account
$mail->Password = '78981_Lumina';
$mail->AddAddress('kelvinpalves@gmail.com');
$mail->isHTML(true);
$mail->Subject = 'Teste';
$mail->Body = 'Teste';

if (!$mail->send()) {
    print_r($mail->ErrorInfo);
} else {
    print_r("sucesso");
}