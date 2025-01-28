<?php
session_start();
$error = isset($_SESSION['error']) ? $_SESSION['error'] : null;
unset($_SESSION['error']);

?>

<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruan Lima</title>
    <link href="./output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="h-10 sm:w-full" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Ruan">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">Sign in your account</h2>
        </div>

        

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">

                <!-- Exibindo erro, se houver -->
            <?php if ($error == "Senha incorreta"): ?>
                
            <?php endif; ?>



            <form action="login_back.php" method="POST"> 
                <?php if ($error == null): ?>
                    <div>
                        <label for="email" class="block text-sm/6 font-medium text-white p-1">Email</label>
                        <div>
                            <input type="email" id="email" name="email" class="block w-full rounded-md bg-white px-3 py-1.5 font-light 
                            text-gray-800 placeholder:text-slate-400 placeholder:font-light focus:outline-0 focus:ring-2 focus:ring-indigo-600 sm:text-sm/6 shadow-2xl">
                        </div>  
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <label for="password" class="block text-sm/6 font-medium text-white p-1">Password</label>  
                    </div>
                    <div>
                        <input type="password" name="password"  autocomplete="current-password" class="block w-full rounded-md bg-white 
                        px-3 py-1.5 text-base text-gray-900 -outline-offset-1 placeholder:text-slate-400 placeholder:font-light focus:outline-0
                        focus:ring-2 focus:ring-indigo-600 sm:text-sm/6 shadow">
                    </div><br>
                <?php endif; ?>

                <?php if($error == "Senha incorreta"): ?>
                    <div>
                        <label for="email" class="block text-sm/6 font-medium text-white p-1">Email</label>
                        <div>
                            <input type="email" id="email" name="email" class="block w-full rounded-md bg-white px-3 py-1.5 font-light 
                            text-gray-800 placeholder:text-gray-400 focus:outline-0 focus:ring-2 focus:ring-indigo-600 sm:text-sm/6 shadow-2xl">
                        </div>  
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <label for="password" class="block text-sm/6 font-medium text-white p-1">Password</label>  
                    </div>
                    <div>
                        <input type="password" name="password" placeholder="Incorrect password" autocomplete="current-password" class="block w-full invalid_box px-3 py-1.5">
                    </div><br>
                <?php endif; ?>

                <?php if($error == "Usuário não encontrado"): ?>
                    <div>
                        <label for="email" class="block text-sm/6 font-medium text-white p-1">Email</label>
                        <div>
                            <input type="email" id="email" placeholder="User not found" name="email" class="block w-full px-3 py-1.5 invalid_box">
                        </div>  
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <label for="password" class="block text-sm/6 font-medium text-white p-1">Password</label>  
                    </div>
                    <div>
                        <input type="password" name="password" autocomplete="current-password" class="block w-full rounded-md bg-white 
                        px-3 py-1.5 text-base text-gray-900 -outline-offset-1 placeholder:text-gray-400 focus:outline-0
                        focus:ring-2 focus:ring-indigo-600 sm:text-sm/6 shadow">
                    </div><br>
                <?php endif; ?>
                
                <div>
          
                    <div>
                        <button type="submit" name="submit" class="w-full mt-4 col-start-1 col-end-3 justify-center rounded-xl bg-indigo-700 px-3 py-1.5 text-sm/6 font-semibold text-white 
                        shadow-sm focus-visible:outline-offset-2 hover:bg-indigo-800 transition_button">Sign in</button>
                    </div>
                    <div class="grid grid-cols-3 gap-5 justify-items-end mt-2">
                            <div class="text-sm">
                                    <a href="./forgotPassword.php" class="font-semibold text-indigo-500 hover:text-indigo-400">Forgot password?</a>
                                </div>
                                <div><h1></h1></div>
                                <div class="text-sm">
                                    <a href="./create.php" class="font-semibold text-indigo-500 hover:text-indigo-400">Create account</a>
                            </div>
                    </div>
                </div>
                
            </form>
        </div>
    </div>

    <script>
        function closeAlert() {
            document.getElementById('alert').style.display = 'none';
        }

        setTimeout(() => {
            const alert = document.getElementById('alert');
            if (alert) alert.style.display = 'none';
        }, 3000);
    </script>
</body>
</html>
