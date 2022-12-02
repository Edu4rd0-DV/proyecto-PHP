<?php
//modelo empresa
class empresaData{
	//insert
	function insert($nombre,$fkRazonSocial,$telefono,$correo,$clave,$direccion){
		//datos de conexion al server
		include "../../../config/dbConfig.php";
		//entidad de la empresa
		include "../../../entidades/empresaEN.php";
		$empresa = new empresa();

		//Data de la empresa
		$empresa->nombre = $nombre;
		$empresa->fkRazonSocial = $fkRazonSocial;
		$empresa->telefono = $telefono;
		$empresa->correo = $correo;
		$empresa->clave = $clave;
		$empresa->direccion = $direccion;

		$sql = $dbConnect->query("
			insert into empresa(nombre,fkRazonSocial,telefono,correo,clave,direccion)
			values
			('".$empresa->nombre."',
			 '".$empresa->fkRazonSocial."',
			 '".$empresa->telefono."',
			 '".$empresa->correo."',
			 '".$empresa->clave."',
			 '".$empresa->direccion."');
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
	function update($id,$nombre,$fkRazonSocial,$telefono,$correo,$direccion){
		//datos de conexion al server
		include "../../../config/dbConfig.php";
		//entidad de la empresa
		include "../../../entidades/empresaEN.php";
		$empresa = new empresa();

		//Data de la empresa
		$empresa->id = $id;
		$empresa->nombre = $nombre;
		$empresa->fkRazonSocial = $fkRazonSocial;
		$empresa->telefono = $telefono;
		$empresa->correo = $correo;
		$empresa->direccion = $direccion;

		$sql = $dbConnect->query("
			update empresa set
			nombre = '".$empresa->nombre."',
			fkRazonSocial = '".$empresa->fkRazonSocial."',
			telefono = '".$empresa->telefono."',
			correo = '".$empresa->correo."',
			direccion = '".$empresa->direccion."'
			where id = '".$empresa->id."';
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
		//datos de conexion al server
		include "../../../config/dbConfig.php";
		//entidad de la empresa
		include "../../../entidades/empresaEN.php";
		$empresa = new empresa();

		//Data de la empresa
		$empresa->id = $id;

		$sql = $dbConnect->query("
			delete from empresa
			where id = '".$empresa->id."';
		");

		if($sql){
			return true;
		}
		else{
			return false;
		}
		mysqli_close($dbConnect);
	}

	//login
	function login($correo,$clave){
		//datos de conexion al server
		include "../../../config/dbConfig.php";
		//entidad de la empresa
		include "../../../entidades/empresaEN.php";
		$empresa = new empresa();

		//Data de la empresa
		$empresa->correo = $correo;
		$empresa->clave = $clave;

		$sql = $dbConnect->query("select * from empresa where correo ='".$empresa->correo."' and clave ='".$empresa->clave."'
			");
		$log = mysqli_fetch_array($sql);
		if($log>0){
			if($log["correo"]==$empresa->correo && $log["clave"]==$empresa->clave){
				session_start();
				$_SESSION["id"] = $log["id"];
				$_SESSION["correo"] = $log["correo"];
				return true;
			}
		}
		else{
			return false;
		}
		mysqli_close($dbConnect);
	}
}
?>