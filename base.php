<?php

$servidor="localhost";
$usuario="prueba";
$contrasenha="prueba123";
$BD="empresa";

$conexion=@mysqli_connect($servidor,$usuario,$contrasenha);

if(!$conexion){
	die('<strong>No</strong>'.mysql_error());
} else {
	echo 'Conectado <br/>';
}

mysqli_select_db($conexion,$BD) or die(mysqli_error($conexion));
?>