<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="icon" href="../img/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/llenar.css">
    <link rel="stylesheet" href="../styles/tabla.css">
    <link rel="stylesheet" href="../styles/crear.css">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/tablaDinamica.js"></script>
    <script src="../js/tablaUni.js"></script>
</head>
<body class="fondo">

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: black;">
                <div class="container">
                  <a class="navbar-brand js-scroll-trigger" href="crear.html" style="font-family: 'Kaushan Script', cursive; color:darkorange">Sistema Testing</a>
                </div>
              </nav>

    <br><br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="details">
                        <h3 class="legend" style="font-family: 'Kaushan Script', cursive; color:black">Tipos de preguntas</h3>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><i class="fa fa-window-maximize"></i></td>
                                        <td>Materia</td>
                                        <td data-name="sel">
                                                <select class="form-control" name="subjects" id="subjects"></select>
                                          </td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-adjust"></i></td><td>Verdadero/Falso</td>
                                    <td> <a class="btn btn-success" data-toggle="modal" href="#FV"><i class="fa fa-plus"></i>  Adicionar</a></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-check-square"></i></td><td>Selección Única</td>
                                    <td> <a class="btn btn-success" data-toggle="modal" href="#Unica"><i class="fa fa-plus"></i>  Adicionar</a></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-cubes"></i></td><td>Selección Múltiple</td>
                                    <td> <a class="btn btn-success" data-toggle="modal" href="#Multi"><i class="fa fa-plus"></i>  Adicionar</a></td>
                                </tr>

                            </tbody>
                        </table>

                        <table>
                                <center>

                                        <a href="#" class="btn btn-success btn-lg" id="btnSubmit"><i class="fa fa-flag-checkered"></i> Finalizar</a>
                                </center>
                        </table>

                    </div>
                </div>
                <div class="col-lg-3"></div>

            </div>


        <center>
        <div class="col-lg-7 table-responsive">
                    <div class="content" id="questionContent">
                        <div class="comment " id="question-#">
                            <div class="row">
                                <div class="panel panel-primary filterable">
                                    <div class="panel-heading">
                                        <h3 class="panel-title" style="font-family: 'Kaushan Script', cursive; color:black">Preguntas</h3>
                                    </div>
                                    <table class="table" style="border: blueviolet;">
                                        <thead style="background:rgb(84, 145, 230);">
                                            <tr>
                                                <th>Pregunta</th>
                                                <th>Respuesta</th>
                                                <th>Tipo</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody style="background: rgb(238, 238, 238);">
                                            <tr>
                                                <td>¿Scrum es una gestion de codigo?</td>
                                                <td>Falso</td>
                                                <td>Verdadero/Falso</td>
                                                <td><p data-placement="top" data-toggle="tooltip" title="Editar"><button class="btn btn-primary btn-xs" data-title="Editar" data-toggle="modal" data-target="#FVEdit"><span class="fa fa-pencil"></span></button></p></td>
                                                <td><p data-placement="top" data-toggle="tooltip" title="Eliminar"><button class="btn btn-danger btn-xs" data-title="Eliminar" data-toggle="modal" data-target="#delete"><span class="fa fa-trash-o"></span></button></p></td>

                                            </tr>
                                            <tr>
                                                <td>¿En que cms esta hecho Ecampus?</td>
                                                <td>Moodle</td>
                                                <td>Selección Multiple</td>
                                                <td><p data-placement="top" data-toggle="tooltip" title="Editar"><button class="btn btn-primary btn-xs" data-title="Editar" data-toggle="modal" data-target="#MultiEdit"><span class="fa fa-pencil"></span></button></p></td>
                                                <td><p data-placement="top" data-toggle="tooltip" title="Eliminar"><button class="btn btn-danger btn-xs" data-title="Eliminar" data-toggle="modal" data-target="#delete"><span class="fa fa-trash-o"></span></button></p></td>
                                            </tr>
                                            <tr>
                                                <td>5+5</td>
                                                <td>10</td>
                                                <td>Selección Única</td>
                                                <td><p data-placement="top" data-toggle="tooltip" title="Editar"><button class="btn btn-primary btn-xs" data-title="Editar" data-toggle="modal" data-target="#UnicaEdit"><span class="fa fa-pencil"></span></button></p></td>
                                                <td><p data-placement="top" data-toggle="tooltip" title="Eliminar"><button class="btn btn-danger btn-xs" data-title="Eliminar" data-toggle="modal" data-target="#delete"><span class="fa fa-trash-o"></span></button></p></td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </center>


        </div>


        <!-- Falso/verdadero -->

        <div class="modal fade" id="FV" tabindex="-1" role="dialog" aria-hidden="true">
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

          <div class="modal fade" id="Multi" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <label for="FVPuntos">Puntos</label>
                                <span class="text-danger">*</span>
                                <input value="1" class="form-control" required="required" type="number">
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
                                                <option value="100">100%</option>
                                                <option value="50">50%</option>
                                                <option value="33.33">33.33%</option>
                                                <option value="25">25%</option>
                                                <option value="20">20%</option>
                                                <option value="-20">-20%</option>
                                                <option value="-25">-25%</option>
                                                <option value="-33.33">-33.33%</option>
                                                <option value="-50">-50%</option>
                                                <option value="-100">-100%</option>

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

          <div class="modal fade" id="Unica" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <div class="form-group">
                                <label for="FVPuntos">Puntos</label>
                                <span class="text-danger">*</span>
                                <input value="1" class="form-control" required="required" type="number">
                            </div>
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
          <div>
                <form id="session">
                {!! csrf_field() !!}
                </form>
            </div>

<script src="../js/preguntaBanco.js"></script>
</body>
</html>
