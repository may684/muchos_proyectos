<?php
	session_start();
	$_SESSION['usuario'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Registro</title>
	
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script type="text/javascript" src="js/jquery-3.1.3.min.js"></script>
	<script  type="text/javascript" src="js/jquery-2.2.0.min.js"></script>   
	<!--<script type="text/javascript" src="js/bootstrap.js"></script> -->

</head>

<style type="text/css">
	.zoom{
		transition: 1.5s ease;
 		-moz-transition: 1.5s ease; /* Firefox */
 		-webkit-transition: 1.5s ease; /* Chrome - Safari */
 		-o-transition: 1.5s ease; /* Opera */
	}
	.zoom:hover{
		transform : scale(1.3);
		-moz-transform : scale(1.3); /* Firefox */
		-webkit-transform : scale(1.3); /* Chrome - Safari */
		-o-transform : scale(1.3); /* Opera */
		-ms-transform : scale(1.3); /* IE9 */
	}
</style>

<script language="javascript" type="text/javascript">
  /*SCRIPT PARA EVITAR QUE SE ENVIE EL FORMULARIO SI EL CAMPO DE TEXTO ESTA VACIO
  SE DEBE AGREGAR onsubmit="return validacion()" EN EN LA LINEA DEL form
  */
    function validacion() {
      nom=document.getElementById("nom").value;
      if (nom == null || nom.length == 0 || /^\s+$/.test(nom)) {
        // Si no se cumple la condicion...
        alert('[ERROR] El nombre no puede estar vacio');
        return false;
      }
      return true;
    }
  </script>


	<body>
		<div id="todo">
		  <div id="header">
			<div id="div-header1">Bienvenido a Computronic</div>
		  <div id="div-header2">
			<img src="imagenes/Logo 1.1.png" width="272" height="166" alt=""/>
		  </div>
		  <div id="div-header3">Mensaje del dia</div>
		</div>
		  <div id="contenido">

			<div id="barra">Content for  id "barra" Goes Here</div>

			<div id="images">
				<div id= "img1">
					<a href="afiliacion.php" ><img class="zoom" src="imagenes/newuser.png" height="150px" alt="auto"> <font color="#1F8565" size="5" face="Comic Sans MS, Arial, MS Sans Serif">Nuevo Afiliado </font> </a>
					<a href="afiliacion.php" ><img class="zoom" src="imagenes/search_user.png" height="150px" alt="auto"> <font color="#1F8565" size="5" face="Comic Sans MS, Arial, MS Sans Serif">
Busqueda</font> </a>
				</div>
				<div id= "img2">
					
					<span> <a href="afiliacion.php" > </a> </span>
				</div>
				
			</div>

			

			</div> <!-- Temrina div contenido-->
			<div id="footer">Content for  id "footer" Goes Here</div>
		</div> <!-- Termina div todo-->
	
		
	</body>
</html>
