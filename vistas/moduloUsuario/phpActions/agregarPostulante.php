<?php
//Incluimos el archivo empresaController.php
include "../../../controlador/usuarioController.php";

//Obtenemos los datos del formulario mediante el metodo POST, verificamos que los datos hayan sido correctamente definidos.
if(isset($_POST["nombre"]) || //OR, verifica individual
   isset($_POST["apellido"]) ||
   isset($_POST["fechaNac"]) ||
   isset($_POST["fkSexo"]) ||
   isset($_POST["dui"]) ||
   isset($_POST["telefono"])||
   isset($_POST["fkNivelAcademico"])||
   isset($_POST["fkDepartamento"])||
   isset($_POST["correo"])||
   isset($_POST["clave"])){
   	//Verificamos que vengan campos vacíos y eliminamos espacios en blanco sobrantes.
	if(trim($_POST["nombre"]) == "" ||
	  trim($_POST["apellido"]) == "" ||
	   trim($_POST["fechaNac"]) == "" ||
	   trim($_POST["fkSexo"]) == "" ||
	   trim($_POST["dui"]) == "" ||
	   trim($_POST["telefono"]) == "" ||
	   trim($_POST["fkNivelAcademico"]) == "" ||
	   trim($_POST["fkDepartamento"]) == "" ||
	   trim($_POST["correo"]) == "" ||
       trim($_POST["clave"]) == "" ){
		//Mandamos como respuesta "empty" a la funcion AJAX
		echo "empty";
	}
	else{
		$usuarioController = new usuarioController();
		//Mandamos los datos al controlador
		if($usuarioController->insert($_POST["nombre"],
									  $_POST["apellido"],
									  $_POST["fechaNac"],
									  $_POST["fkSexo"],
									  $_POST["dui"],
									  $_POST["telefono"],
									  $_POST["fkNivelAcademico"],
									  $_POST["fkDepartamento"],
                                      $_POST["correo"],
                                      $_POST["clave"]
									   )){
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