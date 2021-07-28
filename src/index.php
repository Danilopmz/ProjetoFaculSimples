<?php
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try{
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'danilopmzxd@gmail.com';
    $mail->Password = '15233255';
    $mail->Port = 587;

    $mail->setFrom('danilopmzxd@gmail.com');
    $mail->addAddress('danilopmzxd@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Teste de email';
    $mail->Body = 'Chegou o email de teste';
    $mail->AltBody = 'Chegou o email de teste';

    if($mail->send()){
        echo 'Email enviado';
    } else{
        echo 'Email nao enviado';
    }


}catch(Exception$e){
    echo "Erro ao enviar mensagem:{$mail->ErrorInfo}";
}