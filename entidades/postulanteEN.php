<?php
//Entidad postulante
class postulante{
	public $id;
	function get_id(){
		return $this->id;
	}
	function set_id(){
		return $this->id = $id;
	}

	public $fkOferta;
	function get_fkOferta(){
		return $this->fkOferta;
	}
	function set_fkOferta(){
		return $this->fkOferta = $fkOferta;
	}

	public $fkUsuario;
	function get_fkUsuario(){
		return $this->fkUsuario;
	}
	function set_fkUsuario(){
		return $this->fkUsuario = $fkUsuario;
	}

	public $fechaPostulacion;
	function get_fechaPostulacion(){
		return $this->fechaPostulacion;
	}
	function set_fechaPostulacion(){
		return $this->fechaPostulacion = $fechaPostulacion;
	}

	public $competente;
	function get_competente(){
		return $this->competente;
	}
	function set_competente(){
		return $this->competente = $competente;
	}
}

?>