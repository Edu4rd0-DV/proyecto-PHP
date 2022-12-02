<?php
//error_reporting(0);
//Este archivo se encargará de administrar las rutas de acuerdo a las peticiones del usuario.
error_reporting(0);
//redirecciones desde el menu
if($_GET['menu']=='main'){
	require_once('vistas/main.php');
}
if($_GET['menu']=='ofertas'){
	require_once('vistas/moduloUsuario/showOfertas.php');
}
//redirecciones desde cualquier lugar de la app
if($_GET['app']=='home'){
	require_once('vistas/other/home.php');
}
if($_GET['app']=='loginEmpresa'){
	require_once('vistas/moduloEmpresa/loginEmpresa.php');
}
if($_GET['app']=='dashboardEmpresa'){
	require_once('vistas/moduloEmpresa/dashboardEmpresa.php');
}
if($_GET['app']=='viewEmpresa'){
	require_once('vistas/moduloEmpresa/viewEmpresa.php');
}
if($_GET['app']=='viewOfertas'){
	require_once('vistas/moduloEmpresa/viewOfertas.php');
}
if($_GET['app']=='updateOfertas'){
	require_once('vistas/moduloEmpresa/updateOfertas.php');
}
if($_GET['app']=='logout'){
	require_once('vistas/moduloEmpresa/phpActions/logoutEmpresa.php');
}
//postulante
if($_GET['app']=='loginPostulante'){
	require_once('vistas/moduloUsuario/loginPostulante.php');
}

?>