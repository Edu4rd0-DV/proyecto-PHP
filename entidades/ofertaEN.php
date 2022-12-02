<?php
class oferta{
	public $id;
	function get_id(){
		return $this->id;
	}
	function set_id(){
		return $this->id = $id;
	}
	public $fkEmpresa;
	function get_fkEmpresa(){
		return $this->fkEmpresa;
	}
	function set_fkEmpresa(){
		return $this->fkEmpresa = $fkEmpresa;
	}
	public $nombreOferta;
	function get_nombreOferta(){
		return $this->nombreOferta;
	}
	function set_nombreOferta(){
		return $this->nombreOferta = $nombreOferta;
	}
	public $detalle;
	function get_detalle(){
		return $this->detalle;
	}
	function set_detalle(){
		return $this->detalle = $detalle;
	}
	public $edad;
	function get_edad(){
		return $this->edad;
	}
	function set_edad(){
		return $this->edad = $edad;
	}
	public $fkTipoContrato;
	function get_fkTipoContrato(){
		return $this->fkTipoContrato;
	}
	function set_fkTipoContrato(){
		return $this->fkTipoContrato = $fkTipoContrato;
	}
	public $vacantes;
	function get_vacantes(){
		return $this->vacantes;
	}
	function set_vacantes(){
		return $this->vacantes = $vacantes;
	}
	public $salario;
	function get_salario(){
		return $this->salario;
	}
	function set_salario(){
		return $this->salario = $salario;
	}
	public $experienciaLaboral;
	function get_experienciaLaboral(){
		return $this->experienciaLaboral;
	}
	function set_experienciaLaboral(){
		return $this->experienciaLaboral = $experienciaLaboral;
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
	public $fechaAplicacion;
	function get_fechaAplicacion(){
		return $this->fechaAplicacion;
	}
	function set_fechaAplicacion(){
		return $this->fechaAplicacion = $fechaAplicacion;
	}
	public $estado;
	function get_estado(){
		return $this->estado;
	}
	function set_estado(){
		return $this->estado = $estado;
	}
}
?>