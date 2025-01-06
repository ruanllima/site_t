<?php
// Inclui o arquivo de configuração da conexão com o banco
include('config.php');

// Verifica se o formulário foi enviado
if (isset($_POST['submit'])) {

    // Obtém os dados do formulário
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Preparar a consulta SQL para buscar o usuário pelo e-mail
    $sql = "SELECT login_email, login_password FROM person WHERE login_email = ?";
    $stmt = $conexao->prepare($sql);

    // Verifica se a preparação da consulta foi bem-sucedida
    if ($stmt) {
        // Liga o parâmetro da consulta ao valor de $email
        $stmt->bind_param("s", $email);

        // Executa a consulta
        $stmt->execute();

        // Obtém o resultado da consulta
        $result = $stmt->get_result();

        // Verifica se o e-mail foi encontrado
        if ($result->num_rows > 0) {
            // O e-mail foi encontrado, agora vamos comparar a senha
            $user = $result->fetch_assoc();

            // Compara a senha digitada com a senha armazenada no banco
            if ($user['login_password'] === $password) {
                echo "Login bem-sucedido!";
                // Aqui você pode redirecionar para a área restrita do seu site
            } else {
                echo "Senha incorreta!";
            }
        } else {
            echo "Usuário não encontrado!";
        }

        // Fecha a consulta
        $stmt->close();
    } else {
        echo "Erro ao preparar a consulta!";
    }

    // Fecha a conexão
    $conexao->close();
}
?>