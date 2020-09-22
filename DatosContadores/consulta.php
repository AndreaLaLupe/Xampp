<?php
include('function.php');
$opciones=$_GET['opciones'];

if($resultset=getSQLResultSet("SELECT * FROM 'lecturas' WHERE opciones='$opciones'")){
	while ($row=$resultset->fetch_array(MYSQLI_NUM)){
		echo json_encode($row);
	}
}
?>