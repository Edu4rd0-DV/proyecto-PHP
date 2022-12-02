<?php
//incluimos el archivo ofertaController.php
include "../../../controlador/ofertaController.php";

//Obtenemos los datos del formulario mediante el método POST, verificamos que los datos hayan sido correctamente definidos.
if(isset($_POST["fkEmpresa"]) ||
   isset($_POST["nombreOferta"]) ||
   isset($_POST["detalle"]) ||
   isset($_POST["edad"]) ||
   isset($_POST["fkTipoContrato"]) ||
   isset($_POST["vacantes"]) ||
   isset($_POST["salario"]) ||
   isset($_POST["experienciaLaboral"]) ||
   isset($_POST["fkNivelAcademico"]) ||
   isset($_POST["fkDepartamento"]) ||
   isset($_POST["fechaAplicacion"]) ||
   isset($_POST["estado"])){
	//verificamos que no vengan campos vacios y eliminamos espacios en blanco sobrantes.
	if(trim($_POST["fkEmpresa"]) == "" ||
   	   trim($_POST["nombreOferta"]) == "" ||
   	   trim($_POST["detalle"]) == "" ||
       trim($_POST["edad"]) == "" ||
       trim($_POST["fkTipoContrato"]) == "" ||
       trim($_POST["vacantes"]) == "" ||
       trim($_POST["salario"]) == "" ||
       trim($_POST["experienciaLaboral"]) == "" ||
       trim($_POST["fkNivelAcademico"]) == "" ||
       trim($_POST["fkDepartamento"]) == "" ||
       trim($_POST["fechaAplicacion"]) == "" ||
       trim($_POST["estado"]) == ""){
		//mandamos como respuesta "empty" a la función AJAX
		echo "empty";
	}
	else{
		$ofertaController = new ofertaController();
		//mandamos los datos al controlador
		if($ofertaController->insert(
							  $_POST["fkEmpresa"],
   							  $_POST["nombreOferta"],
   							  $_POST["detalle"],
   							  $_POST["edad"],
   							  $_POST["fkTipoContrato"],
   							  $_POST["vacantes"],
   							  $_POST["salario"],
   							  $_POST["experienciaLaboral"],
   							  $_POST["fkNivelAcademico"],
   							  $_POST["fkDepartamento"],
   							  $_POST["fechaAplicacion"],
   							  $_POST["estado"])){
			//mandamos como respuesta "true" a la funcion AJAX
			echo "true";
		}
		else{
			//mandamos como respuesta "false" a la funcion AJAX
			echo "false";
		}
	}
}
else{
	//mandamos como respues "false" a la funcion AJAX
	echo "false";
}
?>