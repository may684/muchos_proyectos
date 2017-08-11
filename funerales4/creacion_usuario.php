<!DOCTYPE html>
<html>
<head>
    <title>Crear usuario</title>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
<!--    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"> -->
     <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
	<link href="css/estilos.css" rel="stylesheet" type="text/css">
	<script  type="text/javascript" src="js/jquery-2.2.0.min.js"></script>  
    <script  type="text/javascript" src="js/conecta.js"></script>
	<SCRIPT LANGUAGE="javascript">
		function send()
		{document.sing-in.submit()}
	</SCRIPT>	
</head>

<body>
    
    <div class="container_principal">
       <div id="logo-index"><img id="img-index" src="imagenes/Logo 1.1.png" alt="Mi Logo" width="195" height="113" class="image-circle"></div>
       <div id="login">
       		<form name="sing-in" action="registro.php" method="POST" class="container vertical-center">
				<div class="col-md-4">      

                  <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Nombre" id="nombre" name="nombre">
                </div>
                
                <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Nombre de Usuario" id="usuario" name="usuario">
                    </div>
                
                <div class="form-group">
                        <input type="password" class="form-control input-lg" placeholder="Contraseña" id="password" name="password">
                </div>

               <!-- <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="botonr">Registrarse</button>
                    </div> -->
                    
                    <div class="form-group">
                    <input type="submit" value="Registrarse" class="btn btn-primary btn-lg btn-block" >Registrarse</input>
                    </div>
                  
            </div>
        </form>
       </div>
        
    </div>
    
    
</body>


</html>