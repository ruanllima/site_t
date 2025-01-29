<?php
// config.php

// Configurações do banco de dados
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'site';


//SMTP EMAIL

define("SMTP_HOST", 'smtp.gmail.com');
define("SMTP_PORT", 465);
define("SMTP_USER", 'ruanlimafn@gmail.com');
define("SMTP_PASS", 'aexv yega clgb iizz');

// Conectar ao banco de dados
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Function to execute prepared statements with parameters (query parameters)
function query($query, $params, $conn){
    $stmt = $conn->prepare($query);
    $stmt->bind_param(...$params);
    $stmt->execute();
    return $stmt->get_result();
}

function random_code(){
    $bytes = random_bytes(3);
    $string = bin2hex($bytes);

    return strtoupper($string);
}
?>



$model_email = '<html>
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
            <h2>Recuperação de Senha</h2>
            <p>Olá,</p>
            <p>Você solicitou a recuperação de senha. Use o código abaixo para continuar:</p>
            <p class="code">' . $code . '</p>
            <p>Se você não solicitou essa recuperação, ignore este e-mail.</p>
            <div class="footer">
                <p>&copy; ' . date('Y') . ' Sua Empresa. Todos os direitos reservados.</p>
            </div>
        </div>
    </body>
    </html>';
