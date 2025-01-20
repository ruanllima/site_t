<?php
session_start();
$check = isset($_SESSION['email']) ? $_SESSION['email'] : null;
unset($_SESSION['email']);

?>

<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruan Lima</title>
    <link href="./output.css" rel="stylesheet">
    <link href="./CSS/main.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full flex items-center place-content-center relative">
    <div class="bg-gray-100 w-2/5 top-20 shadow-lg rounded-md ">

        <div class="flex flex-col items-center">
            <h2 class="text-gray-800 font-bold text-center text-3xl m-10 mt-16 mb-12">Recover Password</h2>
            <h1 class="text-gray-400 text-center text-sm pb-5">Enter your email to recover your password</h1>

            <form action="send_email.php" method="POST" class="flex flex-col items-center sm:mx-auto sm:w-full ">
                <input type="email" name="email" id="email" placeholder="you@example.com" class="bg-white rounded-md border border-slate-300 shadow-sm
                focus:ring-1 focus:ring-sky-500 focus:outline-none font-light text-slate-600 p-2 mb-7 pr-10 w-2/4 placeholder:text-sm 
                placeholder:text-slate-00 placeholder:font-light">
                <button type="submit" id="submit1" class="bg-indigo-600 rounded-md font-bold text-slate-300 m-2 p-2 w-1/4 mt-5 mb-16 transition hover:translate-y-1
                hover:scale-110 ease-in-out delay-7 hover:bg-indigo-700 hover:text-slate-200">Enter</button>
            </form>
        </div>
        

        <div style="display: none;" class="flex flex-col items-center">
            <h2 class="text-gray-800 font-bold text-center text-3xl m-10 mt-16 mb-12">Recover Password</h2>
            <h1 class="text-gray-400 text-center text-sm pb-5">Enter your email to recover your password</h1>
            <form action="" class="flex flex-col items-center sm:mx-auto sm:w-full ">
                <div class="inline-flex">
                    <input type="text" id="code1" maxlength="1" class="box_password">
                    <input type="text" id="code2" maxlength="1" class="box_password">
                    <input type="text" id="code3" maxlength="1" class="box_password">
                    <input type="text" id="code4" maxlength="1" class="box_password">
                    <input type="text" id="code5" maxlength="1" class="box_password">
                    <input type="text" id="code6" maxlength="1" class="box_password">
                </div>
                <button type="submit" class="bg-indigo-600 rounded-md font-bold text-slate-300 m-2 p-2 w-1/4 mt-5 mb-16 transition hover:translate-y-1
                hover:scale-110 ease-in-out delay-7 hover:bg-indigo-700 hover:text-slate-200">Enter</button>
            </form>
        </div>
        
    </div>


</body>
</html>