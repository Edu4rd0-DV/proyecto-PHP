<?php
//Incluimos el archivo dbConfig.php
include "config/dbConfig.php";

//Agregamos la consulta que llenará el select
$sql = $dbConnect->query("select * from departamento");
?>