<?php
//Incluimos el archivo dbConfig.php
include "config/dbConfig.php";


//Agregamos la consulta
$sql = $dbConnect->query("select 
	a.id,
	a.fkEmpresa,
	b.nombre,
	a.nombreOferta,
	a.detalle,
	a.edad,
	a.fkTipoContrato,
	c.nombre,
	a.vacantes,
	a.salario,
	a.experienciaLaboral,
	a.fkNivelAcademico,
	d.nombre,
	a.fkDepartamento,
	e.nombre,
	a.fechaAplicacion,
	a.estado
	from oferta a, 
		 empresa b,
		 tipoContrato c,
		 nivelAcademico d,
		 departamento e
	where a.fkEmpresa = '$id' and 
		  a.fkEmpresa = b.id and
		  a.fkTipoContrato = c.id and
		  a.fkNivelAcademico = d.id and
		  a.fkDepartamento = e.id");


$sql2 = $dbConnect->query("select 
	a.id,
	a.fkEmpresa,
	b.nombre,
	a.nombreOferta,
	a.detalle,
	a.edad,
	a.fkTipoContrato,
	c.nombre,
	a.vacantes,
	a.salario,
	a.experienciaLaboral,
	a.fkNivelAcademico,
	d.nombre,
	a.fkDepartamento,
	e.nombre,
	a.fechaAplicacion,
	a.estado
	from oferta a, 
		 empresa b,
		 tipoContrato c,
		 nivelAcademico d,
		 departamento e
	where a.id = '$id2' and 
		  a.fkEmpresa = b.id and
		  a.fkTipoContrato = c.id and
		  a.fkNivelAcademico = d.id and
		  a.fkDepartamento = e.id");

?>