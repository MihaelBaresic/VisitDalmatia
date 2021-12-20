function Confirm(){
    const password=document.querySelector('input[name=password]');
    const password_r=document.querySelector('input[name=password_r]');

    if(password_r.value === password.value ){
        password_r.setCustomValidity('');
    }
    else 
    {
        password_r.setCustomValidity('Passwords do not match!');
    }
    
    if(password.value.length<7){
        password.setCustomValidity('Password needs to be at least 7 characters long');
    }
    else{
        password.setCustomValidity('');
    }

}

function Lgth(){
    const username=document.querySelector('input[name=username]');
    
    if(username.value.length<5){
        username.setCustomValidity('Username needs to be at least 5 characters long');
    }
    else{
        username.setCustomValidity('');
    }

}

function SubmitFormData(img, el) {
    var id = img;
    var klasa = el.className;

    if(klasa.includes("far")){
        klasa = "far";
    }
    else{
        klasa = "fas";
    }

    $.post("submit.php", { id: id, klasa: klasa },
    function(data) {
	 $('#results').html(data);
	 $('#myForm')[0].reset();
    });
    
}



