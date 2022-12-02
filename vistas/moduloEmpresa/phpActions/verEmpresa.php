<?php
//Incluimos el archivo dbConfig.php
include "config/dbConfig.php";


//Agregamos la consulta
$sql = $dbConnect->query("select 
	a.id,
	a.nombre, 
	a.fkRazonSocial, 
	b.nombre,
	a.telefono,
	a.correo,
	a.direccion
	from empresa a, razonsocial b
	where correo = '$correo' and a.fkRazonSocial = b.id");
?>