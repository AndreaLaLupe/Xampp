<?php
function conectar_bd()
{
$servidor="localhost";
$nombrebd="empresa";
$usuario="prueba";
$contrase="prueba123";

$conexion=mysqli_connect($servidor,$usuario,$contrase)or die("Unable to connect to MySQL");
if(!$conexion){
	die('<strong>No</strong>'.mysql_error());
} else {
	echo 'Conectado <br/>';
}

mysqli_select_db($conexion,$nombrebd) or die(mysqli_error($conexion));

return $conexion;
}
?>