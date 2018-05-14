<?php
include_once("config/Conexion.php");
$conexion = new ConfigBD();
$objConexion = $conexion->editAlumno();
echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";
?>