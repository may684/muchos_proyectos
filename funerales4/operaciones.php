<?php
	include 'conexion.php';
	
?>
<!DOCTYPE html>
<html>
<head>
<title>OPERACIONES</title>
<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
<link rel="stylesheet" href="css/misestilos.php">
</head>
<body>	
	
<div class="container vertical-center">	
	<img src="images/perfil.jpg" class="image-circle" alt="Mi Logo">
	<div class="col-md-3">
	<div align="center", class="text-danger">
	<H3>
	<?php
				
			$usuario=$_REQUEST["usuario"];
			$password=$_REQUEST["password"];
			
			$usr = base64_decode($usuario);
			$pass = base64_decode($password);

			$_SESSION['usuario']=$usr;
			
			
			$query="SELECT * FROM usuarios where usuario='".$usr."' ";
			$resultado = $mysqli->query($query);
			while($row = $resultado->fetch_assoc()) {
				$pass2=$row["password"];
				$tipo_usr=$row["tipo_usuario"];
				$status_usr=$row["status"];
			}
			
			//si el usuario exite y el password es correcto entra al sistema, de la contrario lo regresa al index
			if ($pass == $pass2 and $status_usr == "ACTIVO")
			{
				session_start();
				$_SESSION['usuario']=$usr;
				$_SESSION['tipo_user']=$tipo_usr;
				$_SESSION['status_user']=$status_usr;
				session_set_cookie_params(0, "/", $HTTP_SERVER_VARS["HTTP_HOST"], 0);

				//esto es para elegir que hacer en caso de no ser el usuario corresto pero creo que ya no se necesita asi que la comentare
				/*
				print ("<br> <p class='text-primary'> Bienvenido $usr </p>");
	       		print ("<button class='btn btn-primary btn-lg btn-block' id =regresar >Regresar </button> ");
        		print ("<br> <div><button class='btn btn-primary btn-lg btn-block' id =editar >Cerrar Sesion </button> ");
        		*/
        		echo '<script>';
        		echo 'window.location="menu.php";';
        		echo '</script>';
   				
			}
			else
			{
				print ("Usuario o Password incorrecto ");
				echo("<br> <p class='text-info'> Intenta de nuevo </p>");
				print ("<div><button class='btn btn-primary btn-lg btn-block' id =regresar >Regresar </button> ");
				echo '<script>';
        		echo 'window.location="index.php";';
        		echo '</script>';	
			}
			
			
	?>
	</H3>
	</div>
</div>
</div>
	<script  type="text/javascript" src="js/jquery-2.2.0.min.js"></script>  
    <script  type="text/javascript" src="js/conecta.js"></script>
</body>
</html>
