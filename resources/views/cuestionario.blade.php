<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuestionario</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../styles/crear.css">
    <link rel="stylesheet" href="../styles/llenar.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="../stylesheet" href="node_modules/bootstrap/dist/css/bootstrap-datepicker.css">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap-datepicker.js"></script>


    



</head>
<body class="fondo">

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: black;">
                <div class="container">
                  <a class="navbar-brand js-scroll-trigger" href="crear.html" style="font-family: 'Kaushan Script', cursive; color:darkorange">Sistema Testing</a>
                </div>
              </nav>


<div class="container">
    <div id="accordion">
        <form id="cuestionarioForm">
        {!! csrf_field() !!}
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                <br><br><br>
                    <h3 style="font-family: 'Kaushan Script', cursive; color: black;">CREACIÓN DE CUESTIONARIO TIPO TEST</h3>
                </div>
            </div>
        </div>

        <div class="card card-default">
            <div class="card-header">
                <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        <i class="glyphicon glyphicon-search"></i>
                        <b class="subtitulo">General</b>
                        
                    </a>
                </h4>
            </div>

            <div id="collapse1" class="collapse show">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 col-lg-4">
                            <div class="form-group">
                                <label class="control-label">Nombre</label>
                                <i class="icon fa fa-question-circle text-info fa-fw " title="Introducir un nombre al cuestionario" ></i>
                                <input type="text" class="form-control" placeholder="Introduce el nombre del cuestionario" name="name" id="name"/>
                                                                
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-4">
                            <div class="form-group">
                            <label class="control-label">Instrucciones</label>
                            <i class="icon fa fa-question-circle text-info fa-fw " title="Introducir una descripcion del cuestionario" ></i><br>
                            <textarea cols="form-control" rows="5"  placeholder=" Instrucciones" style="width: 100%;" name="description" id="description"></textarea>
                            
                            
                            </div>
                        </div>

                        <div class="col-md-8 col-lg-4">
                                <div class="form-grupo">
                                        <label class="control-label">Materia</label>
                                        <i class="icon fa fa-question-circle text-info fa-fw " title="Elija la materia a la cual sera asignada este cuestionario" ></i>
                                        
                                    <select class="form-control" id="subjects" name="subjects">
                                        
                                    </select>
                                </div>
                            </div>

                        


                    </div>
                </div>
            </div>
        </div>



        <div class="card card-default">
          <div class="card-header">
              <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                      <i class="glyphicon glyphicon-search text-gold"></i>
                      <b class="subtitulo">Tiempo</b>
                  </a>
              </h4>
          </div>

          <div id="collapse2" class="collapse close-modal">
              <div class="card-body">
                  <div class="row">
                    <div class="col-md-8 col-lg-4">
                      <div class="form-group">
                          <label class="control-label">Abrir Cuestionario</label>
                          <i class="icon fa fa-question-circle text-info fa-fw " title="Dar una fecha de Inicio para habilitar el cuestionario" ></i>
                          <div class="input-group date">
                              <input class="form-control" type="text" name="initialDate" id="initialDate" />
                             <span class="input-group-append">
                                  <button class="btn btn-outline-secondary" type="button">
                                      <i class="fa fa-calendar"></i>
                                  </button></span>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-8 col-lg-4">
                      <div class="form-group">
                          <label class="control-label">Cerrar Cuestionario</label>
                          <i class="icon fa fa-question-circle text-info fa-fw " title="Dar una fecha de Cierre para deshabilitar el cuestionario" ></i>
                          <div class="input-group date">
                              <input class="form-control" type="text" name="finalDate" id="finalDate"/>
                             <span class="input-group-append">
                                  <button class="btn btn-outline-secondary" type="button">
                                      <i class="fa fa-calendar"></i>
                                  </button></span>
                          </div>
                      </div>
                    </div>

                    <div class="col-md-8 col-lg-4">
                            <div class="form-grupo">
                                    <label class="control-label">Tiempo de duración</label>
                                    <i class="icon fa fa-question-circle text-info fa-fw " title="Introduce un tiempo limite de duracion del examen" ></i>
                                    
                                <select class="form-control" name="duration" id="duration">
                                    <option selected="">10 minutos</option>
                                    <option>15 minutos</option>
                                    <option>20 minutos</option>
                                    <option>30 minutos</option>
                                    <option>45 minutos</option>
                                    <option>60 minutos</option>
                                    <option>1 hora y 15 minutos</option>
                                    <option>1 hora y 30 minutos</option>
                                    <option>1 hora y 45 minutos</option>
                                    <option>2 horas</option>
                                    <option>2 horas y 30 minutos</option>
                                    <option>3 horas</option>
                                    <option>3 horas y 30 minutos</option>
                                    <option>4 horas</option>
                                    <option>4 horas y 30 minutos</option>
                                    <option>5 horas</option>

                                </select>
                            </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>


        <div class="card card-default">
                <div class="card-header">
                    <h4 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                            <i class="glyphicon glyphicon-search text-gold"></i>
                            <b class="subtitulo">Calificación</b>
                        </a>
                    </h4>
                </div>
    
                <div id="collapse3" class="collapse close-modal">
                    <div class="card-body">
                        <div class="row">
                                <div class="col-md-8 col-lg-4">
                                        <div class="form-grupo">
                                                <label class="control-label">Intentos permitidos</label>
                                                <i class="icon fa fa-question-circle text-info fa-fw " title="Introduce la cantidad de intentos a dar en el tiempo de examen" ></i>
                                                
                                            <select class="form-control">
                                                <option selected="" name="repetitions" name="repetitions">Sin límite</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                
            
                                            </select>
                                        </div>
                                </div>


                                <div class="col-md-8 col-lg-4">
                                    <div class="form-group">
                                            <label class="control-label">Calificación para aprobar</label>
                                            <i class="icon fa fa-question-circle text-info fa-fw " title="Cantidad de puntaje que los usuarios deben igualar o superar para aprobar" ></i>
                                            <input type="text" class="form-control" placeholder="Nota de aprobación"/>
                                                                            
                                    </div>
                                </div>
    
                            
                                <div class="col-md-8 col-lg-4">
                                        <div class="form-grupo">
                                                <label class="control-label">Método de calificación</label>
                                                <i class="icon fa fa-question-circle text-info fa-fw " title="Opciones al ponderar nota segun los intentos dados" ></i>
                                                
                                            <select class="form-control">
                                                <option selected="">Calificación más alta</option>
                                                <option>Promedio de calificaciones</option>
                                                <option>Primer intento</option>
                                                <option>Último intento</option>
                                                                                                            
                                            </select>
                                        </div>
                                </div>
    
    
                        </div>
                    </div>
                </div>
            </div>

        
            
            <div class="card card-default">
                <div class="card-header">
                    <h4 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                            <i class="glyphicon glyphicon-search text-gold"></i>
                            <b class="subtitulo">Comportamiento del cuestionario</b>
                        </a>
                    </h4>
                </div>
    
                <div id="collapse4" class="collapse close-modal">
                    <div class="card-body">
                        <div class="row">
                                  
                            
                                <div class="col-md-8 col-lg-4">
                                        <div class="form-grupo">
                                                <label class="control-label">Orden de las preguntas</label>
                                                <i class="icon fa fa-question-circle text-info fa-fw " title="Opciones al ponderar nota segun los intentos dados" ></i>
                                                
                                            <select class="form-control">
                                                <option selected="">Calificación más alta</option>
                                                <option>Promedio de calificaciones</option>
                                                <option>Primer intento</option>
                                                <option>Último intento</option>
                                                                                                            
                                            </select>
                                        </div>
                                </div>
                                <div class="col-md-8 col-lg-4">
                                    <div class="form-grupo">
                                            <label class="control-label">Mostrar resultados</label>
                                            <i class="icon fa fa-question-circle text-info fa-fw " title="Permitira mostrar las preguntas en orden diferente o aleatorio para los estudiantes" ></i>
                                            
                                        <select class="form-control">
                                            <option selected="">En orden</option>
                                            <option>Aleatorio</option>
                                                        
                                        </select>
                                    </div>
                                </div>
    
    
                        </div>
                    </div>
                </div>
            </div>


            <div class="row" style="margin-top: 10px;">
                    <div class="col-lg-12">
                        <div class="pull-right">
                            <a href="pregunta" class="btn btn-success btn-lg" id="btnSubmit" onclick="saveTest(event);"><i class="fa fa-share"></i> Continuar</a>
                        </div>
                    </div>
                </div>
            </form>
            </div>

            <div>
                <form id="session">
                {!! csrf_field() !!}
                </form>
            </div>
    
</div>
<script src="../js/cuestionario.js"></script>
<script src="../js/llenar.js"></script>
</body>
</html>