<?php
//Entidad usuario
class usuario{
	public $id;
	function get_id(){
		return $this->id;
	}
	function set_id(){
		return $this->id = $id;
	}

	public $nombre;
	function get_nombre(){
		return $this->nombre;
	}
	function set_nombre(){
		return $this->nombre = $nombre;
	}

	public $apellido;
	function get_apellido(){
		return $this->apellido;
	}
	function set_apellido(){
		return $this->apellido = $apellido;
	}

	public $fechaNac;
	function get_fechaNac(){
		return $this->fechaNac;
	}
	function set_fechaNac(){
		return $this->fechaNac = $fechaNac;
	}

	public $fkSexo;
	function get_fkSexo(){
		return $this->fkSexo;
	}
	function set_fkSexo(){
		return $this->fkSexo = $fkSexo;
	}

	public $dui;
	function get_dui(){
		return $this->dui;
	}
	function set_dui(){
		return $this->dui = $dui;
	}

	public $telefono;
	function get_telefono(){
		return $this->telefono;
	}
	function set_telefono(){
		return $this->telefono = $telefono;
	}

	public $fkNivelAcademico;
	function get_fkNivelAcademico(){
		return $this->fkNivelAcademico;
	}
	function set_fkNivelAcademico(){
		return $this->fkNivelAcademico = $fkNivelAcademico;
	}

	public $fkDepartamento;
	function get_fkDepartamento(){
		return $this->fkDepartamento;
	}
	function set_fkDepartamento(){
		return $this->fkDepartamento = $fkDepartamento;
	}

	public $correo;
	function get_correo(){
		return $this->correo;
	}
	function set_correo(){
		return $this->correo = $correo;
	}

	public $clave;
	function get_clave(){
		return $this->clave;
	}
	function set_clave(){
		return $this->clave = $clave;
	}
}

?>