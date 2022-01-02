<?php

#conexion
session_start();
$link = mysqli_connect('127.0.0.1','root','') or die ("No se pudo conectar");
$db = mysqli_select_db($link,'mr_robot') or die("Error de conexion");
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$validar = (strlen($usuario) * strlen($contrasena)) or die('no se llenaron los datos');
 $sql = mysqli_query( $link, "SELECT * from personal where usuario = '$usuario' ");
 if ($s =mysqli_fetch_array($sql)) {
 	if  ($contrasena==$s['contrasena'] ) {
 header('location: ../../Admin/menu.html');
 	}
 }
 else{
     header('location: ../login.html');

 	}

?>