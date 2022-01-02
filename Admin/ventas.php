<?php
$link=mysqli_connect('localhost','root','');
$db = mysqli_select_db($link,'mr_robot');

$cod_libro = $_POST['cod_libro'];
$fecha= $_POST['fecha'];
$hora= $_POST['hora'];
$preciofinal= $_POST['preciofinal'];
$metodo_pago= $_POST['metodo_pago'];


$sql = mysqli_query($link, "INSERT INTO ventas VALUE ('','$cod_libro','$fecha','$hora','$preciofinal','$metodo_pago')") or die ('error en la matriz');



?>