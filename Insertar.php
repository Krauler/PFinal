<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="CSS/styInsertar.css" type="text/css" rel="stylesheet">
    <title>Agregar un nuevo registro</title>
</head>

<body>

    <div class="col-sm-12 contGral">
        <h1></h1>
        <div class="col-sm-12 contForm">
            <form class="row col-sm-12" method="POST" action="postAlumnos.php">
                <div class="col-sm-5">Matricula</div>
                <div class="col-sm-7"><input name="Matricula" type="text"></div>

                <div class="col-sm-5">Telebachillerato</div>
                <div class="col-sm-5">
                    <?php
                    include_once("config/Conexion.php");
                    $conexion = new ConfigBD();
                    $objConexion = $conexion->Combo();
                    ?>
                </div>

                <div class="col-sm-5">Estatus</div>
                <div class="col-sm-7"><input name="Estatus" type="text"></div>

                <div class="col-sm-5">Nombre</div>
                <div class="col-sm-7"><input name="Nombre" type="text"></div>

                <div class="col-sm-5">Paterno</div>
                <div class="col-sm-7"><input name="Paterno" type="text"></div>

                <div class="col-sm-5">Materno</div>
                <div class="col-sm-7"><input name="Materno" type="text"></div>

                <div class="col-sm-5">Genero</div>
                <div class="col-sm-7"><input name="Genero" type="text"></div>

                <div class="col-sm-5">Generacion</div>
                <div class="col-sm-7"><input name="Generacion" type="text"></div>

                <div class="col-sm-5">Municipio</div>
                <div class="col-sm-7"><input name="Municipio" type="text"></div>

                <div class="col-sm-5">Pais</div>
                <div class="col-sm-7"><input name="Pais" type="text"></div>

                <div class="col-sm-5">Fecha</div>
                <div class="col-sm-7"><input name="Fecha" type="text"></div>
                
                <button type="submit">Agregar</button>
                <button onclick="limpiar()">Cancelar</button>
                
            </form>
        </div>
    </div>
    
    <script type="text/javascript">
        function limpiar(){
            for (var i=0; i<inputs.length; i++){
                inputs[i].value = "";
            }
        }
    </script>
    <script src="JS/bootstrap.min.js" type="text/javascript"></script>
    <script src="JS/jquery-3.3.1.min.map" type="text/javascript"></script>
</body>

</html>
