<?php
	session_start();
	//echo $_SESSION['usuario'];

	include 'conexion.php';

	$fecha = date('YYYY-mm-dd');

	echo $nombre=$_POST['nom'];
	echo $apellidoP=$_POST['apellidoP'];
	echo $apellidoM=$_POST['apellidoM'];
	echo $fecha_nac=$_POST['fecha_nac'];
	echo $lugar_nac=$_POST['lugar_nac'];
	echo $calle=$_POST['calle'];
	echo $numero=$_POST['numero'];
	echo $colonia=$_POST['colonia'];
	echo $municipio=$_POST['municipio'];
	echo $localidad=$_POST['localidad'];
	echo $estado=$_POST['estado'];
	echo $tel=$_POST['tel'];
	echo $cel=$_POST['cel'];
	echo $beneficiario1=$_POST['beneficiario_1'];
	echo $beneficiario2=$_POST['beneficiario_2'];

	echo $query="INSERT INTO afiliados (FechaAfiliacion, NombreTitular, Apellido1, Apellido2, Edad, Calle, Numero, Municipio, Localidad, Estado, Colonia, Telefono, FechaNacimiento, Bene1, Bene1) VALUES ('$fecha', '$nombre',)";
			$resultado = $mysqli->query($query);
			while($row = $resultado->fetch_assoc()) {
				$pass2=$row["password"];
				$tipo_usr=$row["tipo_usuario"];
				$status_usr=$row["status"];
			}
?>