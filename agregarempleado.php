<?php
include("basedatos.php");

$Nombre=$_POST['nombre'];
$Edad=$_POST['edad'];

if(!empty($Nombre)&&!empty($Edad))
{
$conexionbd=conectar_bd();
$query=	"INSERT INTO empleado (nombre,edad) VALUES ('$Nombre','$Edad');";
$exito=mysqli_query($conexionbd,$query);
	if($exito){
		header("Location:listaempleados.php");
	} else{
		header("Location:nuevoempleado.php");
	}
} else{
	header("Location:nuevoempleado.php");
}
?>