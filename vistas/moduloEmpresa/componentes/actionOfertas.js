$(document).ready(start);

function start(){
	$('#btnaddOferta').click(agregarOferta);
	$('#btnActualizarOferta').click(actualizarOferta);
	$('#btnEliminarOferta').click(eliminarOferta);
}

function agregarOferta(){
	//Definimos las variables
	var fkEmpresa = $('#id').val();
	var nombreOferta = $('#oferta').val();
	var detalle = $('#detalle').val();
	var edad = $('#edad').val();
	var fkTipoContrato = $('#tipoContrato').val();
	var vacantes = $('#vacantes').val();
	var salario = $('#salario').val();
	var experienciaLaboral = $('#experiencia').val();
	var fkNivelAcademico = $('#nivelAcademico').val();
	var fkDepartamento = $('#departamento').val();
	var fechaAplicacion = $('#fecha').val();
	var estado = $('#estado').val();

	$.ajax({
		url:"vistas/moduloEmpresa/phpActions/agregarOferta.php",
		success: function(resultado){
			if(resultado == "true"){
				document.location.href="?app=viewOfertas";
			}
			else if(resultado == "empty"){
				$.notify("Alerta! no dejes campos vacíos", "warn");
			}
			else{
				$.notify("Error! no se pudo agregar el registro", "error");
			}
		},
		data:{
			fkEmpresa:fkEmpresa,
			nombreOferta:nombreOferta,
			detalle:detalle,
			edad:edad,
			fkTipoContrato:fkTipoContrato,
			vacantes:vacantes,
			salario:salario,
			experienciaLaboral:experienciaLaboral,
			fkNivelAcademico:fkNivelAcademico,
			fkDepartamento:fkDepartamento,
			fechaAplicacion:fechaAplicacion,
			estado:estado
		},
		type:"POST"
	});
}

function actualizarOferta(){

	var id = $('#id_oferta').val();
	var nombreOfertas = $('#oferta').val();
	var detalle = $('#detalle').val();
	var edad = $('#edad').val();
	var fkTipoContrato = $('#tipoContrato').val();
	var vacantes = $('#vacantes').val();
	var salario = $('#salario').val();
	var experienciaLaboral = $('#experiencia').val();
	var fkNivelAcademico = $('#nivelAcademico').val();
	var fkDepartamento = $('#departamento').val();
	var fechaAplicacion = $('#fecha').val();
	var estado = $('#estado').val();

	$.ajax({
		url:"vistas/moduloEmpresa/phpActions/actualizarOfertas.php",
		success: function(resultado){

			if(resultado == "true"){

				document.location.href="?app=dashboardEmpresa";
			}
			else if(resultado == "empty"){

				$.notify("Alerta! no dejes campos vacíos", "warn");
			}
			else{
				$.notify("Error! no se pudo Actualizar el registro", "error");
			}
		},
		data:{
			id:id,
			nombreOfertas:nombreOfertas,
			detalle:detalle,
			edad:edad,
			fkTipoContrato:fkTipoContrato,
			vacantes:vacantes,
			salario:salario,
			experienciaLaboral:experienciaLaboral,
			fkNivelAcademico:fkNivelAcademico,
			fkDepartamento:fkDepartamento,
			fechaAplicacion:fechaAplicacion,
			estado:estado
		},
		type:"POST"
	});
}


function eliminarOferta(){

	var id = $('#id_oferta').val();


	$.ajax({
		url:"vistas/moduloEmpresa/phpActions/eliminarOferta.php",
		success: function(resultado){

			if(resultado == "true"){

				document.location.href="?app=dashboardEmpresa";
			}
			else if(resultado == "empty"){

				$.notify("Alerta! no dejes campos vacíos", "warn");
			}
			else{
				$.notify("Error! no se pudo agregar el registro", "error");
			}
		},
		data:{
			id:id
		
		},
		type:"POST"
	});
}