<?php
function conectar_bd()
{
$servidor="--";
$nombrebd="--";
$usuario="--";
$contrase="--";

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
