<?php
session_start();
$check = isset($_SESSION['status']) ? $_SESSION['status'] : null;
unset($_SESSION['status']);

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

            <?php if($check === null): ?>
                <h2 class="text-gray-800 font-bold text-center text-3xl m-10 mt-16 mb-12">Recover Password</h2>
                <h1 class="text-gray-400 text-center text-sm pb-5">Enter your email to recover your password</h1>
                <form action="recover_password.php" method="POST" class="flex flex-col items-center sm:mx-auto sm:w-full ">
                    <input type="email" name="email" id="email" placeholder="you@example.com" class="bg-white rounded-md border border-slate-300 shadow-sm
                    focus:ring-1 focus:ring-sky-500 focus:outline-none font-light text-slate-600 p-2 mb-7 pr-10 w-2/4 placeholder:text-sm 
                    placeholder:text-slate-400 placeholder:font-light">
                    <button type="submit" name="submit1" id="submit1" class="bg-indigo-600 rounded-md font-bold text-slate-300 m-2 p-2 w-1/4 mt-5 mb-16 transition hover:translate-y-1
                    hover:scale-110 ease-in-out delay-7 hover:bg-indigo-700 hover:text-slate-200">Enter</button>
                </form>
            <?php endif; ?>

            <?php if($check === 'Email not found'): ?>
                <div id="alert">
                    <div class="alert absolute bottom-8 left-5 flex items-center opacity-80 bg-yellow-50 border border-yellow-600 rounded-md p-4 py-7 pr-20">
                        <div class="flex-shrink-0 text-yellow-500 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2a10 10 0 1010 10A10 10 0 0012 2zm0 15a1.5 1.5 0 11-1.5 1.5A1.5 1.5 0 0112 17zm1-4.5h-2v-5h2z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-normal text-yellow-800 mb-1">Email not found!</h4>
                            <h2 class="text-yellow-700 text-sm"></h2>
                        </div>
                    </div>
                </div>
                <h2 class="text-gray-800 font-bold text-center text-3xl m-10 mt-16 mb-12">Recover Password</h2>
                <h1 class="text-gray-400 text-center text-sm pb-5">Enter your email to recover your password</h1>
                <form action="recover_password.php" method="POST" class="flex flex-col items-center sm:mx-auto sm:w-full ">
                    <input type="email" name="email" id="email" placeholder="you@example.com" class="p-2 mb-7 pr-10 w-2/4 invalid_box">
                    <button type="submit" name="submit1" id="submit1" class="bg-indigo-600 rounded-md font-bold text-slate-300 m-2 p-2 w-1/4 mt-5 mb-16 transition hover:translate-y-1
                    hover:scale-110 ease-in-out delay-7 hover:bg-indigo-700 hover:text-slate-200">Enter</button>
                </form>
            <?php endif; ?>

            <?php if($check === 'Email exists'): ?>
                <div class="flex flex-col items-center">
                    <h2 class="text-gray-800 font-bold text-center text-3xl m-10 mt-16 mb-12">Recover Password</h2>
                    <h1 class="text-gray-400 text-center text-sm pb-5">Enter the code sent to your email</h1>
                    <form action="recover_password.php" method="POST" class="flex flex-col items-center sm:mx-auto sm:w-full ">
                        <div class="inline-flex">
                            <input type="text" name= "code1" id="code1" maxlength="1" class="box_password">
                            <input type="text" name= "code2" id="code2" maxlength="1" class="box_password">
                            <input type="text" name= "code3" id="code3" maxlength="1" class="box_password">
                            <input type="text" name= "code4" id="code4" maxlength="1" class="box_password">
                            <input type="text" name= "code5" id="code5" maxlength="1" class="box_password">
                            <input type="text" name= "code6" id="code6" maxlength="1" class="box_password">
                        </div>
                        <button type="submit" name="submit2" id="submit2" class="bg-indigo-600 rounded-md font-bold text-slate-300 m-2 p-2 w-1/4 mt-5 mb-16 transition hover:translate-y-1
                        hover:scale-110 ease-in-out delay-7 hover:bg-indigo-700 hover:text-slate-200">Enter</button>
                    </form>
                </div>
            <?php endif; ?>

            
            <?php if($check === 'Invalidate'): // quando tiver tempo mudar essas classes para uma única lá no input.css ?>
              
                <div class="flex flex-col items-center">
                    <h2 class="text-gray-800 font-bold text-center text-3xl m-10 mt-16 mb-12">Recover Password</h2>
                    <h1 class="text-gray-400 text-center text-sm pb-5">Enter the code sent to your email</h1>
                    <form action="recover_password.php" method="POST" class="flex flex-col items-center sm:mx-auto sm:w-full ">
                        <div class="inline-flex">
                            <input type="text" name= "code1" id="code1" maxlength="1" style="animation-delay: 10ms;" oninput="key_focus('code2')" class="box_password invalid_box">
                            <input type="text" name= "code2" id="code2" maxlength="1" style="animation-delay: 20ms;" oninput="key_focus('code3')" class="box_password invalid_box ">
                            <input type="text" name= "code3" id="code3" maxlength="1" style="animation-delay: 30ms;" oninput="key_focus('code4')" class="box_password invalid_box">
                            <input type="text" name= "code4" id="code4" maxlength="1" style="animation-delay: 40ms;" oninput="key_focus('code5')" class="box_password invalid_box">
                            <input type="text" name= "code5" id="code5" maxlength="1" style="animation-delay: 50ms;" oninput="key_focus('code6')" class="box_password invalid_box">
                            <input type="text" name= "code6" id="code6" maxlength="1" style="animation-delay: 60ms;" class="box_password invalid_box">
                        </div>
                        <button type="submit" name="submit2" id="submit2" class="bg-indigo-600 rounded-md font-bold text-slate-300 m-2 p-2 w-1/4 mt-5 mb-16 transition hover:translate-y-1
                        hover:scale-110 ease-in-out delay-7 hover:bg-indigo-700 hover:text-slate-200">Enter</button>
                    </form>
                </div>
            <?php endif; ?>

            <?php if($check === 'Validate'): ?>
                <div class="flex flex-col items-center w-full">
                    <h2 class="text-gray-800 font-bold text-center text-3xl m-10 mt-16 mb-12">Reset Password</h2>
                    <form action="recover_password.php" method="POST" class="flex flex-col ">
                        <input type="password" name="password" id="password" oninput="validate_password(); validate_newPassword(); validate_match()" placeholder="Enter your new password" required class="bg-white border shadow-sm border-slate-300 
                        placeholder-slate-400 placeholder:font-normal text-slate-600 font-light focus:outline-none focus:ring-sky-500 block rounded-md sm:text-sm focus:ring-1 
                        p-3 py-2 mt-4 w-full">
                        <div class="mt-3 flex flex-col items-start place-content-start">
                            <span class="text-slate-500 font-semibold text-xs">Your password must be at least:</span>
                            <ul role="list" id="list" class="marker:text-red-500 list-disc pl-4 space-y-1 text-red-500 text-xs">
                                <li id="length">Eight characters;</li>
                                <li id="number">One number;</li>
                                <li id="letter">One letter;</li>
                                <li id="special">One special character.</li>
                            </ul>
                        </div>
                        
                                <input type="password" name="password2" id="password2" oninput="validate_match(), validate_newPassword()" placeholder="Enter your password again" required class="bg-white border shadow-sm border-slate-300 
                                placeholder-slate-400 placeholder:font-normal text-slate-600 font-light focus:outline-none focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 
                                p-3 py-2 mt-4">

                            <span id="match" class="font-light text-sm"></span>
                        <div class="flex items-center place-content-center">
                            <button type="submit" disabled="true" name="submit3" id="submit3" class=" bg-slate-300 text-gray-400 rounded-md 
                            font-bold px-24 py-2 m-7 mt-12 shadow-md">Reset</button>
                        </div>
                    </form>
                </div> 
            <?php endif; ?>

            <?php if($check === 'Password changed'): ?>
                <h2 class="text-gray-800 font-bold text-center text-3xl m-10 mt-16 mb-12">Recover Password</h2>
                <h1 class="text-gray-400 text-center text-lg pb-5">Your password has been reset!</h1>
                <form action="login.php" method="POST" class="flex flex-col items-center sm:mx-auto sm:w-full ">
                    <button type="submit" id="submit1" class="bg-indigo-600 rounded-md font-bold text-slate-300 m-2 p-2 w-1/4 mt-5 mb-16 transition hover:translate-y-1
                    hover:scale-110 ease-in-out delay-7 hover:bg-indigo-700 hover:text-slate-200">Login</button>
                </form>
            <?php endif; ?>
            
        </div>
    </div>

    <script src="JS/validate.js"></script>
    <script src="JS/input.js"></script>
    <script>

    </script>
</body>
</html>