<?php
//Incluimos el archivo empresaController.php
include "../../../controlador/empresaController.php";

//Obtenemos los datos del formulario mediante el metodo POST, verificamos que los datos hayan sido correctamente definidos.
if(isset($_POST["correo"]) || isset($_POST["clave"])){
   	//Verificamos que vengan campos vacíos y eliminamos espacios en blanco sobrantes.
	if(trim($_POST["correo"]) == "" ||
	   trim($_POST["clave"]) == ""){
		//Mandamos como respuesta "empty" a la funcion AJAX
		echo "empty";
	}
	else{
		$empresaController = new empresaController();
		//Mandamos los datos al controlador
		if($empresaController->login( $_POST["correo"],
									  $_POST["clave"])){
			//Mandamos como respuesta "true" a la funcion AJAX			
			echo "true";
		}
		else{
			//Mandamos como respuesta "false" a la funcion AJAX
			echo "false";
		}
	}
}
else{
	//Mandamos como respuesta "false" a la funcion AJAX
	echo "false";
}
?>