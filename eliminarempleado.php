<?php
include("basedatos.php");

$ID=$_GET['empleadoid'];

if(!empty($ID))
{
$conexionbd=conectar_bd();
$query=	"DELETE FROM empleado WHERE id='$ID'";
$exito=mysqli_query($conexionbd,$query);
	if($exito){
		header("Location:listaempleados.php");
	} else{
		header("Location:listaempleados.php");
	}
} else{
	header("Location:nuevoempleado.php");
}
?>