<?php

include('config.php');

if(isset($_POST['submit']))
{
    $_text = $_POST['text'];
    $_email = $_POST['email'];
    $_password = $_POST['password'];

    echo $_text . ' ' . $_email . ' ' . $_password;
}
?>