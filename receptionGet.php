<?php
	$usuario = $_POST['user'];
	$contrase = $_POST['pwd'];

$resultado=verificarDatos($usuario,$contrase);
	if($resultado){
		echo "Bienvenido"."<br>";
	}
	else {
		echo "Incorrecto"."<br>";
	}


function verificarDatos($Usuario,$contrase){
	if($Usuario=="Administrador" && $Contrase="admin1234"){
		return true;
	}
	else {
		return false;
	}
}

echo "usuario ".$usuario."<br>";
echo "contrase ".$contrase."<br>";

?>