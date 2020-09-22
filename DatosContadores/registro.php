<?php
include ('function.php');
$opciones=$_GET['opciones'];
$fecha=$_GET['fecha'];
$hora=$_GET['hora'];
$dato=$_GET['dato'];

ejecutarSQLCommand("INSERT INTO `lecturas` (opciones,fecha,hora,date)
VALUES ('$opciones' , '$fecha' , '$hora' , '$dato')

ON DUPLICATE KEY UPDATE `opciones`='$opciones', `fecha`='$fecha',`hora`='$hora',`dato`='dato';");

?>