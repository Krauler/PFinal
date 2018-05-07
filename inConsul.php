<html>

<head>
    <link href="CSS/bootstrap.min.css" type="text/css" rel="stylesheet">
    <title>Consultar Alumno</title>
</head>

<body>
    <div class="col-sm-12 Cont">
        <?php
        include_once("config/Conexion.php");
        $conexion = new ConfigBD();
        $objConexion = $conexion->Combo();
        ?>

            <form method="POST" action="conSQL.php" target="_blank">
                <input id="Taller" type="text" name="Taller" style="display:none">
                <button type="submit">Consultar</button>
            </form>
    </div>



    <div class="col-sm-12">
        <?php
        $objConexion = $conexion->getAlumnos();
        ?>
    </div>

    <script type="text/javascript">
        function Show() {
            /* Para obtener el texto */
            var combo = document.getElementById("Escuela");
            var seleccion = combo.options[combo.selectedIndex].text;
            //$("#Taller").val(seleccion);
            document.getElementById("Taller").value = seleccion;
            //$("contDB").load("conSQL.php",{seleccion:taller});
            //alert (seleccion);
        }

    </script>

    <script src="JS/jquery-3.3.1.min.map" type="text/javascript"></script>
    <script src="JS/bootstrap.min.js" type="text/javascript"></script>

</body>

</html>
