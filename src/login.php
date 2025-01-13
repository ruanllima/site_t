<?php
session_start(); // Inicia a sessão

// Inclui o arquivo de configuração da conexão com o banco
include 'config.php';

function query($query, $conexao){
    $sql_query = $conexao->query($query);
    return $sql_query;
}

$email = $conexao->real_escape_string($_POST['email']);
$password = $conexao->real_escape_string($_POST['password']);

$sql_busca_email = query("SELECT * FROM person WHERE login_email = '$email'", $conexao);

if ($sql_busca_email->num_rows > 0) {
    echo "Usuário encontrado: " . $email;



    $sql_busca_password = query("SELECT * FROM person WHERE login_email = '$email' AND login_password = '$password'", $conexao);
    if ($sql_busca_password->num_rows>0) {
        echo "usuario autenticado";
        header("Location: dashboard.html");
    
    } else {
        $_SESSION['error'] = 'Senha incorreta';
        header("Location: index.php");
    }
    

} else {
    $_SESSION['error'] = "Usuário não encontrado";
    header("Location: index.php");
}
?>
