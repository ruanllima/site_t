<?php
session_start();
$email = isset($_SESSION['email']) ? $_SESSION['email'] : null;
?>

<!DOCTYPE html>
<html lang="en" class="bg-gray-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="">
    <?php if($email): ?>
        <h1> OII <?php echo htmlspecialchars($email); ?> </h1>
    <?php endif; ?>
</body>
</html>
