<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset ('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('node_modules/font-awesome/css/font-awesome.min.css') }}">
    <link rel="icon" href="{{ asset ('img/logo.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset ('styles/llenar.css') }}">
    <script src="{{ asset ('node_modules/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset ('node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</head>
<body class="fondo">

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: black;">
                <div class="container">
                  <a class="navbar-brand js-scroll-trigger" href="crear.html" style="font-family: 'Kaushan Script', cursive; color:darkorange">Sistema Testing</a>
                </div>
              </nav>

    <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="details">
                        <h3 class="legend" style="font-family: 'Kaushan Script', cursive; color:black">Tipos de preguntas</h3>
                        <table class="table">
                            <tbody>
                              <tr>
                              <div class="col-md-8 col-lg-4">
                                <div class="form-grupo">
                                        <label class="control-label">Materia</label>
                                        <i class="icon fa fa-question-circle text-info fa-fw " title="Elija la materia a la cual sera asignada este cuestionario" ></i>
                                        
                                    
                                    <select class="form-control" id="subjects" name="subjects">
                                        
                                    </select>
                                </div>
                        </div>
                              </tr>
                                <tr>
                                    <td><i class="fa fa-adjust"></i></td><td>Falso Verdadero</td>
                                    <td> <a class="btn btn-success btn-sm shadow-blue fa fa-plus" data-toggle="modal" href="#FV"> Adicionar</a></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-check-square"></i></td><td>Selección Única</td>
                                    <td> <a class="btn btn-success btn-sm shadow-blue fa fa-plus" data-toggle="modal" href="#Unica"> Adicionar</a></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-cubes"></i></td><td>Selección Múltiple</td>
                                    <td> <a class="btn btn-success btn-sm shadow-blue fa fa-plus" data-toggle="modal" href="#Multi"> Adicionar</a></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-archive"></i></td><td colspan="2"> <a class="btn btn-info btn-sm shadow-blue fa fa-share" href="banco"> Baúl de preguntas </a></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="col-md-8">
                    <div class="content" id="questionContent">
                        <div class="comment " id="question-#">
                            <div class="row">
                                <div class="col-sm-2">

                                </div>
                                <div class="col-sm-7">
                                    <div class="author">
                                        <h6 class="username" style="color:rgb(104, 161, 207);"> Falso Verdadero</h6>
                                    </div>
                                    <p>¿Scrum es un marco de trabajo para desarrollo ágil de software?</p>
                                </div>
                                <div class="col-sm-3"> 
                                    <a href="#" class="btn btn-group btn-xs tip load-in-modal shadow-blue" data-placement="top" title="" data-original-title="Ver"> 
                                        <i class="fa fa-eye"></i>
                                    </a> 
                                    <a href="#" class="btn btn-primary btn-xs tip load-in-modal shadow-blue" data-placement="top" title="" data-original-title="Editar"> 
                                        <i class="fa fa-edit"></i> 
                                    </a> 
                                    <a href="#" class="btn btn-danger btn-xs tip shadow-danger" data-placement="top" title="" data-original-title="Borrar"> 
                                        <i class="fa fa-remove"></i> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 10px;">
                    <div class="col-lg-12">
                        <div class="pull-right">
                            <a href="#" class="btn btn-success btn-lg" id="btnSubmit"><i class="fa fa-flag-checkered"></i> Finalizar</a>
                        </div>
                    </div>
                </div>


        </div>




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
                        <center><img class="img-fluid d-block mx-auto" src="{{ asset ('img/verdadero_o_falso.png') }}"></center>
                        
                        
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
                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                        <center><img class="img-fluid d-block mx-auto" src="{{ asset ('img/multi.jpg') }}"></center>
                        

                        <div class="form-group" style="margin-top: 5%;"> 
                                <input type="hidden" value="true-false" > 
                                <input type="hidden" value="3120"> 
                                <label for="MultiPreg">¿Cuál es la pregunta?</label>
                                <span class="text-danger">*</span>
                                <textarea autocomplete="off" class="form-control input-question-txt" required="required" cols="30" rows="1"></textarea>
                        </div>
    
    
                        <div class="form-group"> 
                                <label for="MultiPuntos">Puntos</label>
                                <span class="text-danger">*</span> 
                                <input value="1" class="form-control" required="required" type="number">
                        </div>


                        <div class="form-group"> 
                                <label for="MultiResp">¿Cuál es la respuesta correcta?</label>
                                <span class="text-danger">*</span> 
                                <select class="form-control">
                                        <option selected="">Falso</option>
                                        <option>Verdadero</option>                                                    
                                </select>
                        </div>


                        <div class="form-group"> 
                                <input type="hidden" value="true-false" > 
                                <input type="hidden" value="3120"> 
                                <label for="MultiPista">Pista</label>
                                <span class="text-danger">*</span>
                                <textarea autocomplete="off" class="form-control input-question-txt" required="required" cols="30" rows="1"></textarea>
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
                        <center><img class="img-fluid d-block mx-auto" src="{{ asset ('img/unica.png') }}"></center>
                        

                        <div class="form-group" style="margin-top: 5%;"> 
                                <input type="hidden" value="true-false" > 
                                <input type="hidden" value="3120"> 
                                <label for="UnicaText">¿Cuál es la pregunta?</label>
                                <span class="text-danger">*</span>
                                <textarea autocomplete="off" class="form-control input-question-txt" required="required" cols="30" rows="1"></textarea>
                        </div>
    
    
                        <div class="form-group"> 
                                <label for="UnicaPuntos">Puntos</label>
                                <span class="text-danger">*</span> 
                                <input value="1" class="form-control" required="required" type="number">
                        </div>


                        <div class="form-group"> 
                                <label for="UnicaPreg">¿Cuál es la respuesta correcta?</label>
                                <span class="text-danger">*</span> 
                                <select class="form-control">
                                        <option selected="">Falso</option>
                                        <option>Verdadero</option>                                                    
                                </select>
                        </div>


                        <div class="form-group"> 
                                <input type="hidden" value="true-false" > 
                                <input type="hidden" value="3120"> 
                                <label for="UnicaPista">Pista</label>
                                <span class="text-danger">*</span>
                                <textarea autocomplete="off" class="form-control input-question-txt" required="required" cols="30" rows="1"></textarea>
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
              <div>
                <form id="session">
                {!! csrf_field() !!}
                </form>
            </div>
            </div>
          </div>

<script src="{{ asset('js/pregunta.js') }}"></script>
</body>
</html>