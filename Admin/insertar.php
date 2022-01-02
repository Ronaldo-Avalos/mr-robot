<?php


session_start();

$link = mysqli_connect('localhost','root','');
$db = mysqli_select_db($link,'mr_robot');



#variables 
$nombre = $_POST['nombre'];
$autor = $_POST['autor'];
$editorial =$_POST['editorial'];
$idioma =$_POST['idioma'];
$precio =$_POST['precio'];
$ejemplares =$_POST['ejemplares'];
$cod_libro = $_POST['cod_libro'];
$ubicacion = $_POST['ubicacion'];



$sql = mysqli_query($link, "INSERT INTO libros VALUE ('$cod_libro','$nombre','$autor','$editorial','$idioma','$precio','$ejemplares','$ubicacion')");

   if (! $sql) {

   	echo "El codigo de libro ya se encuentra registrado";
   }
else{
	header('location: insertar.html'); 
}

?>