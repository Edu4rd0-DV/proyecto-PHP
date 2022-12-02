<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bolsa de trabajo - Trabaja</title>
	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="extras/css/materialize.min.css"  media="screen,projection"/>
    <!--My style-->
    <link rel="stylesheet" type="text/css" href="extras/css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<header>
		<?php
			//Carga el archivo que contiene el menú
			require_once('header.php');
		?>
	</header>
	<section>
		<?php
			//Carga el archivo routing.php que se encarga de redireccionar al archivo seleccionado.
			require_once('routing.php');
		?>
	</section>
	<footer>
		<?php
			//Carga el archivo que contiene el footer
			require_once('footer.php');
		?>
	</footer>
	<!--Referencia de Jquery-->
	<script type="text/javascript" src="extras/js/jquery.min.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="extras/js/materialize.min.js"></script>	
    <script type="text/javascript" src="extras/js/notify.min.js"></script>	
	<script type="text/javascript" src="vistas/moduloEmpresa/componentes/actionsEmpresa.js"></script>
    <script type="text/javascript" src="vistas/moduloEmpresa/componentes/actionOfertas.js"></script>
    <script type="text/javascript" src="vistas/moduloUsuario/componentes/actionPostulante.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
    		$('.modal').modal();
    		$('select').formSelect();
    		$(".dropdown-trigger").dropdown();
    		//$('.sidenav').sidenav();
    		$('.datepicker').datepicker({
       			format: 'yyyy/mm/dd'
      		});
  		});
    </script>
</body>
</html>