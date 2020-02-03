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

</head>
<body class="fondo">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: black;">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="crear.html" style="font-family: 'Kaushan Script', cursive; color:darkorange">Sistema Testing</a>
        </div>
      </nav>



<br><br><br><br>
    <div class="container">
        <center>
        <h2 style="font-family: 'Kaushan Script', cursive; color: black;">Listado de Cuestionarios</h2>
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
                            <th><input type="text" class="form-control" placeholder="Nombre" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Fecha Inicio" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Fecha Fin" disabled></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody style="background: rgb(231, 234, 235);">
                        <tr>
                            <td>sis325</td>
                            <td>1er Parcial</td>
                            <td>05/08/19</td>
                            <td>10/08/19</td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Visualizar Cuestionario"><a href="prueba.html" class="btn btn-light btn-xs"><i class="fa fa-eye"></i></a></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Editar"><button class="btn btn-primary btn-xs" data-title="Editar" data-toggle="modal" data-target="#FVEdit" ><span class="fa fa-pencil"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Eliminar"><button class="btn btn-danger btn-xs" data-title="Eliminar" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash-o"></span></button></p></td>

                        </tr>
                        <tr>
                            <td>sis460</td>
                            <td>2do Parcial</td>
                            <td>10/04/19</td>
                            <td>14/04/19</td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Visualizar Cuestionario"><a href="prueba.html" class="btn btn-light btn-xs"><i class="fa fa-eye"></i></a></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Editar"><button class="btn btn-primary btn-xs" data-title="Editar" data-toggle="modal" data-target="#MultiEdit" ><span class="fa fa-pencil"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Eliminar"><button class="btn btn-danger btn-xs" data-title="Eliminar" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash-o"></span></button></p></td>

                        </tr>
                        <tr>
                            <td>com450</td>
                            <td>3er Parcial</td>
                            <td>27/05/19</td>
                            <td>29/05/19</td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Visualizar Cuestionario"><a href="prueba.html" class="btn btn-light btn-xs"><i class="fa fa-eye"></i></a></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Editar"><button class="btn btn-primary btn-xs" data-title="Editar" data-toggle="modal" data-target="#UnicaEdit" ><span class="fa fa-pencil"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Eliminar"><button class="btn btn-danger btn-xs" data-title="Eliminar" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash-o"></span></button></p></td>


                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>


    </div>
