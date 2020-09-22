<?php

include("basedatos.php");
$conexionbd=conectar_bd();
$query="SELECT id,nombre,edad FROM empleado";
$resultado=mysqli_query($conexionbd,$query);
mysqli_close($conexionbd);
?>

<html>
<head></head>
<body>
<h1>Lista</h1>
	<ul>
	<?php
		while($registro=mysqli_fetch_assoc($resultado))
		{
		echo '<li>'.$registro['nombre'].', '.$registro['edad'].' años';
		echo ' <a href="modificarempleado.php?empleadoid='.$registro['id'].'">Modificar</a>';
		echo ' <a href="eliminarempleado.php?empleadoid='.$registro['id'].'">Eliminar</a></li>';
		}
	?>
	</ul>
</body>
</html>