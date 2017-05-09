<?php 

require_once __DIR__ . '/Config/Config.php';
require_once __DIR__ . Config::AUTOLOAD;

$mail = new PHPMailer();

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$mail->From = utf8_encode('newsletter@lisaruth.com.br');
$mail->FromName = utf8_encode('Lisaruth Delícias Caseiras');
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'smtp.lisaruth.com.br';
$mail->Port = '587';
$mail->Username = 'newsletter@lisaruth.com.br';            //Username of your email account
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