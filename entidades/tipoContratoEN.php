<?php
//Entidad tipoContrato
class tipoContrato{
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
}
?>