<?php
	namespace App\Server;
	use App\Server\Authentication;
    use App\User;
    
    class RequestServer{

        //1 Hoja de Vida
        public $cvMatrix = [   [1,1,1,1,1,1],
        [1,1,0,1,0,0],
        [0,0,0,0,0,0],
        [1,1,1,1,0,0] ];

        //2 Evaluacion docente
        public $evalMatrix = [ [1,1,1,1,1,1],
								[1,1,2,1,0,0],
								[0,0,0,0,0,0],
								[1,0,0,0,0,0] ];

        //3 Busquedas
        public $searchMatrix = [   [1,1,1,1,1,1],
									[1,1,0,0,0,0],
									[1,0,0,0,0,0],
									[0,0,0,0,0,0] ];

        //4 Reporte Perfil Docente
        public $profileMatrix =     [  [1,1,1,1,1,1],
										[1,0,0,0,0,0],
										[1,0,0,0,0,0],
										[1,0,0,0,0,0] ];

        //5 Reporte general o consulta
        public $reportMatrix = [   [1,1,1,1,1,1],
									[1,0,0,0,0,0],
									[0,0,0,0,0,0],
									[0,0,0,0,0,0] ];

        //6 Reporte de Evaluacion docente consulta
        public $evalReportMatrix = [   [1,1,1,1,1,1],
										[1,0,0,1,0,0],
										[0,0,0,0,0,0],
										[0,0,0,0,0,0] ];

        //7 Reporte de evaluacion docente personal
        public $personalReportMatrix = [   [1,1,1,1,1,1],
											[1,0,0,1,0,0],
											[0,0,0,0,0,0],
											[1,0,0,1,0,0] ];
                    
        //Donde [super,admA,admB,Docente] --> Ojo

        public static function menuGenerator($role){
			$completeMenu = ['<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Seguimiento LICYT</a>        
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Definir</a>
								<a class="dropdown-item" href="#">Definir</a>
								<a class="dropdown-item" href="#">Definir</a>
							</div>
						</li>',
						'<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Carpeta Docente</a>        
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Definir</a>
								<a class="dropdown-item" href="#">Definir</a>
								<a class="dropdown-item" href="#">Definir</a>
							</div>
						</li>',
						'<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Control Aula</a>        
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Definir</a>
								<a class="dropdown-item" href="#">Definir</a>
								<a class="dropdown-item" href="#">Definir</a>
							</div>
						</li>',
						'<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">B.D. Docente</a>        
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Listar Docentes</a>
								<a class="dropdown-item" href="#">Eval. Docente</a>
								<a class="dropdown-item" href="#">Consultas</a>
							</div>
						</li>',
						'<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">USUARIOS</a>        
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#" onclick="requestCreateUserForm(event);">CREAR USUARIO</a>
								<a class="dropdown-item" href="#">Definir</a>
								<a class="dropdown-item" href="#">Definir</a>
							</div>
						</li>',
						'<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Planificación ACAD</a>        
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Definir</a>
								<a class="dropdown-item" href="#">Definir</a>
								<a class="dropdown-item" href="#">Definir</a>
							</div>
						</li>',
						'<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Seguimiento Skills</a>        
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Definir</a>
								<a class="dropdown-item" href="#">Definir</a>
								<a class="dropdown-item" href="#">Definir</a>
							</div>
                          </li>',
                        '<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Perfil</a>        
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#" onclick="requestView(&#39;cv&#39;,event);">C. V.</a>
								<a class="dropdown-item" href="#" onclick="requestView(&#39;profile&#39;,event);">Cambiar Contraseña</a>
								<a class="dropdown-item" href="index.php" onclick="refresh();">Cerrar Sesion</a>
							</div>
					 	 </li>'];
                          

                          
        $completeMenuItem = ['<li class="menu_item menu_mm">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Seguimiento LICYT</a>        
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Definir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
								<a class="dropdown-item" href="#">Definir</a>
								<a class="dropdown-item" href="#">Definir</a>
							</div>
						</li>',
						'<li class="menu_item menu_mm">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Carpeta Docente</a>        
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Definir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
								<a class="dropdown-item" href="#">Definir</a>
								<a class="dropdown-item" href="#">Definir</a>
							</div>
						</li>',
						'<li class="menu_item menu_mm">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Control Aula</a>        
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Definir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
								<a class="dropdown-item" href="#">Definir</a>
								<a class="dropdown-item" href="#">Definir</a>
							</div>
						</li>',
						'<li class="menu_item menu_mm">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">B.D. Docente</a>        
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#" onclick="requestView(&#39;cv&#39;,event);">C. V.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
								<a class="dropdown-item" href="#">Evaluación Docente</a>
								<a class="dropdown-item" href="#">Consultas</a>
							</div>
						</li>',
						'<li class="menu_item menu_mm">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">USUARIO</a>        
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#" onclick="requestCreateUserForm(event);">CREAR USUARIO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
								<a class="dropdown-item" href="#">Definir</a>
								<a class="dropdown-item" href="#">Definir</a>
							</div>
						</li>',
						'<li class="menu_item menu_mm">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Planificación ACAD</a>        
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Definir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
								<a class="dropdown-item" href="#">Definir</a>
								<a class="dropdown-item" href="#">Definir</a>
							</div>
						</li>',
						'<li class="menu_item menu_mm">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Seguimiento Skills</a>        
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Definir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
								<a class="dropdown-item" href="#">Definir</a>
								<a class="dropdown-item" href="#">Definir</a>
							</div>
                          </li>',
						'<li class="menu_item menu_mm">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Perfil</a>        
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#" onclick="requestView(&#39;cv&#39;,event);">C.V.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
								<a class="dropdown-item" href="#" onclick="requestView(&#39;profile&#39;,event);">Cambiar Contraseña</a>
								<a class="dropdown-item" href="#">Cerrar Sesion</a>
							</div>
					  	</li>'];
		$content = '<div class="about" style="text-align:center;"><br><br>
		<div class="about_title">Bienvenido al Sistema Docente</div>
		<h2 class="about_text">En esta página web, usted esta encargado de actualizar sus datos correspondientes.
        </h2>
        <br>
        <h2 class="abou-text">
            Puede acceder a las distintas funcionalides atravez del menu en la parte superior, si esta en computadora, o al pulsar el icono: 
            <br><i class="fas fa-bars"></i><br>
            que puede ver en la parte superior derecha.
        </h2>
		';
			//donde 0=licyt, 1=carpeta docente, 2=control aula, 3=BD Docente, 4=BD Egresos, 5=Planificacion ACAD, 6=Seguimiento Skills, 7=cerrarSesion
            switch($role){
				case "super":
					$menu = $completeMenu;
					$menuItem = $completeMenuItem;
                    break;
				case "admA":
					$menu = [$completeMenu[3],$completeMenu[7]];
					$menuItem = [$completeMenuItem[3],$completeMenuItem[7]];
                    break;
				case "admB":
					$menu = [$menuComplete[3]];
					$menuItem = [$completeMenuItem[3]];
                    break;
				case "doc":
					$menu = [$menuComplete[3]];
					$menuItem = [$completeMenuItem[3]];
                    break;
			}

			return array('menu' => $menu,'menuItem' => $menuItem,'content' => $content);
        }

        public static function getMenu($jwt){
			$header = RequestServer::menuGenerator($jwt->role);
			return array('menu' => $header['menu'],'menuItem' => $header['menuItem'],'content' => $header['content']);
		}
		
		public static function getCreateUserForm($jwt){
			//$role = $jwt->role; averiguar porque no funciona este codigo e mrd
			$createUserForm = '<center><h1>USUARIO NUEVO</h1>
			<form action="POST" id="newUserForm">
				<input name="_token" id="_token" value="" type="hidden">
				C.I.: <input type="text" name="newCI" id="newCI"><br>
				CORREO: <input type="text" name="newEmail" id="newEmail"><br>
				ROL: <select name="newRole" id="newRole">
						<option value="super">SUPER</option>
						<option value="admA">DOCENTE</option>
						</select><br>
				NOMBRE: <input type="text" id="newName" name="newName"><br>
				<br><button onclick="saveUser(event);" id="newBtn">CREAR</button>
				<input type="text" name="newJwt" id="newJwt" style="display:none;">
			</form><br>
			<h1 id="newResultMessage" style="display:none;"></h1>
			</center>';

			return $createUserForm;
		}

		public static function getFormCV($jwt){
			$extension = ['CH','TJ','CB','LP','OR','PT','SC','BN','PA'];
			$extensions = "";
			for($i=0; $i<9; $i++) $extensions = $extensions."<option value='".$extension[$i]."'>".$extension[$i]."</option>";
			$anios = "";
			for($i=1940; $i<=(int)date("Y") - 18; $i++) $anios = $anios."<option value='$i'>$i</option>";
			$view = '<form action="" method="POST" id="cvForm">
			<input name="_token" id="_token" value="" type="hidden">
			<h1>DATOS PERSONALES</h1>
			Anote sus datos personales tal como están registrados en su carnet de identidad o NIT; si cambió de dirección señale la actual.<br>
			Carnet de Identidad o RUN:<br><input type="text" id="ci" name="ci" readonly>
			<select name="extension" id="extension">'.$extensions.'</select>
			(Adjuntar fotocopia)<br>
			Nombre: <input id="name" name="name" class="input_field" type="text" required="required" style="width:100%;" >
			Apellido Paterno: <input name="lastFatherName" id="lastFatherName" class="input_field" type="text" required="required" >
			Apellido Materno: <input name="lastMotherName" id="lastMotherName" class="input_field" type="text" required="required" >
			Ciudad de Residencia: <input name="city" id="city" class="input_field" type="text" required="required" >
			E-mail: <input class="input_field" type="text" required="required" name="email" id="email" readonly>
			Zona/calle/No.: <input name="address" id="address" class="input_field" type="text" required="required" >
			Telf. Dom.: <input name="homePhone" id="homePhone" class="input_field" type="text" >
			Telf. Trabajo: <input name="workPhone" id="workPhone" class="input_field" type="text" >
			Celular: <input name="cellPhone" id="cellPhone" class="input_field" type="text" required="required" >
			Fecha Nacimiento:<br>Año:
			<select class="input_field" name="birthYear" id="birthYear" onchange="changeMonth();"><option>-</option>'.$anios.'</select>
			Mes:
			<select class="input_field" name="birthMonth" id="birthMonth" onchange="changeDay();"><option>-</option></select>
			Dia:
			<select class="input_field" name="birthDay" id="birthDay" onchange="changeAge();"><option>-</option></select>
			
			Edad: <input name="age" id="age" class="input_field" type="text" required="required" readonly>
			Genero:<br>Masculino <input type="radio" name="sex" value="M"> Femenino <input type="radio" name="sex" value="F">
			<h1><br>FORMACION ACADEMICA</h1>
			Sobre la base de la documentación de respaldo que usted deberá adjuntar al presente formulario, indique la mención obtenida y la institución donde egresó o se tituló. El año de inicio y conclusión de sus estudios. Para cada uno de sus estudios, indique si los mismos están o no concluídos marcando una "X" en la casilla correspondiente.<br>
			Grado Académico
			<div class="elements_accordions">
				<div class="accordion_container" id="academic">
					<div class="accordion d-flex flex-row align-items-center" onclick="addAcademic();">Añadir Grado Académico</div>
				</div>
				No. De Matrícula de Inscripción en el Colegio Profesional<br>
					(Llene este dato si corresponde)<input name="enrollment" id="enrollment" class="input_field" type="text" required="required" >
			</div>
			<h1>EXPERIENCIA LABORAL</h1>
			Sobre la base de la documentación de respaldo que usted deberá adjuntar al presente formulario, describa la experiencia laboral que sea relevante y pertinente al puesto al que postule, mencione los diferentes puestos ocupados (si en una misma entidad usted ocupó 3 puestos diferentes, utilice tres recuadros distintos). Comience por el puesto actual o el más reciente. Indique el sector al que pertenece la entidad en la que trabajo; elija una de las opciones mencionadas en la casilla jerarquía. Describa las funciones principales ejecutadas en el ejercicio de cada puesto citado.<br>
			<hr>
			<h1>1</h1>
			Puesto: <input name="job1" id="job1" class="input_field" type="text" required="required" >
			Entidad: <input name="entity1" id="entity1" class="input_field" type="text" required="required" >
			De Mes:<input type="text" name="jobStartMonth1" id="jobStartMonth1">Año:<input type="text" name="jobStartYear1" id="jobStartYear1"><br>Al Mes: &nbsp;<input type="text" name="jobFinishMonth1" id="jobFinishMonth1" >Año:<input type="text" name="jobFinishYear1" id="jobFinishYear1"><br><br>
			Principales Funciones Desempeñadas:<br><textarea name="jobDescription1" id="jobDescription1" cols="60" rows="5"></textarea>
			<hr>
			<hr>
			<h1>2</h1>
			Puesto: <input name="job2" id="job2" class="input_field" type="text" required="required" >
			Entidad: <input name="entity2" id="entity2" class="input_field" type="text" required="required" >
			De Mes:<input type="text" name="jobStartMonth2" id="jobStartMonth2">Año:<input type="text" name="jobStartYear2" id="jobStartYear2"><br>Al Mes: &nbsp;<input type="text" name="jobFinishMonth2" id="jobFinishMonth2" >Año:<input type="text" name="jobFinishYear2" id="jobFinishYear2"><br><br>
			Principales Funciones Desempeñadas:<br><textarea name="jobDescription2" id="jobDescription2" cols="60" rows="5"></textarea>
			<hr>
			<hr>
			<h1>3</h1>
			Puesto: <input name="job3" id="job3" class="input_field" type="text" required="required" >
			Entidad: <input name="entity3" id="entity3" class="input_field" type="text" required="required" >
			De Mes:<input type="text" name="jobStartMonth3" id="jobStartMonth3">Año:<input type="text" name="jobStartYear3" id="jobStartYear3"><br>Al Mes: &nbsp;<input type="text" name="jobFinishMonth3" id="jobFinishMonth3" >Año:<input type="text" name="jobFinishYear3" id="jobFinishYear3"><br><br>
			Principales Funciones Desempeñadas:<br><textarea name="jobDescription3" id="jobDescription3" cols="60" rows="5"></textarea>
			<hr>
			
			<h1>CONOCIMIENTO EN IDIOMAS</h1>
			Indique la Institución educativa de aprendizaje acorde al idioma, en caso de aprendizaje autodidacta adquirido dejar en blanco. Los niveles se deben distinguir en tres niveles: Básico, Intermedio y Avanzado<br>
			
			<div class="accordion_container" id="language">
							<div class="accordion d-flex flex-row align-items-center" onclick="addLanguage();">Añadir Idioma</div>
			</div>

			<h1>OTROS CURSOS RELACIONADOS CON EL AREA ACADÉMICA</h1>
			Indique sólo aquellos cursos que estén relacionados (últimos 5 años)						
			
			<div class="accordion_container" id="course">
							<div class="accordion d-flex flex-row align-items-center" onclick="addCourse();">Añadir Curso</div>
			</div>

			<h1>SKILLS</h1>
			Indique sus habilidades
			
			<div class="accordion_container" id="skill">
							<div class="accordion d-flex flex-row align-items-center" onclick="addSkill();">Añadir Skill</div>
			</div>
			<br>
			<input name="jwtPost" id="jwtPost" type="text" style="display:none;">
			<input class="contact_send_btn" type="submit" value="GUARDAR" onclick="save(event);">
			</div>
			<center><h1 style="display:none" id="resultMessage"></h1></center>
		</form><br>';
		return $view;
		}

		public static function getProfileView($jwt){
			$view = '<form>

					</form>';
		}
    };
?>