<?php

include 'config.php';
session_start();

$code = isset($_SESSION['code']) ? $_SESSION['code'] : null;


if(isset($_POST['submit1'])){
    $email = $_POST['email'];

    $query = query('SELECT * FROM person WHERE login_email = ?', ['s', $email], $conn);

    if($query->num_rows > 0){
        $_SESSION['status'] = 'Email exists';
        $_SESSION['email'] = $email;
        header('Location: send_email.php');
        exit();
    }
    else{
        $_SESSION['status'] = 'Email not found';
        header('Location: forgotPassword.php');
        exit();
    }
    }

if(isset($_POST['submit2'])){
    $code1 = $_POST['code1'];
    $code2 = $_POST['code2'];
    $code3 = $_POST['code3'];
    $code4 = $_POST['code4'];
    $code5 = $_POST['code5'];
    $code6 = $_POST['code6'];

    $code_full = $code1.$code2.$code3.$code4.$code5.$code6;

    if($code===$code){
        $_SESSION['status'] = 'Validate';
        header('Location: forgotPassword.php');
    }
    else{
        $_SESSION['status'] = 'Invalidate';
        header('Location: forgotPassword.php');
    }
}

?>