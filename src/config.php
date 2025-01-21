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
    return bin2hex($bytes);
}
?>
