<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Testing</title>
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/agency.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/crear.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/diseñoEquipoV2.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/3dImagenes.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/font-awesome/css/font-awesome.min.css') }}">
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('styles/pie.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <script src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    
    
</head>
<body id="body">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: black;">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="#inicio" style="font-family: 'Kaushan Script', cursive; color:darkorange">Sistema Testing</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Inicio
                      <span class="sr-only">(current)</span>
                    </a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#team">Grupo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#contact">Contáctanos</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="name"></a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Perfil</a>
                  <a class="dropdown-item" href="#">Seguridad</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../">Cerrar Sesión</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
      <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <!-- CArrusel 1 -->
            <div class="carousel-item active" style="background-image: url('../img/estudiar.jpg')">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">Crea cuestionarios</h2>
                <p class="lead">Puedes realizar cuestionarios para diferente materia. . .</p>
              </div>
            </div>
            <!-- Carrusel 2-->
            <div class="carousel-item" style="background-image: url('../img/cabecera-test-prep2017-1.jpg')">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">Crea tu banco de preguntas</h2>
                <p class="lead">Crea, edita, lista tus Banco de Preguntas para usarlo en cualquier cuestionario</p>
              </div>
            </div>
            <!-- Carrusel 3-->
            <div class="carousel-item" style="background-image: url('../img/girl_studying-wallpaper-1440x900.jpg')">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">Visualiza tus cuestionarios</h2>
                <p class="lead">Puedes visualizar tus cuestionarios para verificar posibles errores</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
              </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
              </a>
        </div>
      </header>
      
       
 
      
<!-- Servicios -->
<section class="page-section" id="services">
        <h2 class="section-heading text-uppercase" style="color: black;">Servicios</h2>
        <h3 class="section-subheading text-muted">Comienza a disfrutar de la pagina y todos sus beneficios</h3>
<article>
    <div class="item-wrapper" onclick="window.location ='cuestionario';">
      <figure>
        <div class="image" style="background-image:url('../img/servicio1.png');"></div>
        <div class="lighting"></div>
      </figure>
      <div class="item-content">
        <h1>Crea un Cuestionario</h1>
      </div>
    </div>
  </article>
  <article>
    <div class="item-wrapper" onclick="window.location ='banco';">
      <figure>
        <div class="image" style="background-image:url('../img/servicio2.png');"></div>
        <div class="lighting"></div>
      </figure>
      <div class="item-content">
        <h1>Banco de Preguntas</h1>
      </div>
    </div>
  </article>
  
  <script src="{{ asset('js/3dimagenes.js') }}"></script>

</section>






<!-- GRUPO -->

<section id="team" class="pb-5">
<div class="container">
        <h2 class="section-heading text-uppercase" style="color: black;">EQUIPO</h2><br>
    <div class="row"> 
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
            <div class="mainflip">
                <div class="frontside">
                    <div class="card">
                        <div class="card-body text-center">
                            <p><img class=" img-fluid" src="../img/alberth.jpg" alt="card image"></p>
                            <h4 class="card-title">Alberth Paredes</h4>
                            <p class="card-text">Desarrollador Web</p>
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="backside">
                    <div class="card">
                        <div class="card-body text-center mt-4">
                            <h4 class="card-title">Paredes Mamani Alberto Orlando</h4>
                            <p class="card-text">Encargado del frontend del Sistema Testing</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                        <i class="fa fa-skype"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                        <i class="fa fa-google"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./Team member -->
    <!-- Team member -->
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
            <div class="mainflip">
                <div class="frontside">
                    <div class="card">
                        <div class="card-body text-center">
                            <p><img class=" img-fluid" src="../img/alvaro.jpeg" alt="card image"></p>
                            <h4 class="card-title">Alvaro Zapata</h4>
                            <p class="card-text">Desarrollador Web</p>
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="backside">
                    <div class="card">
                        <div class="card-body text-center mt-4">
                            <h4 class="card-title">Zapata Moscoso Alvaro Luis</h4>
                            <p class="card-text">Encargado del backend del Sistema Testing</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                        <i class="fa fa-skype"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                        <i class="fa fa-google"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./Team member -->
    <!-- Team member -->
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
            <div class="mainflip">
                <div class="frontside">
                    <div class="card">
                        <div class="card-body text-center">
                            <p><img class=" img-fluid" src="../img/jhojar.jfif" alt="card image"></p>
                            <h4 class="card-title">Johan Catari</h4>
                            <p class="card-text">Desarrollador Web</p>
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="backside">
                    <div class="card">
                        <div class="card-body text-center mt-4">
                            <h4 class="card-title">Johan Catari Callé</h4>
                            <p class="card-text">Encargado del Testing y documentacion del Software</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                        <i class="fa fa-skype"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                        <i class="fa fa-google"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>











<!-- Contact -->
<section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contáctanos</h2>
          <h3 class="section-subheading text-muted">Informamos de algun problema o peticion</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Nombre" required="required" data-validation-required-message="Por favor ingresa tu nombre">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Email" required="required" data-validation-required-message="Por favor ingresa tu email">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Telefono" required="required" data-validation-required-message="Por favor ingresa tu telofono">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Mensaje" required="required" data-validation-required-message="Por favor ingresa un mensaje"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit" style="color: black;">Enviar Mensaje</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <div>
    <form id="session">
      {!! csrf_field() !!}
    </form>
  </div>


  <section id="footer">
        <div class="container">
            <h3>Copyright © Sistema Testing 2019</h3>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
              <ul class="list-unstyled list-inline social text-center">
                <li class="list-inline-item"><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="https://aboutme.google.com"><i class="fa fa-google-plus"></i></a></li>
                <li class="list-inline-item"><a href="https://www.gmail.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
              </ul>
            </div>
            </hr>
          </div>	
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
              <p><u><a href="carrusel.html">Lo mejor de Domotica en Besafe</a></u> registrado en APCORP propietario absoluto </p>
              <p class="h6">Todos los derechos reservados -<a class="text-green ml-2" target="_blank">Besafe</a></p>
            </div>
            </hr>
          </div>	
        </div>
      </section>

      <script src="../js/crear.js"></script>

</body>
</html>