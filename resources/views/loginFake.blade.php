<!DOCTYPE html>
<html lang="en">
<head>
<title>MiECAMP | Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap4/bootstrap.min.css') }}">
<link href="{{ asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/contact_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/contact_responsive.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<body onload="getReady();">

<div class="super_container">

	<div id="header" style="display:none;">
	<header class="header d-flex flex-row">
            <div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="images/logo.png" alt="" height="75" width="150">
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list" id="mainList">

					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="images/persona.png" alt="">
			<span id="yourName">Tu Nombre</span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
        </div>
        </header>
        <!-- Menu -->
        <div class="menu_container menu_mm">
    
            <!-- Menu Close Button -->
            <div class="menu_close_container">
                <div class="menu_close"></div>
            </div>
    
            <!-- Menu Items -->
            <div class="menu_inner menu_mm">
                <div class="menu menu_mm">
                    <ul class="menu_list menu_mm" id="menuItem">
										
                    </ul>
                </div>
    
            </div>
    
        </div>
        <!-- Menu -->
	</div>

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url({{ asset('images/contact_background.jpg') }})"></div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact" id="content">
		<div class="container" id="container">
			<div class="row">
				<div class="mx-auto">
					
					<!-- Contact Form -->
					<div class="contact_form">
						<div class="contact_title">&nbsp;&nbsp;Login</div>
						<div class="contact_form_container">
							<p style="color:red;" id="error"><br></p>
							<form action="index.php/insertar" id="loginForm" method="POST">
								{!! csrf_field() !!}
								<input name="idUser" id="idUser" class="input_field" type="text" placeholder="ID de Usuario" required="required" data-error="Inserte ID" onkeyup="hideMessage(event);">
								<input name="password" id="password" class="input_field" type="password" placeholder="Contraseña" required="required" data-error="Inserte Contraseña" onkeyup="hideMessage(event);">
								<input class="contact_send_btn" type="submit" value="Enviar"> 
							</form>
						</div>
					</div>
						
				</div>

				

			</div>

		</div><br><br>
		<div id="loader" style="text-align: center; display:none;">
		<div class="loading"><img src="{{ asset('images/loader.gif') }}" alt="loading" height="142px" width="400px" /><br/>Un momento, por favor...<br>Si el proceso demora mucho, puede que haya sufrido una desconexión.</div>
		</div>
	</div><br><br>

	<footer class="footer" style="display:none;" id="footer">
			<form action="index.php/nowhere" id="jwtForm" method="POST" style="display:none;">
				{!! csrf_field() !!}
				<input name="jwt" id="jwt" type="password" required="required">
			</form>

			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="mx-auto">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<img src="{{ asset('images/logoBlanco.png') }}" alt="" width="400" height="100">
							</div>
						</div>

						<p>Todo docente esta obligado a actualizar su hoja de vida constantemente</p>

					</div>

				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center mx-auto">
				<div class="footer_copyright mx-auto">
					<span>
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | TECBA Sucre 
					</span>
				</div>
			</div>

	</footer>

</div>

<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('css/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('css/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('plugins/scrollTo/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('plugins/easing/easing.js') }}"></script>
<script src="{{ asset('js/contact_custom.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/cv.js') }}"></script>

</body>
</html>