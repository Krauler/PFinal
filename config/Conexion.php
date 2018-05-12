<?php
class ConfigBD {
    function Combo(){
        $conexion = new ConfigBD();
        $objConexion = $conexion->getConexion();
        $query = "SELECT * FROM centros";
        $resultadoConsulta = $objConexion->query($query);
        echo "<select id=\"Escuela\" name=\"Escuela\" onchange=\"Show();\">";
        echo "<option>";
        echo "Seleccionar Telebachillerato";
        echo "</option>";
        while ($row = $resultadoConsulta->fetch_assoc()){
            echo "<option>";
            echo $row["Telebachillerato"]; 
            echo "</option>";
        }
        echo "</select>";
    }
    
    function getConexion(){
        $archivo = 'confg.ini';
        if (!$ajustes = parse_ini_file($archivo, true)){
            throw new exception ('No se puede abrir el archivo' . $archivo . '.');
        }
        
        $servidor = $ajustes["database_si"]["host"]; //Nombre del servidor o localhost
        $basededatos = $ajustes["database_si"]["basededatos"]; //Nombre de la base de datos
        $puerto = $ajustes["database_si"]["port"]; //Numero del puerto que se esta usando
        $usuario = $ajustes["database_si"]["username"]; //Nombre del usuario
        $password = $ajustes["database_si"]["password"]; //Contraseña de la base de datos
        
        try {
            $conexionMysqli = new mysqli($servidor, $usuario , $password, $basededatos);
            if ($conexionMysqli->connect_errno){
                echo "Fallo la conexion con Mysql (" .$conexionMysqli->connect_errno . ") " . $conexionMysqli->connect_error;
                throw new exception ("No se pudo generar la conexion con la base de datos");
            }else {
                return $conexionMysqli;
            }
        }catch (Exception $e){
            throw e;
        }
    }
    
    function getCentros(){
        $conexion = new ConfigBD();
        $objConexion = $conexion->getConexion();
        try{
            $taller;
            $query = "SELECT * FROM centros";
            $resultadoConsulta = $objConexion->query($query);
            if ($resultadoConsulta->num_rows>0){
                
                echo "<table aling=\"center\" border=\"1\">";
                    echo "<tr>";
                        echo "<td>Clave</td>";
                        echo "<td>Telebachillerato</td>";
                        echo "<td>Centro</td>";
                        echo "<td>Municipio</td>";
                        echo "<td>Encargado</td>";
                        echo "<td>Correo</td>";
                    echo "<tr>";
                    
                while ($row = $resultadoConsulta->fetch_assoc()){
                    echo "<tr>";
                        echo "<td>" . $row["Clave"] . "</td>";
                        echo "<td>" . $row["Telebachillerato"] . "</td>";
                        echo "<td>" . $row["Centro"] . "</td>";
                        echo "<td>" . $row["Municipio"] . "</td>";
                        echo "<td>" . $row["Encargado"] . "</td>";
                        echo "<td>" . $row["Correo"] . "</td>";
                    echo "</tr>";
                }
                
            }else{
                echo "Consulta sin registros";
            }
            
            echo "</table>";
            
        }catch (Exception $e){
            echo $e;
        }
    }
    
    function getAlumnos(){
        $conexion = new ConfigBD();
        $objConexion = $conexion->getConexion();
        try{
            $query = "SELECT * FROM alumnos";
            $resultadoConsulta = $objConexion->query($query);
            if ($resultadoConsulta->num_rows>0){
                echo "<table aling=\"center\" border=\"1\">";
                    echo "<tr>";
                        echo "<th>Matricula</th>";
                        echo "<th>Telebachillerato</th>";
                        echo "<th>Estatus</th>";
                        echo "<th>Nombre</th>";
                        echo "<th>Paterno</th>";
                        echo "<th>Materno</th>";
                        echo "<th>Genero</th>";
                        echo "<th>Generacion</th>";
                        echo "<th>Municipio</th>";
                        echo "<th>Pais</th>";
                        echo "<th>Fecha</th>";
                    echo "<tr>";
                    
                while ($row = $resultadoConsulta->fetch_assoc()){
                    echo "<tr>";
                    
                    echo "<form method=\"POST\" action=\"editSQL.php\" target=\"_blank\">";
                    echo "<input id=\"Matricula\" type=\"text\" value=" . $row["Matricula"] . " name=\"Matricula\" style=\"display:none\">";
                    
                        echo "<td><button class=\"btnTable\" type=\"submit\">" . $row["Matricula"] . "</button></td>" ;
                            
                    echo "</form>";
                    
                        echo "<td>" . $row["Telebachillerato"] . "</td>";
                        echo "<td>" . $row["Estatus"] . "</td>";
                        echo "<td>" . $row["Nombre"] . "</td>";
                        echo "<td>" . $row["Paterno"] . "</td>";
                        echo "<td>" . $row["Materno"] . "</td>";
                        echo "<td>" . $row["Genero"] . "</td>";
                        echo "<td>" . $row["Generacion"] . "</td>";
                        echo "<td>" . $row["Municipio"] . "</td>";
                        echo "<td>" . $row["Pais"] . "</td>";
                        echo "<td>" . $row["Fecha"] . "</td>";
                    echo "</tr>";
                }
                
            }else{
                echo "Consulta sin registros";
            }
            echo "</table>";
        }catch (Exceptison $e){
            echo $e;
        }
    }
    
    function filTaller($taller){ 
        $conexion = new ConfigBD();
        $objConexion = $conexion->getConexion();
        try{
            $query = "SELECT * FROM alumnos WHERE Telebachillerato = '" . $taller ."'";
            //$query = "SELECT * FROM alumnos WHERE Telebachillerato = 'Telebachillerato Comunitario Jerecuaro - El Tepozan' ";
            $resultadoConsulta = $objConexion->query($query);
            if ($resultadoConsulta->num_rows>0){
                
                echo "<table aling=\"center\" border=\"1\">";
                    echo "<tr>";
                        echo "<th>Matricula</th>";
                        echo "<th>Telebachillerato</th>";
                        echo "<th>Estatus</th>";
                        echo "<th>Nombre</th>";
                        echo "<th>Paterno</th>";
                        echo "<th>Materno</th>";
                        echo "<th>Genero</th>";
                        echo "<th>Generacion</th>";
                        echo "<th>Municipio</th>";
                        echo "<th>Pais</th>";
                        echo "<th>Fecha</th>";
                    echo "<tr>";
                    
                while ($row = $resultadoConsulta->fetch_assoc()){
                    echo "<tr>";
                        echo "<td>" . $row["Matricula"] . "</td>";
                        echo "<td>" . $row["Telebachillerato"] . "</td>";
                        echo "<td>" . $row["Estatus"] . "</td>";
                        echo "<td>" . $row["Nombre"] . "</td>";
                        echo "<td>" . $row["Paterno"] . "</td>";
                        echo "<td>" . $row["Materno"] . "</td>";
                        echo "<td>" . $row["Genero"] . "</td>";
                        echo "<td>" . $row["Generacion"] . "</td>";
                        echo "<td>" . $row["Municipio"] . "</td>";
                        echo "<td>" . $row["Pais"] . "</td>";
                        echo "<td>" . $row["Fecha"] . "</td>";
                    echo "</tr>";
                }
                
            }else{
                echo "Consulta sin registros";
            }
            
            echo "</table>";
            
        }catch (Exception $e){
            echo $e;
        }
    }
    
    function postAlumnos(){
        $conexion = new ConfigBD();
        $objConexion = $conexion->getConexion();
        
        $Matricula = $_POST['Matricula'];
        $Telebachillerato = $_POST['Escuela'];
        $Estatus = $_POST['Estatus'];
        $Nombre = $_POST['Nombre'];
        $Paterno = $_POST['Paterno'];
        $Materno = $_POST['Materno'];
        $Genero = $_POST['Genero'];
        $Generacion = $_POST['Generacion'];
        $Municipio = $_POST['Municipio'];
        $Pais = $_POST['Pais'];
        $Fecha = $_POST['Fecha'];
        echo $Telebachillerato;
        try{
            $query = "INSERT INTO alumnos (Matricula, Telebachillerato, Estatus, Nombre, Paterno, Materno, Genero, Generacion, Municipio, Pais, Fecha) VALUES ('". $Matricula . "','". $Telebachillerato ."','". $Estatus ."','". $Nombre ."','". $Paterno ."','". $Materno ."','". $Genero ."','". $Generacion ."','". $Municipio ."','". $Pais ."','". $Fecha ."')";
            if ($objConexion->query($query) === TRUE) {
                    echo "Registro Agregado";
                } else {
                    echo "Error: " . $query . "<br>" . $conexion->error;
                }
        }catch (Exceptison $e){
            echo $e;
        }
    }
    
    function editAlumnos($Matricula){
        $conexion = new ConfigBD();
        $objConexion = $conexion->getConexion();
        try{
            $query = "SELECT * FROM alumnos WHERE Matricula = '" . $Matricula ."'";
            $resultadoConsulta = $objConexion->query($query);
            if ($resultadoConsulta->num_rows>0){
                while ($row = $resultadoConsulta->fetch_assoc()){
                    echo "<div class=\"col-sm-5\">Matricula</div>";
                    echo "<div class=\"col-sm-7\"><input name=\"Matricula\" type=\"text\" value=" . $row["Matricula"] . "></div>"; 

                    echo "<div class=\"col-sm-5\">Estatus</div>";
                    echo "<div class=\"col-sm-7\"><input name=\"Estatus\" type=\"text\" value=" . $row["Estatus"] . "></div>";

                    echo "<div class=\"col-sm-5\">Nombre</div>";
                    echo "<div class=\"col-sm-7\"><input name=\"Nombre\" type=\"text\" value=" . $row["Nombre"] . "></div>";

                    echo "<div class=\"col-sm-5\">Paterno</div>";
                    echo "<div class=\"col-sm-7\"><input name=\"Paterno\" type=\"text\" value=" . $row["Paterno"] . "></div>";

                    echo "<div class=\"col-sm-5\">Materno</div>";
                    echo "<div class=\"col-sm-7\"><input name=\"Materno\" type=\"text\" value=" . $row["Materno"] . "></div>";

                    echo "<div class=\"col-sm-5\">Genero</div>";
                    echo "<div class=\"col-sm-7\"><input name=\"Genero\" type=\"text\" value=" . $row["Genero"] . "></div>";

                    echo "<div class=\"col-sm-5\">Generacion</div>";
                    echo "<div class=\"col-sm-7\"><input name=\"Generacion\" type=\"text\" value=" . $row["Generacion"] . "></div>";

                    echo "<div class=\"col-sm-5\">Municipio</div>";
                    echo "<div class=\"col-sm-7\"><input name=\"Municipio\" type=\"text\" value=" . $row["Municipio"] . "></div>";

                    echo "<div class=\"col-sm-5\">Pais</div>";
                    echo "<div class=\"col-sm-7\"><input name=\"Pais\" type=\"text\" value=" . $row["Pais"] . "></div>";

                    echo "<div class=\"col-sm-5\">Fecha</div>";
                    echo "<div class=\"col-sm-7\"><input name=\"Fecha\" type=\"text\" value=" . $row["Fecha"] . "></div>";

                    echo "<button id=\"btnAdd\" class=\"btn\" type=\"submit\">Actualizar</button>";
                    echo "<button id=\"btnCancelar\" class=\"btn\" onclick=\"limpiar()\">Cancelar</button>";
                }
                
            }else{
                echo "Consulta sin registros";
            }
            
            echo "</table>";
            
        }catch (Exception $e){
            echo $e;
        }
}
    
    function editAlumno(){
        $conexion = new ConfigBD();
        $objConexion = $conexion->getConexion();
        
        $Matricula = $_POST['Matricula'];
        $Telebachillerato = $_POST['Escuela'];
        $Estatus = $_POST['Estatus'];
        $Nombre = $_POST['Nombre'];
        $Paterno = $_POST['Paterno'];
        $Materno = $_POST['Materno'];
        $Genero = $_POST['Genero'];
        $Generacion = $_POST['Generacion'];
        $Municipio = $_POST['Municipio'];
        $Pais = $_POST['Pais'];
        $Fecha = $_POST['Fecha'];
        try{
            if ($Telebachillerato == "Seleccionar Telebachillerato"){
                $query = "UPDATE `alumnos` SET `Estatus` = '".$Estatus."', `Nombre` = '".$Nombre."', `Paterno` = '".$Paterno."', `Materno` = '".$Materno."', `Genero` = '".$Genero."', `Generacion` = '".$Generacion."', `Municipio` = '".$Municipio."', `Pais` = '".$Pais."', `Fecha` = '".$Fecha."' WHERE `alumnos`.`Matricula` = ".$Matricula.";";
            }else{
                $query = "UPDATE `alumnos` SET `Telebachillerato` = '".$Telebachillerato ."', `Estatus` = '".$Estatus."', `Nombre` = '".$Nombre."', `Paterno` = '".$Paterno."', `Materno` = '".$Materno."', `Genero` = '".$Genero."', `Generacion` = '".$Generacion."', `Municipio` = '".$Municipio."', `Pais` = '".$Pais."', `Fecha` = '".$Fecha."' WHERE `alumnos`.`Matricula` = ".$Matricula.";";
            }
            
            if ($objConexion->query($query) === TRUE) {
                    echo "Registro Actualizado";
                } else {
                    echo "Error: " . $query . "<br>" . $conexion->error;
                }
        }catch (Exceptison $e){
            echo $e;
        }
    }
    
}
?>