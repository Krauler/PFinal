<html>
    <head>
        <link href="CSS/bootstrap.min.css" type="text/css" rel=stylesheet>
        <title>Enviando...</title>
    </head>
    <body>
        <div class="col-sm-12">
            <?php
            include_once("config/Conexion.php");
            $conexion = new ConfigBD();
            $objConexion = $conexion->postAlumnos();
            header('Location: Insertar.php');
            ?>    
        </div>
        
        <script src="JS/jquery-3.3.1.min.map" type="text/javascript"></script>
        <script src="JS/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
