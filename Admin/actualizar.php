
<?php

$link = mysqli_connect('localhost','root','');
$db = mysqli_select_db($link,'mr_robot');


$cod_libro = $_POST['cod_libro'];
$nombre = $_POST['nombre'];
$autor = $_POST['autor'];
$editorial =$_POST['editorial'];
$precio =$_POST['precio'];
$ejemplares =$_POST['ejemplares'];
$ubicacion = $_POST['ubicacion'];
$btnactualizar = $_POST['btn'];




$sql = mysqli_query($link, "UPDATE  libros set nombre = '$nombre', autor = '$autor', editorial = '$editorial', precio = '$precio', ejemplares = '$ejemplares', ubicacion = '$ubicacion' where cod_libro = '$cod_libro'") or die ('error al actualizar');

if(! $sql){
	echo 'no se pudo actualizar <a href="actualizar.html">Volver</a>';
}
else{
		header('location: actualizar.html'); 
}



?>

