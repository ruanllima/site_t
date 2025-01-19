

<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="./output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full flex items-center place-content-center relative">

        <div id="alert" style="display: none;">
            <div class="animate-bounce absolute bottom-8 left-5 flex items-center opacity-80 bg-yellow-50 border border-yellow-600 rounded-md p-4 py-7  pr-20 shadow-md">
                <!-- Icon -->
                <div class="flex-shrink-0 text-yellow-500 mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2a10 10 0 1010 10A10 10 0 0012 2zm0 15a1.5 1.5 0 11-1.5 1.5A1.5 1.5 0 0112 17zm1-4.5h-2v-5h2z" />
                    </svg>
                </div>
                <div>
                    <h4 class="font-normal text-yellow-800 mb-1">Make sure all requirements are met!</h4>
                    <h2 class="text-yellow-700 text-sm"></h2>
                </div>
            </div>
        </div>
            


    <div class="bg-gray-100 rounded-2xl w-4/12 shadow-lg relative top-20">

        <h2 class="text-gray-800 font-bold text-center text-3xl m-20">Create Your Account</h2>
        <div class="">
            <form id="form" class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm" action="create_back.php" method="POST">

                <div class="">
                    <label for="text" class="block"> 
                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 font-medium text-slate-700 text-sm">Name</span>
                        <input type="text" name="username" id="username" placeholder="Enter your full name" oninput="validate_form(); validate_username()" required minlength="2" 
                        class="bg-white border shadow-sm border-slate-300 placeholder-slate-400 placeholder:font-normal text-slate-600 
                        font-light focus:outline-none focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 p-3 py-2 ">
                    </label>
                    
                    
                </div>
                <br>
                <div>
                    <label for="email" class="block"> 
                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 font-medium text-slate-700 text-sm">Email</span>
                        <input type="email" name="email" id="email" placeholder="you@example.com" oninput="validate_email(); validate_email2(); validate_form()" required class="bg-white border shadow-sm border-slate-300 
                        placeholder-slate-400 placeholder:font-normal text-slate-600 font-light focus:outline-none focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 
                        p-3 py-2 ">
                    </label>
                    <span id="alert_email" style="display: none" class=" text-sm text-red-500 font-light">This email is already in use</span>
                </div>
                <br>
                <br>
                <div>
                    <label for="password" class="block"> 
                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 font-medium text-slate-700 text-sm">Password</span>
                        <input type="password" name="password" id="password" oninput="validate_password(); validate_match(); validate_form()" placeholder="Enter your password" required class="bg-white border shadow-sm border-slate-300 
                        placeholder-slate-400 placeholder:font-normal text-slate-600 font-light focus:outline-none focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 
                        p-3 py-2">
                    </label>
                </div>
                <div class="mt-3">
                    <span class="text-slate-500 font-semibold text-xs">Your password must be at least:</span>

                    <ul role="list" id="list" class="marker:text-red-500 list-disc pl-4 space-y-1 text-red-500 text-xs">
                        <li id="length">Eight characters;</li>
                        <li id="number">One number;</li>
                        <li id="letter">One letter;</li>
                        <li id="special">One special character.</li>
                    </ul>
                    
                </div>
                    
                <div>
                    <label for="password" class="block"> 
                        <input type="password" name="password2" id="password2" oninput="validate_match(); validate_form()" placeholder="Enter your password again" required class="bg-white border shadow-sm border-slate-300 
                        placeholder-slate-400 placeholder:font-normal text-slate-600 font-light focus:outline-none focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 
                        p-3 py-2 mt-4">
                    </label>
                    <span id="match" class="font-light text-sm"></span>
                
                </div>
                <br><br>
                <br><br>
                <div class="flex items-center place-content-center">
                    <button type="submit" disabled="true" name="submit" id="submit" onclick="validate_form()" class=" bg-slate-300 text-gray-400 rounded-md font-bold  px-24 py-2 m-7 shadow-md">Create</button>
                </div>
                <div>

                </div>
                    
                <script src="./JS/Jquery/jquery-3.7.1.min.js"></script>
                <script src="./JS/validate.js"></script>
                <script src='./JS/script.js'></script>
                <script></script>
                    
                
            </form>
        </div>
        
    </div>
</body>
</html>