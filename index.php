<?php
	include "seguridad.php";
	include "usuarios.php";
?>
<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--<script src="js/mdb.min.js"></script>-->
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>-->
	<!--<script src="jquery-3.2.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
	<script>
		var index = 0;
		$(document).ready(function(){
			//alert('Bien'); 
			load(); 
			$('#validaciontitulo').html('Bienvenido');
			$('#validaciontexto').html('Acepta las condicones de uso de la pagina');
			$('#validacion').modal('show');
		});
		function modificar(id)
		{
			var r = Math.random();
			$.ajax({url:'operacion_usuario.php?tipo=4&id='+id+'&r='+ r,success:function(result){
				$('#contenido').html(result);
			}}); 
		}
		function eliminar(id)
		{
			index = id;
			$('#aceptartitulo').html('informacion');
			$('#aceptartexto').html('¿Esta seguro que desea eliminarlo?');
			$('#aceptar').modal('show');

		}
		function eliminarusuario()
		{
			var id = index;
			var r = Math.random();
			$.ajax({url:'operacion_usuario.php?tipo=3&id='+id+'&r='+ r,success:function(result){
				$('#contenido').html(result);
			}}); 
		}
		function load()
		{
			var r = Math.random();
			$.ajax({url:'operacion_usuario.php?tipo=1&r='+ r,success:function(result){
				$('#contenido').html(result);
			}});  
		} 
		function updateFormulario()
		{
			var id = $('#id').val();
			var nombre = $('#nombre').val();
			var app = $('#app').val();
			var apm = $('#apm').val();
			var fnac = $('#fnac').val();
			var salario = $('#salario').val();
			var error = '';

			if(nombre == '')
			{
				error = 'falta el nombre';
			}

			if(app == '')
			{
				error += '<br/> falta el apellido paterno';
			}

			if(apm == '')
			{
				error += '<br/> falta el apellido materno';
			}

			if(fnac == '')
			{
				error += '<br/> falta la fecha de nacimiento';
			}

			if(salario == '')
			{
				error += '<br/> falta el salario';
			}

			if(error != '')
			{
				$('#mensajetitulo').html('Modificar usuario');
				$('#mensajetexto').html(error);
				$('#mensaje').modal('show');
			}
			else
			{
				var r = Math.random();
				var dir = 'operacion_usuario.php?tipo=2&nombre='+nombre+'&app='+app+'&apm='+apm+'&id='+id+'&fnac='+fnac+'&salario='+salario+'&r='+ r;
				console.log(dir);
				$.ajax({url:dir,success:function(result){
				$('#contenido').html(result);
				}});  	
			}
		}
		function addFormulario()
		{
			var r = Math.random();
				var dir = 'operacion_usuario.php?tipo=5&r='+ r;
				console.log(dir);
				$.ajax({url:dir,success:function(result){
				$('#contenido').html(result);
				}});
		}
		function addusuario()
		{
			var id = $('#id').val();
			var nombre = $('#nombre').val();
			var app = $('#app').val();
			var apm = $('#apm').val();
			var fnac = $('#fnac').val();
			var salario = $('#salario').val();
			var error = '';

			if(nombre == '')
			{
				error = 'falta el nombre';
			}

			if(app == '')
			{
				error += '<br/> falta el apellido paterno';
			}

			if(apm == '')
			{
				error += '<br/> falta el apellido materno';
			}

			if(fnac == '')
			{
				error += '<br/> falta la fecha de nacimiento';
			}

			if(salario == '')
			{
				error += '<br/> falta el salario';
			}

			if(error != '')
			{
				$('#mensajetitulo').html('Nuevo usuario');
				$('#mensajetexto').html(error);
				$('#mensaje').modal('show');
			}
			else
			{
				var r = Math.random();
				var dir = 'operacion_usuario.php?tipo=6&nombre='+nombre+'&app='+app+'&apm='+apm+'&id='+id+'&fnac='+fnac+'&salario='+salario+'&r='+ r;
				console.log(dir);
				$.ajax({url:dir,success:function(result){
				$('#contenido').html(result);
				}});  	
			}
		}
	</script>
</head> 
<body>
<div class="container">
	<div class="jumbotron" style="background-image: url(img/inicio.png);">
		<h5>
			usuario
		</h5>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-xs-12 text-right">
			<a href="salir.php" class="btn btn-primary">Salir</a>
		</div>
	</div>
</div>
	<div id ='contenido'>
		
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-right">
				<button type="button" class="btn btn-primary" onclick="addFormulario()">
				<i class="fa fa-pencil-square-o" aria-hidden="true"></i>

				 Agregar 
				</button>
			</div>		
		</div>
	</div>
	<div id="mensaje" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						&times;
					</button>
					<h4 class="modal-title" id="mensajetitulo">						
					</h4>
				</div>	 
				<div class="modal-body">
					<p id="mensajetexto"></p>
				</div>			
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">
						Cerrar
					</button>
				</div>
			</div>			
		</div>		
	</div>
	<div id="validacion" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="validaciontitulo">						
					</h4>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
					</button>
					
				</div>	 
				<div class="modal-body">
					<p id="validaciontexto"></p>
				</div>			
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">
						Aceptar
					</button>
					<a href="salir.php"><button type="button" class="btn btn-default">Salir</button></a>
				</div>
			</div>			
		</div>		
	</div>
	<div id="aceptar" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="aceptartitulo">						
					</h4>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
					</button>
					
				</div>	 
				<div class="modal-body">
					<p id="aceptartexto"></p>
				</div>			
				<div class="modal-footer">
					<button onclick="eliminarusuario()" type="button" class="btn btn-default" data-dismiss="modal">
						Aceptar
					</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">
						Cancelar
					</button>
				</div>
			</div>			
		</div>		
	</div>
</body>
</html>