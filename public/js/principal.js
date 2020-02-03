$(document).ready(function(){
    let url = "index.php/authenticate";
    let data = {
        "_token": $('#token').val(),
    };
    $.post(url, data, result => {
        if(result.trim() != "denied"){
            result = JSON.parse(result);
            $('#name').html(result.name);
            $('#name2').html(result.name);
            $('#photo').attr("src",result.photo);
            //showView('cuestionariof')
        }
        else{
            $('#body').html("ACCESO DENEGADO");
            window.location.href = "../login";
        }
    });
});

function showView(url){
    $.get(url, result => {
        $('#slider').fadeOut(500);
        $('#footer').fadeOut(500);
        $('#views').html(result);
    })
}
