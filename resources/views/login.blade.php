<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Testing</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="icon" href="img/logo.png">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- The core Firebase JS SDK is always required and must be listed first -->

</head>
<body id="login">
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Inicia Sesión</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fa fa-facebook"></i></span>
                        <span><i class="fa fa-google-plus-square"></i></span>
                        <span><i class="fa fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-header">
                    <h6 id="error">. . . . . . . . . . . . . . . . . . . . </h6>
                </div>
                <div class="card-body">
                    <form id="loginForm" name="loginForm" action="fake" method="POST">
                        {!! csrf_field() !!}
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="correo" id="email" name="email" required="required" onkeyup="hideMessage(event);">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="contraseña" id="password" name="password" required="required" onkeyup="hideMessage(event);">
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Recordarme
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn float-right login_btn" value="Iniciar Sesión">
                        </div>

                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                    <button class="btn btn-light" onclick="googleSignIn();">
                        <img src="img/logos/google.png" width="20" height="20" alt="">
                        <b style="color: gray;"> | Ingresa con Google<b>
                    </button>
                    </div>
                </div>
                <div id="loader" style="display:none;">
                <center><img src="img/loader.gif" width="180px" height="120px" alt=""></center>
                </div>
            </div>


        </div>

        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

    </div>
    <script src="js/login.js"></script>
    <!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->

  <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-app.js"></script>

<!-- Add Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-firestore.js"></script>

    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyCyDPXOTmx2icjywsA3F_z8xfwQW2aww2U",
        authDomain: "cuestionario-sis325.firebaseapp.com",
        databaseURL: "https://cuestionario-sis325.firebaseio.com",
        projectId: "cuestionario-sis325",
        storageBucket: "cuestionario-sis325.appspot.com",
        messagingSenderId: "816682026856",
        appId: "1:816682026856:web:fc716c450efc30a03b38dd",
        measurementId: "G-QNV9XT16PX"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    console.log(firebase.name);
    </script>
</body>
</html>
