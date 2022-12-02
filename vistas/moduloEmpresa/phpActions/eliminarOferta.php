<?php
//Incluimos el archivo empresaController.php
include "../../../controlador/ofertaController.php";

//Obtenemos los datos del formulario mediante el metodo POST, verificamos que los datos hayan sido correctamente definidos.
if(isset($_POST["id"]) 
){
   	//Verificamos que vengan campos vacíos y eliminamos espacios en blanco sobrantes.
	if(trim($_POST["id"]) == ""){
		//Mandamos como respuesta "empty" a la funcion AJAX
		echo "empty";
	}
	else{
		$ofertaController = new ofertaController();
		//Mandamos los datos al controlador
		if($ofertaController->delete($_POST["id"])){
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