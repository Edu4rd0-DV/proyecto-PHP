<?php
//Crear la función con la ejecutaremos la BD
function createDB(){
	//Incluimos el archivo dataLog.php
	include "dataLog.php";

	//Crear la consulta para enviar a ejecución.
	$sql = $dbConnect->query("create database dbTrabaja");
	if($sql){
		echo "<script>
		alert('Se creó la base de datos');
		window.location='tables.php';
		</script>";
	}
	else{
		echo "<script>alert('No se creó la base de datos');</script>";
	}
	mysqli_close($dbConnect);
}
//Ejecutar la función
createDB();
?>