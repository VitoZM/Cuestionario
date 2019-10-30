const $loginForm = $('#loginForm');
const defaultError = ". . . . . . . . . . . . . . . . . . . . ";
const error = $('#error');
const loader = $('#loader');


$(document).ready(function(){
    let url = "index.php/close";
    let data = $loginForm.serialize();

    $.post(url, data);
});

$loginForm.submit(e => {
    e.preventDefault();
    
    let url = "index.php/authentication";
	let data = $loginForm.serialize();
    loader.fadeIn();

    $.post(url, data, result => {
        loader.fadeOut(1000);
        console.log(result);
        if(result.trim() == "accepted")
            window.location.href = "index.php/crear";
        else{
            error.fadeIn();
            error.html("EMAIL O CONTRASEÑA INCORRECTOS")
            error.css('color','red');
        }
    });

});

function hideMessage(event){
    let key = event.keyCode || event.which;
    if (key !== 13){
        error.html(defaultError);
        error.css('color','black');        
    }
}