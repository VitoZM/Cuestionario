<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema testing</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="styles/titulo.css">
    <link rel="stylesheet" href="styles/boton.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="title">SISTEMA TESTING</div>
        <div class="subtitle"> EVALUACION DOCENTE PARA ESTUDIANTES </div>
    </div>
        <script src="js/titulo.js"></script>



    <div>
        <a href="login">
            <span data-text="E">E</span>
            <span data-text="M">M</span>
            <span data-text="P">P</span>
            <span data-text="E">E</span>
            <span data-text="Z">Z</span>
            <span data-text="A">A</span>
            <span data-text="R">R</span>
        </a>
    </div>
    <script>
        $(document).ready(function(){
            let url = "index.php/close";
            let data = $loginForm.serialize();

            $.post(url, data);
        });
    </script>

</body>
</html>
