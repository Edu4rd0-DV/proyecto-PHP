<?php
//Entidad empresa
class empresa{
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

	public $fkRazonSocial;
	function get_fkRazonSocial(){
		return $this->fkRazonSocial;
	}
	function set_fkRazonSocial(){
		return $this->fkRazonSocial = $fkRazonSocial;
	}

	public $telefono;
	function get_telefono(){
		return $this->telefono;
	}
	function set_telefono(){
		return $this->telefono = $telefono;
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

	public $direccion;
	function get_direccion(){
		return $this->direccion;
	}
	function set_direccion(){
		return $this->direccion = $direccion;
	}
}

?>