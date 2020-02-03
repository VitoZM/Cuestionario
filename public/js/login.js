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

function googleSignIn(){
    var provider = new firebase.auth.GoogleAuthProvider();
    firebase.auth().signInWithPopup(provider).then(function(result) {
        // This gives you a Google Access Token. You can use it to access the Google API.
        var token = result.credential.accessToken;
        // The signed-in user info.
        var user = result.user;
        // ...
        let url = "index.php/verify";
        let data = {
            "_token": $('#token').val(),
            "name": user.displayName,
            "email": user.email,
            "photo": user.photoURL
        };
        $.post(url, data, result => {
            window.location.href = "index.php/crear";
        });
    }).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // The email of the user's account used.
        var email = error.email;
        // The firebase.auth.AuthCredential type that was used.
        var credential = error.credential;
        // ...
    });

}
