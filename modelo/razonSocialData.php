<?php
//modelo razon social
class razonSocialData{
	//datos de conexion al server
	include "../config/dbConfig.php";
	//entidad de la razon social
	include "../entidades/razonSocialEN.php";
	//insert
	function insert($nombre){
		$razonSocial = new razonSocial();

		//Data de razon social
		$razonSocial->nombre = $nombre;

		$sql = $dbConnect->query("
			insert into razonSocial(nombre)
			values
			('".$razonSocial->nombre."');
		");

		if($sql){
			return true;
		}
		else{
			return false;
		}
		mysqli_close($dbConnect);
	}

	//update
	function update($id,$nombre){
		$razonSocial = new razonSocial();

		//Data de razon social
		$razonSocial->id = $id;
		$razonSocial->nombre = $nombre;

		$sql = $dbConnect->query("
			update razonSocial set
			nombre = '".$razonSocial->nombre."'
			where id = '".$razonSocial->id."';
		");

		if($sql){
			return true;
		}
		else{
			return false;
		}
		mysqli_close($dbConnect);
	}

	//delete
	function delete($id){
		$razonSocial = new razonSocial();

		//Data de razon social
		$razonSocial->id = $id;

		$sql = $dbConnect->query("
			delete from razonSocial
			where id = '".$razonSocial->id."';
		");

		if($sql){
			return true;
		}
		else{
			return false;
		}
		mysqli_close($dbConnect);
	}
}
?>