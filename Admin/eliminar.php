<?php

$link = mysqli_connect('localhost','root','');
$db = mysqli_select_db($link,'mr_robot');

$cod_libro = $_POST['cod_libro'];

$Borrar = mysqli_query($link, "DELETE from libros where cod_libro = '$cod_libro'") or die ('error al eliminar');

?>