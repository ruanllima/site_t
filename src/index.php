<?php
if (isset($_POST['submit'])) {

   // print_r($_POST['email']);
    //print_r($_POST['password']);

    include_once('config.php');

    $email = $_POST['email'];
    $password = $_POST['password'];
  //
}
?>


<!DOCTYPE html>
<html lang="en" class="h-full bg-gradient-to-r from-orange-500 to-red-700">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruan Lima</title>
    <link href="./output.css" rel="stylesheet">
</head>
<body class="h-full">

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-14 w-auto" src="./media/ronin-ron-logo.png" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">Ruan Lima</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="index.php" method="POST">
                <div>
                    <label for="login" class="block text-sm/6 font-medium text-white p-1">Email</label>
                    <div>
                    <input type="email" id="email" name="email" required class="block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-700 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 ">
                    </div>  
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-white p-1">Password</label>  
                    </div>
                    <div>
                        <input type="password" name="password" autocomplete="current-password" required class="block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div><br>
                    <div class="text-sm">
                        <a href="#" class="font-semibold text-gray-800 hover:text-gray-700">Forgot password?</a>
                    </div>
                </div>

                <div>
                    <button type="submit" name="submit" class="flex w-full justify-center rounded-md bg-indigo-800 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button"></button>
                </div>
            </form>
        </div>
    
    </div>
</body>
</html>