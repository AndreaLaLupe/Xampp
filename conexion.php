<?php
$modo=$_SERVER['HTTP_HOST']; //localizamos el servidor
if ($modo=="localhost") { //datos en servidor local
    $servidor="--";
    $usuario="--";
    $contrasena="--";
    $base="--";
    }
else { //datos en servidor web
    $servidor="nombre_servidor_web"; 
    $usuario="nombre_usuario_web";
    $contrasena="contraseña_em_web";
    $base="nombre_base_web";
    }
?>
