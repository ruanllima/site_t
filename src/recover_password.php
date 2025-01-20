<?php

include 'condig.php';
session_start();

if(isset($_POST['submit1'])){
    $email = $_POST['email'];

$query = query('SELECT * FROM person WHERE login_email = ?', ['s', $email], $conn);

if($query->num_rows > 0){
    $_SESSION['email'] = 'Email exists';
}
else{
    $_SESSION['email'] = 'Email not found';
}
}

?>