$(document).ready(start);

function start(){
	$('#btnLoginEmpresa').click(loginEmpresa);
	$('#btnAgregarEmpresa').click(agregarEmpresa);
	$('#btnActualizarEmpresa').click(actualizarEmpresa);
}

function agregarEmpresa(){
	//Definimos las variables
	var nombre = $('#nombre').val();
	var fkRazonSocial = $('#razonSocial').val();
	var telefono = $('#telefono').val();
	var correo = $('#correo').val();
	var clave = $('#reClave').val();
	var direccion = $('#direccion').val();

	$.ajax({
		url:"vistas/moduloEmpresa/phpActions/agregarEmpresa.php",
		success: function(resultado){
			if(resultado == "true"){
				document.location.href = "?app=loginEmpresa";
			}
			else if(resultado == "empty"){
				$.notify("Alerta! no dejes campos vacíos", "warn");
			}
			else{
				$.notify("Error! no se pudo agregar el registro", "error");
			}
		},
		data:{
			nombre:nombre,
			fkRazonSocial:fkRazonSocial,
			telefono:telefono,
			correo:correo,
			clave:clave,
			direccion:direccion
		},
		type:"POST"
	});
}

function loginEmpresa(){
	var correo = $('#email').val();
	var clave = $('#password').val();

	$.ajax({
		url:"vistas/moduloEmpresa/phpActions/logEmpresa.php",
		success: function(resultado){
			if(resultado == "true"){
				document.location.href="?app=dashboardEmpresa";
			}
			else if(resultado == "empty"){
				$.notify("Alerta! no dejes campos vacíos", "warn");
			}
			else{
				$.notify("Error! correo o clave incorrectas.", "error");
			}
		},
		data:{
			correo:correo,
			clave:clave
		},
		type:"POST"
	});
}

function actualizarEmpresa(){
	//Definimos las variables
	var id = $('#id').val();
	var nombre = $('#nombre').val();
	var fkRazonSocial = $('#razonSocial').val();
	var telefono = $('#telefono').val();
	var correo = $('#correo').val();
	var direccion = $('#direccion').val();

	$.ajax({
		url:"vistas/moduloEmpresa/phpActions/actualizarEmpresa.php",
		success: function(resultado){
			if(resultado == "true"){
				$.notify("Exito! se actualizó el registro", "success");
				document.location.href = "?app=dashboardEmpresa";
			}
			else if(resultado == "empty"){
				$.notify("Alerta! no dejes campos vacíos", "warn");
			}
			else{
				$.notify("Error! no se pudo agregar el registro", "error");
			}
		},
		data:{
			id:id,
			nombre:nombre,
			fkRazonSocial:fkRazonSocial,
			telefono:telefono,
			correo:correo,
			direccion:direccion
		},
		type:"POST"
	});
}