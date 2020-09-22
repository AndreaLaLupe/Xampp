<?php
include("basedatos.php");
$conexionbd=conectar_bd();
$query="SELECT id,nombre,edad FROM empleado WHERE id=".$_GET['empleadoid']." LIMIT 1";
$resultado=mysqli_query($conexionbd,$query);
mysqli_close($conexionbd);

$registro=mysqli_fetch_assoc($resultado);

?>
<!DOCTYPE html>
<head>
	<mea charset="utf-8">
	<title>Mofificar Empleado></title>
</head>
<body>
<form action="actualizarempleado.php" method="post" name="nuevoempleado">
	<input type="text" name="nombre" value='<?php echo $registro['nombre'] ?>'><br>
	<input type="number" name="edad" value='<?php echo $registro['edad'] ?>'><br>
	<input type="hidden" name="id" value='<?php echo $registro['id'] ?>'>
	<input type="submit" value="Actualizar">
	</form>
</body>
</html>