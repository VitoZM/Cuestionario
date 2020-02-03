const $session = $('#session');
$(document).ready(function(){
    url = "../getSubjects";
    let data = $session.serialize();
    $.post(url, data, result => {
        var subjects = result.split(",");
        let selectSubjects = "<option selected value=''>Sigla</option>";
        subjects.forEach(function(s) {
            if(s != "")
                selectSubjects += "<option value='" + s + "'>" + s + "</option>";
        });
        $('#subjects').html(selectSubjects);
    });
});
