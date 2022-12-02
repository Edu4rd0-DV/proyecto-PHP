<?php
//Incluimos el archivo empresaController.php
include "../../../controlador/ofertaController.php";

//Obtenemos los datos del formulario mediante el metodo POST, verificamos que los datos hayan sido correctamente definidos.
if(isset($_POST["id"]) || 
 //OR, verifica individual
   isset($_POST["nombreOfertas"]) ||
   isset($_POST["detalle"]) ||
   isset($_POST["edad"]) ||
   isset($_POST["fkTipoContrato"]) ||
   isset($_POST["vacantes"])||
   isset($_POST["salario"])||
   isset($_POST["experienciaLaboral"])||
   isset($_POST["fkNivelAcademico"])||
   isset($_POST["fkDepartamento"])||
   isset($_POST["fechaAplicacion"])||
   isset($_POST["estado"])
){
   	//Verificamos que vengan campos vacíos y eliminamos espacios en blanco sobrantes.
	if(trim($_POST["id"])==""||
                                            //OR, verifica individual
   trim($_POST["nombreOfertas"])=="" ||
   trim($_POST["detalle"])=="" ||
   trim($_POST["edad"])=="" ||
   trim($_POST["fkTipoContrato"])=="" ||
   trim($_POST["vacantes"])==""||
   trim($_POST["salario"])==""||
   trim($_POST["experienciaLaboral"])==""||
   trim($_POST["fkNivelAcademico"])==""||
   trim($_POST["fkDepartamento"])==""||
   trim($_POST["fechaAplicacion"])==""||
   trim($_POST["estado"])==""){
		//Mandamos como respuesta "empty" a la funcion AJAX
		echo "empty";
	}
	else{
		$ofertaController = new ofertaController();
		//Mandamos los datos al controlador
		if($ofertaController->update($_POST["id"],
									  $_POST["nombreOfertas"],
									  $_POST["detalle"],
									  $_POST["edad"],
									  $_POST["fkTipoContrato"],
									  $_POST["vacantes"],
									  $_POST["salario"],
									  $_POST["experienciaLaboral"],
									  $_POST["fkNivelAcademico"],
									  $_POST["fkDepartamento"],
									  $_POST["fechaAplicacion"],
									  $_POST["estado"]
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