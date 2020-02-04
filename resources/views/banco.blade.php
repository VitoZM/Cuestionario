<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banco de Preguntas</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/tabla.css">
    <link rel="stylesheet" href="../styles/crear.css">
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../js/tabla.js"></script>

    <style>
        h1,h2,h3,p,a, button{
            font-family: 'Kaushan Script', cursive;
        }
    </style>
</head>
<body class="fondo">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: black;">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="crear" style="font-family: 'Kaushan Script', cursive; color:darkorange">Sistema Testing</a>
        </div>
      </nav>



<br><br><br><br>
    <div class="container">
        <center>
        <h2 style="font-family: 'Kaushan Script', cursive; color: black;">Listado de Preguntas</h2>
        </center>
        <div class="row">
                <div class="col-lg-12 table-responsive">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title" style="font-family: 'Kaushan Script', cursive;">Preguntas</h3>
                    <div class="pull-right">
                        <button class="btn btn-secondary btn-xs btn-filter"><span class="fa fa-filter"></span> Filtrar</button>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr class="filters" style="background: rgb(84, 145, 230);">
                            <th><input type="text" class="form-control" placeholder="Materia" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Pregunta" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Respuesta" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Tipo" disabled></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody style="background: rgb(231, 234, 235);">
                        <tr>
                            <td>sis325</td>
                            <td>¿Scrum es una gestion de codigo?</td>
                            <td>Falso</td>
                            <td>Verdadero/Falso</td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Editar"><button class="btn btn-primary btn-xs" data-title="Editar" data-toggle="modal" data-target="#FVEdit" ><span class="fa fa-pencil"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Eliminar"><button class="btn btn-danger btn-xs" data-title="Eliminar" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash-o"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Añadir a un cuestionario"><button class="btn btn-warning btn-xs" data-title="Agregar" data-toggle="modal" data-target="#añadir" ><span class="fa fa-paperclip"></span></button></p></td>

                        </tr>
                        <tr>
                            <td>sis460</td>
                            <td>¿En que cms esta hecho Ecampus?</td>
                            <td>Moodle</td>
                            <td>Seleción Multiple</td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Editar"><button class="btn btn-primary btn-xs" data-title="Editar" data-toggle="modal" data-target="#MultiEdit" ><span class="fa fa-pencil"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Eliminar"><button class="btn btn-danger btn-xs" data-title="Eliminar" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash-o"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Añadir a un cuestionario"><button class="btn btn-warning btn-xs" data-title="Agregar" data-toggle="modal" data-target="#añadir" ><span class="fa fa-paperclip"></span></button></p></td>
                        </tr>
                        <tr>
                            <td>com450</td>
                            <td>5+5</td>
                            <td>10</td>
                            <td>Selección Única</td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Editar"><button class="btn btn-primary btn-xs" data-title="Editar" data-toggle="modal" data-target="#UnicaEdit" ><span class="fa fa-pencil"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Eliminar"><button class="btn btn-danger btn-xs" data-title="Eliminar" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash-o"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Añadir a un cuestionario"><button class="btn btn-warning btn-xs" data-title="Agregar" data-toggle="modal" data-target="#añadir" ><span class="fa fa-paperclip"></span></button></p></td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="pull-right">
                    <a href="preguntaBanco" class="btn btn-success btn-lg" id="btnSubmit"><i class="fa fa-plus"></i> Agregar pregunta</a>
                </div>
            </div>
        </div>

    </div>











    <!-- Falso/verdadero -->

    <div class="modal fade" id="FVEdit" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                  <div class="lr">
                    <div class="rl"></div>
                  </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-10 mx-auto">
                      <div class="modal-body">
                        <!-- Contenido de poup -->
                        <center><h2 class="text-uppercase">Verdadero/Falso</h2></center>
                        <center><img class="img-fluid d-block mx-auto" src="../img/verdadero_o_falso.png"></center>


                        <div class="form-group" style="margin-top: 5%;">
                                <input type="hidden" value="true-false" >
                                <input type="hidden" value="3120">
                                <label for="FVPreg">¿Cuál es la pregunta?</label>
                                <span class="text-danger">*</span>
                                <textarea autocomplete="off" class="form-control input-question-txt" required="required" cols="30" rows="1"></textarea>
                        </div>


                        <div class="form-group">
                                <label for="FVPuntos">Puntos</label>
                                <span class="text-danger">*</span>
                                <input value="1" class="form-control" required="required" type="number">
                        </div>


                        <div class="form-group">
                                <label for="FVResp">¿Cuál es la respuesta correcta?</label>
                                <span class="text-danger">*</span>
                                <select class="form-control">
                                        <option selected="">Falso</option>
                                        <option>Verdadero</option>
                                </select>
                        </div>


                        <center><button class="btn btn-success" data-dismiss="modal" type="button">
                            <i class="fa fa-save"></i>
                            Guardar</button>
                        <button  data-dismiss="modal" type="button" class="btn btn-danger">
                          <i class="fa fa-times"></i>
                          Cerrar</button>
                        </center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>





          <!-- Multi -->

          <div class="modal fade" id="MultiEdit" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                  <div class="lr">
                    <div class="rl"></div>
                  </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-10 mx-auto">
                      <div class="modal-body">
                        <!-- Contenido de poup -->
                        <center><h2 class="text-uppercase">Selección Múltiple</h2></center>
                        <center><img class="img-fluid d-block mx-auto" src="../img/multi.jpg"></center>


                        <div class="form-group" style="margin-top: 5%;">
                                <input type="hidden" value="true-false" >
                                <input type="hidden" value="3120">
                                <label for="MultiPreg">¿Cuál es la pregunta?</label>
                                <span class="text-danger">*</span>
                                <textarea autocomplete="off" class="form-control input-question-txt" required="required" cols="30" rows="1"></textarea>
                        </div>



                        <div class="form-group">
                            <label for="UnicaPreg">Opciones</label>
                            <span class="text-danger">*</span>
                            <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                                <tbody>
                                    <tr id='addr0' data-id="0" class="hidden">
                                        <td data-name="name">
                                            <input type="text" name='name0'  placeholder='Respuesta' class="form-control"/>
                                        </td>
                                        <br>




                                        <td data-name="sel">
                                            <select class="form-control">
                                                <option value="">Puntaje</option>
                                                <option value="1">33.33%</option>
                                                <option value="2">50%</option>
                                                <option value="3">-33.33%</option>
                                            </select>
                                        </td>
                                      </tr>
                                </tbody>
                            </table>
                            <center>
                            <button id="add_row" class="btn btn-warning"><i class="fa fa-plus"></i> Agregar</button>
                            <br>
                            </center>
                         </div>


                    <div class="form-group">
                        <label for="UnicaPreg">¿Cuáles son las respuestas correctas?</label>
                        <span class="text-danger">*</span>
                        <select class="form-control">
                                <option selected="">Ninguna</option>
                                <option>Opcion 1</option>
                                <option>Opcion 2</option>
                                <option>Opcion 3</option>
                                <option>Opcion 4</option>
                        </select>
                    </div>



                        <center><button class="btn btn-success" data-dismiss="modal" type="button">
                            <i class="fa fa-save"></i>
                            Guardar</button>
                        <button  data-dismiss="modal" type="button" class="btn btn-danger">
                          <i class="fa fa-times"></i>
                          Cerrar</button>
                        </center>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Unica -->

          <div class="modal fade" id="UnicaEdit" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                  <div class="lr">
                    <div class="rl"></div>
                  </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-10 mx-auto">
                      <div class="modal-body">
                        <!-- Contenido de poup -->
                        <center><h2 class="text-uppercase">Selección Única</h2></center>
                        <center><img class="img-fluid d-block mx-auto" src="../img/unica.png"></center>


                        <div class="form-group" style="margin-top: 5%;">
                                <input type="hidden" value="true-false" >
                                <input type="hidden" value="3120">
                                <label for="UnicaText">¿Cuál es la pregunta?</label>
                                <span class="text-danger">*</span>
                                <textarea autocomplete="off" class="form-control input-question-txt" required="required" cols="30" rows="1"></textarea>
                        </div>


                        <div class="form-group">
                            <label for="UnicaPreg">Opciones</label>
                            <span class="text-danger">*</span>
                            <table class="table table-bordered table-hover table-sortable" id="tab_logica">
                                <tbody>
                                    <tr id='addrh0' data-id="0" class="hidden">
                                        <td data-name="name">
                                            <input type="text" name='name0'  placeholder='Respuesta' class="form-control"/>
                                        </td>
                                      </tr>
                                </tbody>
                            </table>
                            <center>
                            <button id="add_rowa" class="btn btn-warning"><i class="fa fa-plus"></i> Agregar</button>
                            <br>
                            </center>
                         </div>


                        <div class="form-group">
                            <label for="UnicaPreg">¿Cuál es la respuesta correcta?</label>
                            <span class="text-danger">*</span>
                            <select class="form-control">
                                    <option selected="">Ninguna</option>
                                    <option>Opcion 1</option>
                                    <option>Opcion 2</option>
                                    <option>Opcion 3</option>
                                    <option>Opcion 4</option>
                            </select>
                        </div>






                        <center><button class="btn btn-success" data-dismiss="modal" type="button">
                            <i class="fa fa-save"></i>
                            Guardar</button>
                        <button  data-dismiss="modal" type="button" class="btn btn-danger">
                          <i class="fa fa-times"></i>
                          Cerrar</button>
                        </center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>






<!-- Eliminar -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <div class="modal-body">
                <!-- Contenido de poup -->
                <center><h3 class="text-uppercase">¿Estas seguro que desea eliminar esta pregunta?</h3></center>



                <center><button class="btn btn-success" data-dismiss="modal" type="button">
                    <i class="fa fa-check"></i>
                    Aceptar</button>
                <button  data-dismiss="modal" type="button" class="btn btn-danger">
                  <i class="fa fa-times"></i>
                  Cancelar</button>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- adicionar -->

  <div class="modal fade" id="añadir" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-10 mx-auto">
                <div class="modal-body">
                  <!-- Contenido de poup -->
                  <center><h3 class="text-uppercase">Asigne el cuestionario</h3></center>
                  <br>
                  <select class="form-control">
                      <option value="">Cuestionario</option>
                      <option value="1">1er parcial</option>
                      <option value="2">2do parcial</option>
                      <option value="3">Examen final</option>
                  </select>

                  <br>
                  <center><button class="btn btn-success" data-dismiss="modal" type="button">
                      <i class="fa fa-save"></i>
                      Aceptar</button>
                  <button  data-dismiss="modal" type="button" class="btn btn-danger">
                    <i class="fa fa-times"></i>
                    Cancelar</button>
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



</body>
</html>
