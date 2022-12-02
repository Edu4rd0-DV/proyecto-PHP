<?php
//Controlador de usuario
class usuarioController{
	//insert
	function insert($nombre,$apellido,$fechaNac,$fkSexo,$dui,$telefono,$fkNivelAcademico,$fkDepartamento,$correo,$clave){
		include "../../../modelo/usuarioData.php";
		$obj = new usuarioData();
		return $obj->insert($nombre,$apellido,$fechaNac,$fkSexo,$dui,$telefono,$fkNivelAcademico,$fkDepartamento,$correo,$clave);
	}

	//update
	function update($id,$nombre,$apellido,$fechaNac,$fkSexo,$dui,$telefono,$fkNivelAcademico,$fkDepartamento,$correo,$clave){
		include "../../../modelo/usuarioData.php";
		$obj = new usuarioData();
		return $obj->update($id,$nombre,$apellido,$fechaNac,$fkSexo,$dui,$telefono,$fkNivelAcademico,$fkDepartamento,$correo,$clave);
	}

	//delete
	function delete($id){
		include "../../../modelo/usuarioData.php";
		$obj = new usuarioData();
		return $obj->delete($id);
	}

	//login
	function login($correo,$clave){
		include "../../../modelo/usuarioData.php";
		$obj = new usuarioData();
		return $obj->login($correo,$clave);
	}
}
?>