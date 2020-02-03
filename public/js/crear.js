const $session = $('#session');
const $name = $('#name');
const $body = $('#body');

$(document).ready(function(){
    let url = "index.php/authenticate";
    let data = $session.serialize();

    $.post(url, data, result => {
        if(result.trim() != "denied"){
            result = JSON.parse(result);
            $name.html(result.name);
            $body.fadeIn();
        }
        else{
            $body.html("ACCESO DENEGADO");
            window.location.href = "../login";
        }
    });
});
