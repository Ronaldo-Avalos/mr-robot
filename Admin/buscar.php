<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "mr_robot";
	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }
    $salida = "";
    $query = "SELECT * FROM libros WHERE nombre NOT LIKE  '' ORDER By cod_libro LIMIT 20";
    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM libros WHERE cod_libro LIKE '%$q%' OR nombre LIKE '%$q%' OR autor LIKE '%$q%' OR editorial LIKE '%$q%' OR idioma LIKE '$q' OR precio LIKE '$q' OR ejemplares LIKE '$q' OR ubicacion LIKE '$q'" ;
      }
    $resultado = $conn->query($query);
    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
            <tr id='titulo'>
                        <td>Codigo de libro</td>
                        
                        <td>NOMBRE</td>
                        <td>AUTOR</td>
                        <td>EDITORIAL</td>
                        <td>IDIOMA</td>
                        <td>PRECIO</td>
                        <td>EJEMPLARES</td>
                        <td>ubicación</td>
    			</thead>
    	<tbody>";
    	while ($fila = $resultado->fetch_assoc()) {
        $salida.="<tr>
        
    					          <td>".$fila['cod_libro']."</td>
                        <td>".$fila['nombre']."</td>
                        <td>".$fila['autor']."</td>
                        <td>".$fila['editorial']."</td>
                        <td>".$fila['idioma']."</td>
                        <td> $".$fila['precio']."</td>
                        <td> ".$fila['ejemplares']."</td>
                        <td>".$fila['ubicacion']."</td>
                        
    				</tr>";
    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }
    echo $salida;
    $conn->close();
?>