

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
                        <input type="text" name="username" placeholder="Enter your full name" required minlength="2" class="bg-white border shadow-sm border-slate-300 
                        placeholder-slate-400 placeholder:font-normal text-slate-600 font-light focus:outline-none focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 
                        p-3 py-2 ">
                    </label>
                    
                    
                </div>
                <br>
                <div>
                    <label for="email" class="block"> 
                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 font-medium text-slate-700 text-sm">Email</span>
                        <input type="email" name="email" id="email" placeholder="you@example.com" oninput="validate_email()" required class="bg-white border shadow-sm border-slate-300 
                        placeholder-slate-400 placeholder:font-normal text-slate-600 font-light focus:outline-none focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 
                        p-3 py-2 ">
                    </label>
                    <span id="alert_email" style="display: none" class=" text-xs text-red-500 font-light italic">This email is already in use</span>
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
                    <button type="submit" name="submit" id="submit" onclick="validate_form()" class="bg-indigo-500 rounded-md font-bold text-gray-100 transition ease-in-out delay-75 hover:-translate-y-1 
                    hover:scale-110 hover:bg-indigo-600
                    px-24 py-2 m-7 shadow-md">Create</button>
                </div>
                <div>

                </div>
                    
                <script src="./JS/Jquery/jquery-3.7.1.min.js"></script>
                <script src="./JS/validate.js"></script>
                <script>

                    

                    
                    function validate_form(){
                        const submit = document.getElementById("submit");
                        const alert = document.getElementById("alert");
                        const email = document.getElementById("email");
                        validate_to_match = validate_match();
                        validate_to_password = validate_password();
                    
                        if (validate_to_password && validate_to_match){
                       
                            
                        }
                        else{
                            event.preventDefault();
                            alert.style.display = "block"; 
                            setTimeout(() => {
                            if (alert) alert.style.display = 'none';
                            }, 3000);
                            
                            
                        }
                        
                        
                    }

                    function validate_match(){
                        const password = document.getElementById("password");
                        const password2 = document.getElementById("password2");
                        const match = document.getElementById("match");
                        const submit = document.getElementById("submit");
                        let validate = false;
                        
                        
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
                                validate = false;
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
                                validate = true;
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
                            validate = false;
                        }
                        
                        return validate;
                        

                    }


                    function validate_password() {
                        const password = document.getElementById("password").value;

                        const length = document.getElementById("length");
                        const number = document.getElementById("number");
                        const letter = document.getElementById("letter");
                        const special = document.getElementById("special");
                        const list = document.getElementById("list");
                        let validate = false;
                        let i=0;
                        
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
                            validate = true;

                        }
                        else{
                            validate = false;
                        }
                        
                        return validate;
                    }
                </script>
                    
                
            </form>
        </div>
        
    </div>
</body>
</html>