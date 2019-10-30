<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banco de Preguntas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../styles/tabla.css">
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




    <div class="container">
        <center>
        <h2 style="font-family: 'Kaushan Script', cursive; color: black;">LISTADO DE CUESTIONARIOS</h2>
        </center>
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">TESTS CREADOS</h3>
                    <div class="pull-right">
                        <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtrar</button>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr class="filters">
                            <th><input type="text" class="form-control" placeholder="Materia" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Nombre" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Fecha Inicial" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Fecha Final" disabled></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="tdMateria">sis325</td>
                            <td id="tdNombre">¿Scrum es una gestion de codigo?</td>
                            <td id="tdFechaInicial">Falso</td>
                            <td id="tdFechaFinal">Verdadero/Falso</td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Ver"><button class="btn btn-secondary btn-xs" data-title="Ver" data-toggle="modal" data-target="#view" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Editar"><button class="btn btn-primary btn-xs" data-title="Editar" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Eliminar"><button class="btn btn-danger btn-xs" data-title="Eliminar" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Añadir a un cuestionario"><button class="btn btn-warning btn-xs" data-title="Agregar" data-toggle="modal" data-target="#añadir" ><span class="glyphicon glyphicon-plus"></span></button></p></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="pull-right">
                    <a href="pregunta" class="btn btn-success btn-lg" id="btnSubmit"><i class="glyphicon glyphicon-plus"></i> Agregar pregunta</a>
                </div>
            </div>
        </div>

    </div>
</body>
</html>