<?php
//modelo de oferta
class ofertaData{
	//insert
	function insert($fkEmpresa,$nombreOferta,$detalle,$edad,$fkTipoContrato,$vacantes,$salario,$experienciaLaboral,$fkNivelAcademico,$fkDepartamento,$fechaAplicacion,$estado){
		//datos de conexion al server
		include "../../../config/dbConfig.php";
		//entidad de la empresa
		include "../../../entidades/ofertaEN.php";
		$oferta = new oferta(); 

		//Data de la oferta
		$oferta->fkEmpresa = $fkEmpresa;
		$oferta->nombreOferta = $nombreOferta;
		$oferta->detalle = $detalle;
		$oferta->edad = $edad;
		$oferta->fkTipoContrato = $fkTipoContrato;
		$oferta->vacantes = $vacantes;
		$oferta->salario = $salario;
		$oferta->experienciaLaboral = $experienciaLaboral;
		$oferta->fkNivelAcademico = $fkNivelAcademico;
		$oferta->fkDepartamento = $fkDepartamento;
		$oferta->fechaAplicacion = $fechaAplicacion;
		$oferta->estado = $estado;

		$sql = $dbConnect->query("insert into oferta(
		fkEmpresa,
		nombreOferta,
		detalle,
		edad,
		fkTipoContrato,
		vacantes,
		salario,
		experienciaLaboral,
		fkNivelAcademico,
		fkDepartamento,
		fechaAplicacion,
		estado
		)values(
		'".$oferta->fkEmpresa."',
		'".$oferta->nombreOferta."',
		'".$oferta->detalle."',
		'".$oferta->edad."',
		'".$oferta->fkTipoContrato."',
		'".$oferta->vacantes."',
		'".$oferta->salario."',
		'".$oferta->experienciaLaboral."',
		'".$oferta->fkNivelAcademico."',
		'".$oferta->fkDepartamento."',
		'".$oferta->fechaAplicacion."',
		'".$oferta->estado."');
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
	function update($id,$nombreOferta,$detalle,$edad,$fkTipoContrato,$vacantes,$salario,$experienciaLaboral,$fkNivelAcademico,$fkDepartamento,$fechaAplicacion,$estado){
		//datos de conexion al server
		include "../../../config/dbConfig.php";
		//entidad de la empresa
		include "../../../entidades/ofertaEN.php";
		$oferta = new oferta(); 

		//Data de la oferta
		$oferta->id = $id;
		$oferta->nombreOferta = $nombreOferta;
		$oferta->detalle = $detalle;
		$oferta->edad = $edad;
		$oferta->fkTipoContrato = $fkTipoContrato;
		$oferta->vacantes = $vacantes;
		$oferta->salario = $salario;
		$oferta->experienciaLaboral = $experienciaLaboral;
		$oferta->fkNivelAcademico = $fkNivelAcademico;
		$oferta->fkDepartamento = $fkDepartamento;
		$oferta->fechaAplicacion = $fechaAplicacion;
		$oferta->estado = $estado;

		$sql = $dbConnect->query("update oferta set
		nombreOferta = '".$oferta->nombreOferta."',
		detalle = '".$oferta->detalle."',
		edad = '".$oferta->edad."',
		fkTipoContrato = '".$oferta->fkTipoContrato."',
		vacantes = '".$oferta->vacantes."',
		salario = '".$oferta->salario."',
		experienciaLaboral = '".$oferta->experienciaLaboral."',
		fkNivelAcademico = '".$oferta->fkNivelAcademico."',
		fkDepartamento = '".$oferta->fkDepartamento."',
		fechaAplicacion = '".$oferta->fechaAplicacion."',
		estado = '".$oferta->estado."'
		where id = '".$oferta->id."';
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
		include "../../../entidades/ofertaEN.php";
		$oferta = new oferta(); 

		//Data de la oferta
		$oferta->id = $id;

		$sql = $dbConnect->query("delete from oferta
		where id = '".$oferta->id."';
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