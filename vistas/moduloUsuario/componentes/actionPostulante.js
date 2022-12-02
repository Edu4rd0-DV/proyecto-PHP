$(document).ready(start);

function start(){
	$('#btnLoginPostulante').click(loginPostulante);
	$('#btnAgregarPostulante').click(agregarPostulantes);
	
}

function agregarPostulantes(){
  
  	var nombre = $('#nombrePostulante').val();
	var apellido = $('#apellidoPostulante').val();
	var fechaNac = $('#fechaNacimiento').val();
	var fkSexo = $('#sexo').val();
	var dui = $('#dui').val();
	var telefono = $('#telefono').val();
    var fkNivelAcademico = $('#nivelAcademico').val();
    var fkDepartamento = $('#departamento').val();
    var correo = $('#correo').val();
    var clave = $('#reClave').val();
	$.ajax({
		url:"vistas/moduloUsuario/phpActions/agregarPostulante.php",
		success: function(resultado){
			if(resultado == "true"){

				document.location.href = "?app=loginPostulante";
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
			apellido:apellido,
			fechaNac:fechaNac,
			fkSexo:fkSexo,
			dui:dui,
			telefono:telefono,
			fkNivelAcademico:fkNivelAcademico,
			fkDepartamento:fkDepartamento,
			correo:correo,
			clave:clave
		},
		type:"POST"
	});

}

function loginPostulante(){
	var correo = $('#email').val();
	var clave = $('#password').val();

	$.ajax({
		url:"vistas/moduloUsuario/phpActions/logPostulante.php",
		success: function(resultado){
			if(resultado == "true"){

		         document.location.href = "?menu=ofertas";
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

