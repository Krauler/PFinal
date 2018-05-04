<?php
class ConfigBD {
    function Combo(){
        $conexion = new ConfigBD();
        $objConexion = $conexion->getConexion();
        $query = "SELECT * FROM centros";
        $resultadoConsulta = $objConexion->query($query);
        echo "<select id=\"Escuela\" onchange=\"Show();\">";
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
    
    function getCentrosW(){
        $taller = $_GET['taller'];
        $conexion = new ConfigBD();
        $objConexion = $conexion->getConexion();
        try{
            $taller;
            $query = "SELECT * FROM centros WHERE Telebachillerato =" . $taller;
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
            $query = "SELECT * FROM alumnos WHERE Telebachillerato=";
            $resultadoConsulta = $objConexion->query($query);
            if ($resultadoConsulta->num_rows>0){
                echo "<table aling=\"center\" border=\"1\">";
                    echo "<tr>";
                        echo "<td>Matricula</td>";
                        echo "<td>Telebachillerato</td>";
                        echo "<td>Estatus</td>";
                        echo "<td>Nombre</td>";
                        echo "<td>Paterno</td>";
                        echo "<td>Materno</td>";
                        echo "<td>Genero</td>";
                        echo "<td>Generacion</td>";
                        echo "<td>Municipio</td>";
                        echo "<td>Pais</td>";
                        echo "<td>Fecha</td>";
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
        }catch (Exceptison $e){
            echo $e;
        }
    }
  
}
?>
