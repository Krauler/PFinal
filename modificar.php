<html>

<head>
    <link href="CSS/bootstrap.min.css" type="text/css" rel="stylesheet">
    <title>Consultar Alumno</title>
</head>

<body>

    <?php
    include_once("config/Conexion.php");
    $conexion = new ConfigBD();
    $objConexion = $conexion->Combo();
    $objConexion = $conexion->getCentros();
    ?>

        <script type="text/javascript">
            $("#Escuela").change(function() {
                alert("Cambio el valor");
                /*$("#Escuela option:selected").each(function() {
                    escuela = $(this).val();
                    $.ajax({
                        type: "POST",
                        url: "config/Conexion.php";
                    });
                });
                */
            })
        </script>
    
        <script type="text/javascript">
            function Show() {
                /* Para obtener el texto */
                var combo = document.getElementById("Escuela");
                var selected = combo.options[combo.selectedIndex].text;
                //alert (selected);
            }
        </script>
    
    <script src="JS/jquery-3.3.1.min.map" type="text/javascript"></script>
    <script src="JS/bootstrap.min.js" type="text/javascript"></script>
    
</body>

</html>
