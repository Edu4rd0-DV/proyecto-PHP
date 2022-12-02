<?php
//Incluimos el archivo empresaController.php
include "../../../controlador/empresaController.php";

//Obtenemos los datos del formulario mediante el metodo POST, verificamos que los datos hayan sido correctamente definidos.
if(isset($_POST["id"]) ||
   isset($_POST["nombre"]) || //OR, verifica individual
   isset($_POST["fkRazonSocial"]) ||
   isset($_POST["telefono"]) ||
   isset($_POST["correo"]) ||
   isset($_POST["direccion"])){
   	//Verificamos que vengan campos vacíos y eliminamos espacios en blanco sobrantes.
	if(trim($_POST["id"]) == "" ||
	   trim($_POST["nombre"]) == "" ||
	   trim($_POST["fkRazonSocial"]) == "" ||
	   trim($_POST["telefono"]) == "" ||
	   trim($_POST["correo"]) == "" ||
	   trim($_POST["direccion"]) == ""){
		//Mandamos como respuesta "empty" a la funcion AJAX
		echo "empty";
	}
	else{
		$empresaController = new empresaController();
		//Mandamos los datos al controlador
		if($empresaController->update($_POST["id"],
									  $_POST["nombre"],
									  $_POST["fkRazonSocial"],
									  $_POST["telefono"],
									  $_POST["correo"],
									  $_POST["direccion"])){
			//Mandamos como respuesta "true" a la funcion AJAX
			session_start();
			$_SESSION["correo"] = $_POST["correo"];
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