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

			<form id="form1" name="form1" method="post" action="afiliacion2.php" onsubmit="return validacion()">
			  <div id="titular">
				
				<div class="titulo">
					<p><label>Datos de Cliente</label></p>
				</div>
					  
			  	<div id="nombre-fecha">
			  		
				  <div id="nombre">
					<div class="form-group">
					  <label>Nombre:</label>
					  <input type="text" name="nom" id="nom" class="form-control">
					</div>
					<div class="form-group">
					  <label>Apellido Paterno:</label>
					  <input type="text" name="apellidoP" id="apellidoP" class="form-control">
					</div>
					<div class="form-group">
					  <label>Apellido Materno:</label>
					  <input type="text" name="apellidoM" id="apellidoM" class="form-control">
					</div>
				  </div>
				<div id="fecha">
				  <div class="form-group">
						  <label>Fecha de Nacimiento:</label>
						  <input type="date" name="fecha_nac" id="fecha_nac" class="form-control">
						</div>
						<div class="form-group">
						  <label>Edad:</label>
						  <input type="text" name="edad" id="edad" class="form-control">
						</div>
						<div class="form-group">
						  <label>Lugar de Nacimiento:</label>
						  <input type="text" name="lugar_nac" id="lugar_nac" class="form-control">
						</div>
				</div> <!-- Termina div fecha-->
			</div>
			
			<div class="titulo">
			 <p><label>Domicilio</label></p>
			</div>
			  
			<div id="dimicilio">
					<div class="row">
					  <div class="col-xs-5">
					  <label>Calle:</label>
						<input type="text" name="calle" id="calle" class="form-control">
					  </div>
					  <div class="col-xs-3">
					  <label>Numero:</label>
						<input type="text" name="numero" id="numero" class="form-control">
					  </div>
					  <div class="col-xs-3">
					  <label>Colonia:</label>
						<input type="text" name="colonia" id="colonia" class="form-control">
					  </div>
					</div>

					<div class="row">
					  <div class="col-xs-5">
					  <label>Municipio:</label>
						<input type="text" name="municipio" id="municipio" class="form-control">
					  </div>
					  <div class="col-xs-3">
					  <label>Localidad:</label>
						<input type="text" name="localidad" id="localidad" class="form-control">
					  </div>
					  <div class="col-xs-3">
					  <label>Estado:</label>
						<input type="text" name="estado" id="estado" class="form-control">
					  </div>
					</div>

					<div class="row">
					  <div class="col-xs-5">
					  <label>Telefono:</label>
						<input type="text" name="tel" id="tel" class="form-control">
					  </div>
					  <div class="col-xs-3">
					  <label>Celular:</label>
						<input type="text" name="cel" id="cel" class="form-control">
					  </div>
					</div>

				</div> <!--Termina div de domicilio-->
				
				<div class="titulo">
					<p><label>Beneficiarios</label></p>
				 </div>
				  	
				<div id="beneficiarios">
					
					<div id="beneficiario1">
						 <div class="form-group">
							<p><label>Beneficiario1</label></p>
							<label>Nombre Completo:</label>
							<input type="text" name="beneficiario_11" id="beneficiario_1" class="form-control">
						</div>
					</div>
					
				<div id="beneficiario2"> 
					 <div class="form-group">
							<p><label>Beneficiario2</label></p>
							<label>Nombre Completo:</label>
							<input type="text" name="beneficiario_2" id="beneficiario_2" class="form-control">
					</div>
				</div>
			    </div> <!-- Termina div beneficiarios-->
			    
			  </div> <!--Termina div titular-->

			  <div id="boton"><input type="submit" name="Agregar_Cliente" id="Agregar_Cliente" value="Agregar Cliente"></div> 
			<!--Termina beneficiarios-->
			</form>

			

			</div> <!-- Temrina div contenido-->
			<div id="footer">Content for  id "footer" Goes Here</div>
		</div> <!-- Termina div todo-->
	
		
	</body>
</html>
