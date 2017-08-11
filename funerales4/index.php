<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
<!--    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"> -->
     <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
	<link href="css/estilos.css" rel="stylesheet" type="text/css">
	<script  type="text/javascript" src="js/jquery-2.2.0.min.js"></script>  
    <script  type="text/javascript" src="js/conecta.js"></script>
	
</head>

<body>
    
    <div class="container_principal">
       <div id="logo-index"><img id="img-index" src="imagenes/Logo 1.1.png" alt="Mi Logo" width="195" height="113" class="image-circle"></div>
       <div id="login">
       		<form name="sing-in" class="container vertical-center">
				<div class="col-md-4">      
            		<div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Usuario" id="usuario">
                    </div>

                <div class="form-group">
                        <input type="password" class="form-control input-lg" placeholder="Password" id="password">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="botonp">Iniciar Sesi&oacute;n</button>
                    </div>
                    <div clas="from-group">
                      <a href="creacion_usuario.php">
                      <button type="submit" class="btn btn-primary btn-lg btn-block" id="botoncu">Crear Usuario</button>
                      </a>
              </div>
        </form>
       </div>
        
    </div>
    
    
</body>


</html>
