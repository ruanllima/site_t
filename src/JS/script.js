
function validate_email2() {
    const email = $('#email').val();  // Pega o valor atualizado do email com jQuery
    const alert_email = $('#alert_email');
    /// const alert_email = $("#alert_email"); // Pega o elemento de alerta com jQuery
    
    // Exibir no console toda vez que o usuário digitar
    console.log(email);
    
    $.post("verify_email.php", {email: email})
        .done(function(data){
            console.log("1");
            if(data == "Email is already in use"){
                alert_email.css("display", "block");
                alert_email.removeClass("focus:ring-sky-500").addClass("focus:ring-red-500");
                console.log("2");
            }
        
            
            else{
                alert_email.css("display", "none");
                alert_email.removeClass("focus:ring-red-500").addClass("focus:ring-sky-500");
                console.log("3");
            }
            
        });

}




  