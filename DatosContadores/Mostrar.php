<?php
include("conexion.php");
$conexionbd=conectar_bd();

$opciones=$_GET['opciones'];

$query="SELECT opciones,fecha,hora,dato FROM lecturas WHERE opciones='$opciones'";
$datos=array();
$resultado=mysqli_query($conexionbd,$query);
while($row=mysqli_fetch_assoc($resultado)){
	$datos[]=$row;
}
echo json_encode($datos);
?>