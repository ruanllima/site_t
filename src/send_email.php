<?php

include "config.php";
include __DIR__ . '/../vendor/autoload.php';  // Caminho relativo ao diretório 'src'

session_start();
$email = isset($_SESSION['email']) ? $_SESSION['email'] :null;
$code = random_code();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


    
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
    $mail->addAddress($email);

    // Conteúdo do e-mail
    $mail->isHTML(true);
    $mail->Subject = 'Password Recovery';
    $mail->Body = '
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
            .container { max-width: 600px; margin: 0 auto; background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
            .code { font-size: 24px; font-weight: bold; color: #0073e6; text-transform: uppercase; }
            .footer { margin-top: 20px; font-size: 12px; color: #777777; text-align: center; }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Password Recovery</h2>
            <p>Hello,</p>
            <p>You have requested a password recovery. Use the code below to continue:</p>
            <p class="code">' . $code . '</p>
            <p>If you did not request a password recovery, please ignore this email.</p>
            <div class="footer">
                <p>&copy; ' . date('Y') . ' Ruan Lima. All rights reserved.</p>
            </div>
        </div>
    </body>
    </html>';





    // Enviar o e-mail
    $mail->send();
    echo 'E-mail enviado com sucesso!';
} catch (Exception $e) {
    echo "Erro ao enviar e-mail: {$mail->ErrorInfo}";
}

$_SESSION['code'] = $code;
header("Location: forgotPassword.php");
?>
