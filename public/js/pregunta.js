const $session = $('#session');

$(document).ready(function(){

    let data = $session.serialize();
    let url = "getSubjects";

    $.post(url, data, result => {
        var subjects = result.split(",");

        let selectSubjects = "<option selected value=''>Ninguno</option>";
        subjects.forEach(function(s) {
            if(s != "")
                selectSubjects += "<option value='" + s + "'>" + s + "</option>";
        });
        $('#subjects').html(selectSubjects);
    });
    
});