<?php
//Controlador de razon social
class razonSocialController{
	//Incluimos el archivo razonSocialData.php
	include "../modelo/razonSocialData.php";

	//insert
	function insert($nombre){
		$obj = new razonSocialData();
		return $obj->insert($nombre);
	}

	//update
	function update($id,$nombre){
		$obj = new razonSocialData();
		return $obj->update($id,$nombre);
	}

	//delete
	function delete($id){
		$obj = new razonSocialData();
		return $obj->delete($id);
	}
}
?>