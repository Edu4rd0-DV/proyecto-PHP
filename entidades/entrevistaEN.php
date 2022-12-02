<?php
//Entidad entrevista
class entrevista{
	public $id;
	function get_id(){
		return $this->id;
	}
	function set_id(){
		return $this->id = $id;
	}

	public $fkPostulante;
	function get_fkPostulante(){
		return $this->fkPostulante;
	}
	function set_fkPostulante(){
		return $this->fkPostulante = $fkPostulante;
	}

	public $fechaEntrevista;
	function get_fechaEntrevista(){
		return $this->fechaEntrevista;
	}
	function set_fechaEntrevista(){
		return $this->fechaEntrevista = $fechaEntrevista;
	}

	public $horaEntrevista;
	function get_horaEntrevista(){
		return $this->horaEntrevista;
	}
	function set_horaEntrevista(){
		return $this->horaEntrevista = $horaEntrevista;
	}
}
?>