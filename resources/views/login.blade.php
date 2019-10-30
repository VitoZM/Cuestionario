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
                        No tienes una cuenta?<a href="#">Regístrate</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#">Olvidaste tu contraseña?</a>
                    </div>
                </div>
                <div id="loader" style="display:none;">
                <center><img src="img/loader.gif" width="180px" height="120px" alt=""></center>
                </div>
            </div>
            
            
        </div>
        <img src="img/loader.gif" width="20px" height="20px" alt="">
    </div>
    <script src="js/login.js"></script>
</body>
</html>