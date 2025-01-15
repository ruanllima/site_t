<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="./output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full flex items-center place-content-center">
    <div class="bg-gray-100 rounded-2xl w-4/12 shadow-lg relative top-20">

        <h2 class="text-gray-800 font-bold text-center text-3xl m-20">Create Your Account</h2>
        
        

        <div class="">
            <form class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm" action="create_back.php" method="POST">

                <div class="">
                    <label for="text" class="block"> 
                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 font-medium text-slate-700 text-sm">Name</span>
                        <input type="text" name="username" placeholder="Enter your full name" required minlength="2" class="bg-white border shadow-sm border-slate-300 
                        placeholder-slate-400 placeholder:font-normal text-slate-600 font-light focus:outline-none focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 
                        p-3 py-2 ">
                    </label>
                    
                    
                </div>
                <br>
                <div>
                    <label for="email" class="block"> 
                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 font-medium text-slate-700 text-sm">Email</span>
                        <input type="email" name="email" placeholder="you@example.com" required class="bg-white border shadow-sm border-slate-300 
                        placeholder-slate-400 placeholder:font-normal text-slate-600 font-light focus:outline-none focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 
                        p-3 py-2 ">
                    </label>
                </div>
                <br>
                <br>
                <div>
                    <label for="password" class="block"> 
                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 font-medium text-slate-700 text-sm">Password</span>
                        <input type="password" name="password" id="password" oninput="validate_password(); validate_match()" placeholder="Enter your password" required class="bg-white border shadow-sm border-slate-300 
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
                        <input type="password" name="password2" id="password2" oninput="validate_match()" placeholder="Enter your password again" required class="bg-white border shadow-sm border-slate-300 
                        placeholder-slate-400 placeholder:font-normal text-slate-600 font-light focus:outline-none focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 
                        p-3 py-2 mt-4">
                    </label>
                    <span id="match" class="font-light italic text-sm"></span>
                
                </div>
                <br><br>
                <br><br>
                <div class="flex items-center place-content-center">
                    <button type="submit" name="submit" id="submit" class="bg-indigo-500 rounded-md font-bold text-gray-100 transition ease-in-out delay-75 hover:-translate-y-1 
                    hover:scale-110 hover:bg-indigo-600
                    px-24 py-2 m-7 shadow-md">Create</button>
                </div>
                <div>

                </div>
                    
                <script>
                    


                    function validate_match(){
                        const password = document.getElementById("password");
                        const password2 = document.getElementById("password2");
                        const match = document.getElementById("match");
                        const submit = document.getElementById("submit");
                        
                        
                        if(password.value != "" && password2.value != ""){
                            // If password do not match
                            if (password.value != password2.value){
                                match.textContent = "Passwords do not match";
                                password2.classList.remove("focus:ring-sky-500");
                                password2.classList.remove("focus:ring-green-500");
                                password2.classList.remove("border-slate-500");
                                password2.classList.remove("border-green-500")
                                match.classList.remove("text-green-500");
                                match.classList.add("text-red-500");
                                password2.classList.add("border-red-500");
                                password2.classList.add("focus:ring-red-500");
                                submit.disabled = true;
                            }
                            // If passwords match
                            if (password.value == password2.value){
                                match.textContent = "Passwords match";
                                match.classList.remove("text-red-500");
                                password2.classList.remove("border-red-500");
                                password2.classList.remove("focus:ring-red-500");
                                match.classList.add("text-green-500");
                                password2.classList.add("border-green-500");
                                password2.classList.add("focus:ring-green-500");
                                submit.disabled = false;
                            }
                        }
                        if(password2.value == ""){
                            match.textContent = "";
                            password2.classList.remove("border-green-500");
                            password2.classList.remove("border-red-500");
                            password2.classList.remove("focus:ring-green-500");
                            password2.classList.remove("focus:ring-red-500");
                            password2.classList.add("border-slate-500");
                            password2.classList.add("focus:ring-sky-500");
                            submit.disabled = true;
                        }
                        

                    }


                    function validate_password() {
                        const password = document.getElementById("password").value;

                        const length = document.getElementById("length");
                        const number = document.getElementById("number");
                        const letter = document.getElementById("letter");
                        const special = document.getElementById("special");
                        const list = document.getElementById("list");
                        let i = 0;
                        
                        // first condition
                        if(password.length >= 8){
                            length.classList.remove("text-red-500");
                            length.classList.add("text-green-500");
                            length.classList.remove("marker:text-red-500");
                            length.classList.add("marker:text-green-500");
                            i++;
                        }
                        else{
                            length.classList.remove("text-green-500");
                            length.classList.add("text-red-500");
                            length.classList.remove("marker:text-green-500");
                            length.classList.add("marker:text-red-500");
                            i--;
                        }

                        // second condition  
                        if(/\d/.test(password)){
                            number.classList.remove("text-red-500");
                            number.classList.add("text-green-500");
                            number.classList.remove("marker:text-red-500");
                            number.classList.add("marker:text-green-500");
                            i++;
                        }
                        else{
                            number.classList.remove("text-green-500");
                            number.classList.add("text-red-500");
                            number.classList.remove("marker:text-green-500");
                            number.classList.add("marker:text-red-500");
                            i--;
                        }

                        // third condition
                        if(/[a-zA-Z]/.test(password)){
                            letter.classList.remove("text-red-500");
                            letter.classList.add("text-green-500");
                            letter.classList.remove("marker:text-red-500");
                            letter.classList.add("marker:text-green-500");
                            i++;
                        }
                        else{
                            letter.classList.remove("text-green-500");
                            letter.classList.add("text-red-500");
                            letter.classList.remove("marker:text-green-500");
                            letter.classList.add("marker:text-red-500");
                        }


                        // fourth condition
                        if(/[!@#$%^&*¨(),.?":{}=|<>;:_+-]/.test(password)){
                            special.classList.remove("text-red-500");
                            special.classList.add("text-green-500");
                            special.classList.remove("marker:text-red-500");
                            special.classList.add("marker:text-green-500");
                            i++;
                        }
                        else{
                            special.classList.remove("text-green-500");
                            special.classList.add("text-red-500");
                            special.classList.remove("marker:text-green-500");
                            special.classList.add("marker:text-red-500");
                            i--;
                        }

                        if(i==4){
                            submit.disabled = false;
                        }
                        else{
                            submit.disabled = true;
                        }

                    }
                </script>
                    
                
            </form>
        </div>
        
    </div>
</body>
</html>