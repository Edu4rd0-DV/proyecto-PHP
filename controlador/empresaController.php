<?php
//Controlador de empresa
class empresaController{
	//insert
	function insert($nombre,$fkRazonSocial,$telefono,$correo,$clave,$direccion){
		include "../../../modelo/empresaData.php";
		$obj = new empresaData();
		return $obj->insert($nombre,$fkRazonSocial,$telefono,$correo,$clave,$direccion);
	}

	//update
	function update($id,$nombre,$fkRazonSocial,$telefono,$correo,$direccion){
		include "../../../modelo/empresaData.php";
		$obj = new empresaData();
		return $obj->update($id,$nombre,$fkRazonSocial,$telefono,$correo,$direccion);
	}

	//delete
	function delete($id){
		include "../../../modelo/empresaData.php";
		$obj = new empresaData();
		return $obj->delete($id);
	}

	//login
	function login($correo,$clave){
		include "../../../modelo/empresaData.php";
		$obj = new empresaData();
		return $obj->login($correo,$clave);
	}
}
?>