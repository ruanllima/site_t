
function validate_email() {
    const email = $('#email') // Pega o valor atualizado do email com jQuery
    const alert_email = $('#alert_email');
    
    /// const alert_email = $("#alert_email"); // Pega o elemento de alerta com jQuery
    
    // Exibir no console toda vez que o usuário digitar
    console.log(email);
    
    $.post("verify_email.php", {email: email.val()})
        .done(function(data){
            console.log("1");
            if(data == "Email is already in use"){
                alert_email.css("display", "block");
                email.removeClass("focus:ring-sky-500").addClass("focus:ring-red-500");
                email.removeClass("border-slate-300").addClass("border-red-500");
                console.log("2");
            }
        
            
            else{
                alert_email.css("display", "none");
                email.removeClass("focus:ring-red-500").addClass("focus:ring-sky-500");
                email.removeClass("border-red-500").addClass("border-slate-300");
                console.log("3");
            }
            
        });

}

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




  