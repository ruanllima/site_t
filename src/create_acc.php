<?php

include('config.php');


if(isset($_POST['submit']))
{
    $_username = $_POST['username'];
    $_email = $_POST['email'];
    $_password = $_POST['password'];

}

$result = query("INSERT INTO person (username, login_email, login_password) VALUES (?,?,?)",
 ['sss', $_username, $_email, $_password], $conn);
 header("Location: index.php");
 exit();

?>