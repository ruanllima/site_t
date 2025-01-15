<?php
include 'config.php';

$email = $_POST['email'];  // Recebe o email via POST
$existing = false;

$query = query("SELECT * FROM person WHERE login_email = ?", ["s", $email], $conn);

if($query->num_rows > 0){
    $existing = true;
    print "Email is already in use";
}
else{
    print "Email is available";
}

?>
