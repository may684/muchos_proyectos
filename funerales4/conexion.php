<?php
$hostname="localhost";
$usuario="u872020498_fun";
$password="funerales";
$basededatos="u872020498_fun";

$mysqli = new mysqli($hostname, $usuario, $password,$basededatos);
/*if ( mysqli_connect_errno() ) {
	echo "Error de conexión a la BD: ".mysqli_connect_error();
	exit();
}
else
{
	echo"BD conectada correctamente";
}

$query="SELECT * FROM about_us";
$resultado = $mysqli->query($query);


if ($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
		echo "<br>: " . $row["id"]."   -  DATO: " . $row["mision"]."<br>";
    }
} else {
    echo "0 results";
}
*/

 //consulta de para ruta de imagen recamara 
$query="SELECT (ruta) FROM imagenes where nombre ='recamara'";
$recamara_ruta = $mysqli->query($query);

//consulta para el nombre del producto recamara
$query="SELECT (mueble) FROM productos where mueble='recamara'";
$titulo_recamara = $mysqli->query($query);

//consulta de para descripcion de producto
$query="SELECT (descripcion) FROM productos where mueble='recamara'";
$desc_recamara = $mysqli->query($query);

?>
