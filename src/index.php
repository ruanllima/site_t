<?php
session_start();
$error = isset($_SESSION['error']) ? $_SESSION['error'] : null;
unset($_SESSION['error']); // Limpa a mensagem após exibi-la
?>

<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruan Lima</title>
    <link href="./output.css" rel="stylesheet">
</head>
<body class="h-full">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="h-10 sm:w-full" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Ruan">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">Sign in your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="login.php" method="POST">
                
                <!-- Exibindo erro, se houver -->
                <?php if ($error): ?>
                    <div id="alert" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                        <span><?= htmlspecialchars($error) ?></span>
                        <button onclick="closeAlert()" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path d="M14.348 5.652a1 1 0 10-1.414-1.414L10 7.172 7.066 4.238a1 1 0 10-1.414 1.414L8.828 10l-3.176 3.176a1 1 0 101.414 1.414L10 12.828l2.934 2.934a1 1 0 101.414-1.414L11.172 10l3.176-3.176z" />
                            </svg>
                        </button>
                    </div>
                <?php endif; ?>

                <div>
                    <label for="email" class="block text-sm/6 font-medium text-white p-1">Email</label>
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
