<?php
//creamos la función con la cual mandaremos a ejecución las tablas
function tablesDB(){
	//Incluimos el archivo dbConfig.php
	include "../dbConfig.php";

	//Creamos la tablas
	$tbRazonSocial = $dbConnect->query("
		create table razonSocial(
			id int not null auto_increment,
			nombre varchar(80) not null,
			primary key(id)
		)
	");

	$tbEmpresa = $dbConnect->query("
		create table empresa(
			id bigint not null auto_increment,
			nombre nvarchar(80) not null,
			fkRazonSocial int not null,
			telefono nvarchar(20) not null,
			correo nvarchar(50) not null,
			clave nvarchar(150) not null,
			direccion nvarchar(150) not null,
			foreign key(fkRazonSocial) references razonSocial(id) on delete cascade on update no action,
			primary key(id)
		)
	");

	$tbTipoContrato = $dbConnect->query("
		create table tipoContrato(
			id int not null auto_increment,
			nombre varchar(50) not null,
			primary key(id)
		)
	");

	$tbDepartamento = $dbConnect->query("
		create table departamento(
			id int not null auto_increment,
			nombre varchar(50) not null,
			primary key(id)
		)
	");

	$tbNivelAcademico = $dbConnect->query("
		create table nivelAcademico(
			id int not null auto_increment,
			nombre varchar(50) not null,
			primary key(id)
		)
	");

	$tbOferta = $dbConnect->query("
		create table oferta(
			id bigint not null auto_increment,
			fkEmpresa bigint not null,
			nombreOferta varchar(50) not null,
			detalle varchar(150) not null,
			edad varchar(10) not null,
			fkTipoContrato int not null,
			vacantes int not null,
			salario decimal(9,2) not null,
			experienciaLaboral varchar(50) not null,
			fkNivelAcademico int not null,
			fkDepartamento int not null,
			fechaAplicacion date not null,
			estado int not null,
			foreign key(fkEmpresa) references empresa(id) on delete cascade on update no action,
			foreign key(fkTipoContrato) references tipoContrato(id) on delete cascade on update no action,
			foreign key(fkNivelAcademico) references nivelAcademico(id) on delete cascade on update no action,
			foreign key(fkDepartamento) references departamento(id) on delete cascade on update no action,
			primary key(id)
		)
	");

	$tbSexo = $dbConnect->query("
		create table sexo(
			id int not null auto_increment,
			nombre varchar(25) not null,
			primary key(id)
		)
	");

	$tbUsuario = $dbConnect->query("
		create table usuario(
			id bigint not null auto_increment,
			nombre varchar(50) not null,
			apellido varchar(50) not null,
			fechaNac date not null,
			fkSexo int not null,
			dui varchar(20) not null,
			telefono nvarchar(20) not null,
			fkNivelAcademico int not null,
			fkDepartamento int not null,
			correo nvarchar(50) not null,
			clave nvarchar(150) not null,
			foreign key(fkSexo) references sexo(id) on delete cascade on update no action,
			foreign key(fkNivelAcademico) references nivelAcademico(id) on delete cascade on update no action,
			foreign key(fkDepartamento) references departamento(id) on delete cascade on update no action,
			primary key(id)
		)
	");

	$tbPostulante = $dbConnect->query("
		create table postulante(
			id bigint not null auto_increment,
			fkOferta bigint not null,
			fkUsuario bigint not null,
			fechaPostulacion date not null,
			competente int not null,
			foreign key(fkOferta) references oferta(id) on delete cascade on update no action,
			foreign key(fkUsuario) references usuario(id) on delete cascade on update no action,
			primary key(id)
		)
	");

	$tbEntrevista = $dbConnect->query("
		create table entrevista(
			id bigint not null auto_increment,
			fkPostulante bigint not null,
			fechaEntrevista date not null,
			horaEntrevista varchar(20) not null,
			foreign key(fkPostulante) references postulante(id) on delete cascade on update no action,
			primary key(id)
		)
	");

	//Verificar que las tablas se crearon
	if($tbRazonSocial &&
	   $tbEmpresa &&
	   $tbTipoContrato &&
	   $tbDepartamento &&
	   $tbNivelAcademico &&
       $tbOferta &&
       $tbSexo &&
       $tbUsuario &&
       $tbPostulante &&
       $tbEntrevista){
		echo "<script>alert('Se crearon la tablas.');
		window.location='../../?menu=main';
		</script>";
	}
	else{
		echo "<h2>No se crearon las tablas</h2>";
	}
}
//Ejecutamos la función para crear la tablas
tablesDB();
?>