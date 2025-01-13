<?php

// Include our conection file
include('config.php');

// Check if the form was submitted and get form data from POST request
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);


// Insert the data in the database
$result = query("INSERT INTO person (username, login_email, login_password) VALUES (?,?,?)",
 ['sss', $username, $email, $hashed_password], $conn);
 header("Location: index.php");
 exit();

?>