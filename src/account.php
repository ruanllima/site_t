<?php

include('config.php');

if(isset($_POST['submit']))
{
    $_username = $_POST['username'];
    $_email = $_POST['email'];
    $_password = $_POST['password'];

    echo $_username . $_email . $_password;
}
?>