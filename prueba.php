<html>

<head>
    <title>Agregar Alumno</title>
</head>

<body>
    <h1>Selecciona una escuela</h1>
    
    <form method="POST" action="Consultar.php">
        <?php
        include_once("config/Conexion.php");

        $conexion = new ConfigBD();
        $objConexion = $conexion->Combo();
        //$objConexion = $conexion->getCentros();
        ?>

        <button type="submit">Consultar</button>
    </form>
    
    <script type="text/javascript">
        $("#Escuela").change(function(){
            alert("Cambio el valor");
            $("#Escuela option:selected").each(function(){
               escuela = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "config/Conexion.php";
                })
            });
            
        });
        
        function Show(){
            var combo = document.getElementById("producto");
            var selected = combo.options[combo.selectedIndex].text;
            //alert(selected);
        }
    </script>
</body>

</html>
