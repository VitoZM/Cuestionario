const $session = $('#session');
const $body = $('#body');
const $cuestionarioForm = $('#cuestionarioForm');

$(document).ready(function(){
    let url = "index.php/authenticate";
    let data = $session.serialize();

    $.post(url, data, result => {
        if(result.trim() != "denied"){
            $body.fadeIn();
        }
        else{
            $body.html("ACCESO DENEGADO");
            window.location.href = "../login";
        }
    });

    url = "../getSubjects";
    $.post(url, data, result => {
        var subjects = result.split(",");

        let selectSubjects = "<option selected value='-'>Ninguno</option>";
        subjects.forEach(function(s) {
            if(s != "")
                selectSubjects += "<option value='" + s + "'>" + s + "</option>";
        });
        $('#subjects').html(selectSubjects);
    });
    
});

function saveTest(e){
    e.preventDefault();

    let url = "../saveTest";
    let data = $cuestionarioForm.serialize();

    $.post(url, data, result => {
        console.log(result);
        if(result.trim() == "400 OK")
            window.location.href = "../pregunta";
    });
}
