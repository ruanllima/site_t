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
            <?php if ($error): ?>
                <div id="alert">
                    <div class="flex items-center bg-yellow-50 border border-yellow-300 rounded-lg p-4 max-w-lg shadow-md">
                        <!-- Icon -->
                        <div class="flex-shrink-0 text-yellow-500 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2a10 10 0 1010 10A10 10 0 0012 2zm0 15a1.5 1.5 0 11-1.5 1.5A1.5 1.5 0 0112 17zm1-4.5h-2v-5h2z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-yellow-800 mb-1">Attention needed</h4>
                            <h2 class="text-yellow-700 text-sm"><?= htmlspecialchars($error) ?></h2>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <form class="space-y-6" action="login_back.php" method="POST">
                

                <div>
                    <label for="email" class="block text-sm/6 font-medium text-white p-1">Email</label>
                    <div>
                        <input type="email" id="email" name="email" required class="block w-full rounded-xl bg-white px-3 py-1.5 text-base 
                        text-gray-700 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline
                         focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 ">
                    </div>  
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-white p-1">Password</label>  
                    </div>
                    <div>
                        <input type="password" name="password" autocomplete="current-password" required class="block w-full rounded-xl bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div><br>
                    <div class="inline-grid grid-cols-3 gap-5 justify-items-end">
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-indigo-700 hover:text-indigo-600">Forgot password?</a>
                        </div>
                        <div><h1></h1></div>
                        <div class="text-sm">
                            <a href="./create_front.php" class="font-semibold text-indigo-700 hover:text-indigo-600">Create account</a>
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" name="submit" class="flex w-full justify-center rounded-md bg-indigo-800 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function closeAlert() {
            document.getElementById('alert').style.display = 'none';
        }

        // Fecha o alert após 3 segundos automaticamente
        setTimeout(() => {
            const alert = document.getElementById('alert');
            if (alert) alert.style.display = 'none';
        }, 3000);
    </script>
</body>
</html>
