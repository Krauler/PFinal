<?php
include_once("config/Conexion.php");

$conexion = new ConfigBD();
$taller = $_POST['Taller'];
$objConexion = $conexion->filTaller($taller);
?>