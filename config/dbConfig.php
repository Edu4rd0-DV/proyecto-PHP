<?php
//Datos de conexión al server
$dbHost ="localhost";
$user ="root";
$password="";//Solo si tiene configurada una.
$database="dbTrabaja";

//Conectar al server
$dbConnect = new mysqli($dbHost,$user,$password,$database);

//Mostrar mensaje en caso de error
if($dbConnect->connect_error){
	die("No se pudo conectar al servidor: ".$dbConnect->connect_error);
}
?>