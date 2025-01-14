<?php
session_start(); // Start the session

// Include our conection file
include 'config.php';

if(isset($_POST['submit'])){
    // Get form data from POST request"
    $email = $_POST['email'];
    $password = $_POST['password'];
}



// Check if user exists in the database by querying the login_email column
$sql_busca_email = query("SELECT * FROM person WHERE login_email = ?",['s', $email] ,$conn);

// If user exists, check if password is correct
if ($sql_busca_email->num_rows > 0) {
    echo "Usuário encontrado: " . $email;

    // Get the password from the database
    $row = $sql_busca_email->fetch_assoc();
    $stored_password = $row['login_password'];

    // Verify the password using PHP's built-in password_verify function
    if (password_verify($password, $stored_password)) {
        // Login successful,  redirect to dashboard page
        header("Location: dashboard.html");
        exit();
    
    } else {
        // Incorrect password, display error message and continue in the login page
        $_SESSION['error'] = 'Senha incorreta';
        header("Location: index.php");
        exit();
    }
    

} else {
    // User not found, display error message and continue in the login page
    $_SESSION['error'] = "Usuário não encontrado";
    header("Location: index.php");
    exit();
}
?>
