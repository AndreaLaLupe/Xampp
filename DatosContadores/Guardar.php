<?php
include("conexion.php");

$opciones=$_GET['opciones'];
$fecha=$_GET['fecha'];
$hora=$_GET['hora'];
$dato=$_GET['dato'];

if(!empty($opciones)&&!empty($fecha)&&!empty($hora)&&!empty($dato))
{
$conexionbd=conectar_bd();
$query=	"INSERT INTO lecturas (opciones,fecha,hora,dato) VALUES ('$opciones' , '$fecha' , '$hora' , '$dato')";
$exito=mysqli_query($conexionbd,$query);
echo $exito;
} else {
	echo "-1";
} 
?>