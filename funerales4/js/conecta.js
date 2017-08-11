$(document).ready( function () {

	$("#botonp").on('click', function(event) {
		event.preventDefault();
		
		login();
	});

	$("#regresar").on('click', function(event) {
		event.preventDefault();
		regresar();
	});
	
	$("#editar").on('click', function(event) {
		event.preventDefault();
		editar();
	});

	$("#editar2").on('click', function(event) {
		event.preventDefault();
		editar2();
	});

	$("#act_prod").on('click', function(event) {
		event.preventDefault();
		actualizar_prod();
	});
	
	$("#exportar").on('click', function(event) {
		event.preventDefault();
		exportar();
	});

	$("#nuevo").on('click', function(event) {
		event.preventDefault();
		nuevo();
	});
	
	$("#Agregar").on('click', function(event) {
		event.preventDefault();
		Agregar();
	});

	$("#cerrar_sesion").on('click', function(event) {
		event.preventDefault();
		Cerrar_Sesion();
	});
	
	$("#boton").on('click', function(event) {
		event.preventDefault();
		enviar();
	});

	var identificador;
	$("button").on('click', function(event) {
		var id="t"+this.id;		
		if (id.indexOf("m") !=-1) {
    			
			var id_modificar = document.getElementById(id).value;
			
			identificador=id_modificar;
			
			editar();
		}
		if (id.indexOf("e") !=-1) {
    
			var id_eliminar = document.getElementById(id).value;
			identificador=id_eliminar;
;
			eliminar();
		}		
	});	

				
	
	function hacerOperaciones(){
		var usuario = $("#usuario").val();
		var password = $("#password").val();
		$.ajax({
		type: "POST",
		url: "operaciones.php",
		success : function(){
		        window.location.href = "operaciones.php?usuario="+usuario+"&password="+password;
			}
	    	});
		};

	function regresar(){
		$.ajax({
		type: "POST",
		url: "index.php",
		success : function(){
		        window.location.href = "index.php";
			}
	    	});
		};

	function login(){
		var usuario = document.getElementById("usuario").value;
		var password = document.getElementById("password").value;
	
		//alert(usuario);
		var usr = btoa(usuario);
		var pass = btoa(password);
	
		$.ajax({
		type: "POST",
		url: "operaciones.php",
		success : function(){
		        window.location.href = "operaciones.php?usuario="+usr+"&password="+pass;
			}
	    	});
		};

		function Cerrar_Sesion(){
		$.ajax({
		type: "POST",
		url: "cerrarsesion.php",
		success : function(){
		        window.location.href = "cerrarsesion.php";
			}
	    	});
		};
		
		function enviar(){

		var nombre = document.getElementById("nombre").value;
		var correo = document.getElementById("correo").value;
		var asunto = document.getElementById("asunto").value;
		var mensaje = document.getElementById("mensaje").value;
		alert(nombre);
		alert(correo);
		alert(asunto);
		alert(mensaje);

		$.ajax({
		type: "POST",
		url: "enviar.php",
		success : function(){
		        window.location.href = "enviar.php?nombre="+nombre+"&correo="+correo+"&asunto="+asunto+"&mensaje"+mensaje;
			}
	    	});
		};

		function Agregar(){
		var nombre1 = document.getElementById("nombres").value;
		var descripcion1 = document.getElementById("descripciones").value;
		var precio1 = document.getElementById("precios").value;
		var ruta1 = document.getElementById("rutas").value;

		$.ajax({
		type: "POST",
		url: "savedtb1.php",
		success : function(){
		        window.location.href = "savedtb1.php?nombre="+nombre1+"&descripcion="+descripcion1+"&precio="+precio1+"&ruta="+ruta1;
			}
	    	});
		};	
	
	function editar(){
		var mueble = document.getElementById("mueble").value;
		var descripcion = document.getElementById("descripcion").value;
		var precio = document.getElementById("precio").value;
		var ruta = document.getElementById("ruta").value;
		
		$.ajax({
		type: "POST",
		url: "edicion.php",
		success : function(){
		        window.location.href = "edicion.php?identificador="+identificador;
			}
	    	});
		};

	function editar2(){
		$.ajax({
		type: "POST",
		url: "reporte.php",
		success : function(){
		        window.location.href = "reporte.php";
			}
	    	});
		};


	function actualizar_prod(){
		var id = document.getElementById("id").value;
		var producto = document.getElementById("nombre").value;
		var descripcion = document.getElementById("descripcion").value;
		var precio = document.getElementById("precio").value;
		var ruta = document.getElementById("ruta").value;
		
		

		var usr = btoa(usuario);
		var pass = btoa(password);
		
		$.ajax({
		type: "POST",
		url: "savedtb.php",
		success : function(){
		        window.location.href = "savedtb.php?id="+id+"&producto="+producto+"&descripcion="+descripcion+"&precio="+precio+"&ruta="+ruta;
			}
	    	});
		};

	function exportar(){
		$.ajax({
		type: "POST",
		url: "reporte_excel.php",
		success : function(){
		        window.location.href = "reporte_excel.php";
			}
	    	});
		};

		function eliminar(){
		$.ajax({
		type: "POST",
		url: "eliminar.php",
		success : function(){
		        window.location.href = "eliminar.php?identificador="+identificador;
			}
	    	});
		};

		function nuevo(){
		$.ajax({
		type: "POST",
		url: "nuevo.php",
		success : function(){
		        window.location.href = "nuevo.php";
			}
	    	});
		};

});	
