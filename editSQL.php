<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">

    <link href="CSS/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="CSS/styInsertar.css" type="text/css" rel="stylesheet">
    <title>Consulta</title>
</head>

<body>
    <div class="col-sm-12 contGral">
        <div class="col-sm-12 contForm">
            <h1>Modificar Alumno:</h1>
            <form class="row col-sm-12" method="POST" action="editAlumno.php">
                <div class="col-sm-5">Telebachillerato</div>
                <div class="col-sm-7">
                    <?php
                    include_once("config/Conexion.php");
                    $conexion = new ConfigBD();
                    $objConexion = $conexion->Combo();
                    ?>
                </div>
                
                <?php
                $Matricula = $_POST['Matricula'];
                $objConexion = $conexion->editAlumnos($Matricula);
                ?>
            </form>
        </div>
        <p>**Si no desea modificar el telebachillerato dejelo por default <br>
           **La fecha tendra que ser introducida en el siguiente formato dia/mes/a&ntilde;o</p>
    </div>

    <script type="text/javascript">
        function limpiar(){
            for (var i=0; i<inputs.length; i++){
                inputs[i].value = "";
            }
        }
    </script>
    <script src="JS/jquery-3.3.1.min.map" type="text/javascript"></script>
    <script src="JS/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>
