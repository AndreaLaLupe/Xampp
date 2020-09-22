<?php
include("basedatos.php");

$Nombre=$_POST['nombre'];
$Edad=$_POST['edad'];
$ID=$_POST['id'];

if(!empty($Nombre)&&!empty($Edad)&&!empty($ID))
{
$conexionbd=conectar_bd();
$query=	"UPDATE empleado SET nombre='$Nombre', edad='$Edad' WHERE id='$ID'";
$exito=mysqli_query($conexionbd,$query);
	if($exito){
		header('Location:listaempleados.php');
	} else{
		header('Location:nuevoempleado.php');
	}
} else{
	header('Location:nuevoempleado.php');
}
?>