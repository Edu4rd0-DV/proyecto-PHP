<?php
//Controlador de oferta
class ofertaController{
	//insert
	function insert($fkEmpresa,$nombreOferta,$detalle,$edad,$fkTipoContrato,$vacantes,$salario,$experienciaLaboral,$fkNivelAcademico,$fkDepartamento,$fechaAplicacion,$estado){
		include "../../../modelo/ofertaData.php";
		$obj = new ofertaData();
		return $obj->insert($fkEmpresa,$nombreOferta,$detalle,$edad,$fkTipoContrato,$vacantes,$salario,$experienciaLaboral,$fkNivelAcademico,$fkDepartamento,$fechaAplicacion,$estado);
	}
	//update
	function update($id,$nombreOferta,$detalle,$edad,$fkTipoContrato,$vacantes,$salario,$experienciaLaboral,$fkNivelAcademico,$fkDepartamento,$fechaAplicacion,$estado){
		include "../../../modelo/ofertaData.php";
		$obj = new ofertaData();
		return $obj->update($id,$nombreOferta,$detalle,$edad,$fkTipoContrato,$vacantes,$salario,$experienciaLaboral,$fkNivelAcademico,$fkDepartamento,$fechaAplicacion,$estado);
	}
	//delete
	function delete($id){
		include "../../../modelo/ofertaData.php";
	    $obj = new ofertaData();
		return $obj->delete($id);
	}
}
?>