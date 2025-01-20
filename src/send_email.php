<?php

include "config.php";
include __DIR__ . '/../vendor/autoload.php';  // Caminho relativo ao diretório 'src'


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = $_POST['email'];
    
    $mail = new PHPMailer(true);

    try {
        // Configuração do servidor SMTP
        $mail->isSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ruanlimafn@gmail.com';
        $mail->Password = 'aexv yega clgb iizz'; // Sua senha aqui
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Configuração do remetente e destinatário
        $mail->setFrom('ruanlimafn@gmail.com', 'Ruan Lima');
        $mail->addAddress($to);

        // Conteúdo do e-mail
        $mail->isHTML(true);
        $mail->Subject = 'Recuperação de Senha';
        $mail->Body = '<p>Olá, este é um teste de envio de e-mail!</p>';

        // Enviar o e-mail
        $mail->send();
        echo 'E-mail enviado com sucesso!';
    } catch (Exception $e) {
        echo "Erro ao enviar e-mail: {$mail->ErrorInfo}";
    }
}
?>
