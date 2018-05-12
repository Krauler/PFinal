<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet"> 

    <link href="CSS/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/inConsulta.css" type="text/css" rel="stylesheet">
    <title>Consultar Alumno</title>
</head>

<body>
    <div class="row col-sm-12 Cont">
        <div class="col-sm-12">
            <h1>Matricula de alumnos</h1>
        </div>

        <div class="col-sm-12">
            <?php
            include_once("config/Conexion.php");
            $conexion = new ConfigBD();
            $objConexion = $conexion->Combo();
            ?>
        </div>
        
        <div class="col-sm-12">
            <form method="POST" action="conSQL.php" target="_blank">
                <input id="Taller" type="text" name="Taller" style="display:none">
                <button class="btn btnConsulta" type="submit">Consultar</button>
            </form>
        </div>

    </div>

    <div class="col-sm-12">
        <?php
        $objConexion = $conexion->getAlumnos();
        ?>
    </div>

    <script type="text/javascript">
        function Show() {
            var combo = document.getElementById("Escuela");
            var seleccion = combo.options[combo.selectedIndex].text;
            document.getElementById("Taller").value = seleccion;
        }

    </script>

    <script src="JS/jquery-3.3.1.min.map" type="text/javascript"></script>
    <script src="JS/bootstrap.min.js" type="text/javascript"></script>

</body>

</html>
