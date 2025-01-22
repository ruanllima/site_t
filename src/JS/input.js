function input_focus(){
    const inputs = document.querySelectorAll('input.box_password');
    console.log(inputs);

    for(let i = 0; i < inputs.length; i++){
        console.log('1');
        inputs[i].addEventListener('keydown', function(event){
            console.log('2');
            if(event.keyCode === 8){
                console.log('3');
                inputs[i].value = '';
                if(i!==0)
                    console.log('4');
                    inputs[i-1].focus();
                    event.preventDefault();
            }

            else{
                if(i == inputs.length -1 && inputs[i].value !== ''){
                    return true;
                }
                else if ((event.keyCode > 47 && event.keyCode < 58) || (event.keyCode > 64 && event.keyCode < 91)){
                    inputs[i].value = event.key;
                    if(i!== inputs.length-1)
                        inputs[i+1].focus();
                        event.preventDefault();
                    console.log(event.key)
                }

                
            }
        })
    }
}

input_focus();