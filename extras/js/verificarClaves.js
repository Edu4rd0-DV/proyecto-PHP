function viewClave(){
	//Esto verifica que las claves coincidan
	document.getElementById('reClave').onblur = 
	function(){
		verificarClaves();
	}
}

function verificarClaves(){
	if(document.getElementById('clave').value == 
	   document.getElementById('reClave').value){
		$('#btnAgregarEmpresa').removeClass('disabled');
		$('#btnagregarPostulante').removeClass('disabled');
		$('#reClave').notify("Las claves coinciden!","success");
	}
	else if(document.getElementById('clave').value == "" || 
	   document.getElementById('reClave').value == ""){
		$('#btnAgregarEmpresa').addClass('disabled');
		$('#btnagregarPostulante').addClass('disabled');
		$('#reClave').notify("No pueden quedar campos vacíos!","warn");
	}
	else{
		$('#btnAgregarEmpresa').addClass('disabled');
		$('#btnagregarPostulante').addClass('disabled');
		$('#reClave').notify("Error! las claves no coinciden!","error");l
	}
}

viewClave();