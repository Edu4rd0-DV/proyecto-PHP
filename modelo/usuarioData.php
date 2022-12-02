<?php
//modelo usuario
class usuarioData{
	//insert
	function insert($nombre,$apellido,$fechaNac,$fkSexo,$dui,$telefono,$fkNivelAcademico,$fkDepartamento,$correo,$clave){
		//datos de conexion al server
		include "../../../config/dbConfig.php";
		//entidad de la usuario
		include "../../../entidades/usuarioEN.php";
		$usuario = new usuario();

		//Data de la usuario
		$usuario->nombre = $nombre;
		$usuario->apellido = $apellido;
		$usuario->fechaNac = $fechaNac;
		$usuario->fkSexo = $fkSexo;
		$usuario->dui = $dui;
		$usuario->telefono = $telefono;
		$usuario->fkNivelAcademico = $fkNivelAcademico;
		$usuario->fkDepartamento = $fkDepartamento;
		$usuario->correo = $correo;
		$usuario->clave = $clave;

		$sql = $dbConnect->query("
			insert into usuario(nombre,apellido,fechaNac,fkSexo,dui,telefono,fkNivelAcademico,fkDepartamento,correo,clave)
			values
			('".$usuario->nombre."',
			 '".$usuario->apellido."',
			 '".$usuario->fechaNac."',
			 '".$usuario->fkSexo."',
			 '".$usuario->dui."',
			 '".$usuario->telefono."',
			 '".$usuario->fkNivelAcademico."',
			 '".$usuario->fkDepartamento."',
			 '".$usuario->correo."',
			 '".$usuario->clave."');
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
	function update($id,$nombre,$apellido,$fechaNac,$fkSexo,$dui,$telefono,$fkNivelAcademico,$fkDepartamento,$correo,$clave){
		//datos de conexion al server
		include "../../../config/dbConfig.php";
		//entidad de la usuario
		include "../../../entidades/usuarioEN.php";
		$usuario = new usuario();

		//Data de la usuario
		$usuario->id = $id;
		$usuario->nombre = $nombre;
		$usuario->apellido = $apellido;
		$usuario->fechaNac = $fechaNac;
		$usuario->fkSexo = $fkSexo;
		$usuario->dui = $dui;
		$usuario->telefono = $telefono;
		$usuario->fkNivelAcademico = $fkNivelAcademico;
		$usuario->fkDepartamento = $fkDepartamento;
		$usuario->correo = $correo;
		$usuario->clave = $clave;

		$sql = $dbConnect->query("
			update usuario set
			nombre = '".$usuario->nombre."',
			apellido = '".$usuario->apellido."',
			fechaNac = '".$usuario->fechaNac."',
			fkSexo = '".$usuario->fkSexo."',
			dui = '".$usuario->dui."',
			telefono = '".$usuario->telefono."',
			fkNivelAcademico = '".$usuario->fkNivelAcademico."',
			fkDepartamento = '".$usuario->fkDepartamento."',
			correo = '".$usuario->correo."',
			clave = '".$usuario->clave."'
			where id = '".$usuario->id."';
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
		//entidad de la usuario
		include "../../../entidades/usuarioEN.php";
		$usuario = new usuario();

		//Data de la usuario
		$usuario->id = $id;

		$sql = $dbConnect->query("
			delete from usuario
			where id = '".$usuario->id."';
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
		//entidad de la usuario
		include "../../../entidades/usuarioEN.php";
		$usuario = new usuario();

		//Data de la usuario
		$usuario->correo = $correo;
		$usuario->clave = $clave;

		$sql = $dbConnect->query("select * from usuario where correo ='".$usuario->correo."' and clave ='".$usuario->clave."'
			");
		$log = mysqli_fetch_array($sql);
		if($log>0){
			if($log["correo"]==$usuario->correo && $log["clave"]==$usuario->clave){
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