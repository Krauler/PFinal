<html>
    <head>
        <link href="CSS/bootstrap.min.css" type="text/css" rel=stylesheet>
        <title>Consulta</title>
    </head>
    <body>
        <div class="col-sm-12">
            <h1>Resultado de la busqueda:</h1>
            <?php
            include_once("config/Conexion.php");

            $conexion = new ConfigBD();
            $taller = $_POST['Taller'];
            $objConexion = $conexion->filTaller($taller);
            ?>    
        </div>
        
        
        <script src="JS/jquery-3.3.1.min.map" type="text/javascript"></script>
        <script src="JS/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
