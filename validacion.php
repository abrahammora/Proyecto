<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			if(isset($_GET['nombre'])&&isset($_GET['Apaterno'])&&isset($_GET['Amaterno'])&&isset($_GET['password'])&&isset($_GET['validar']))
			{
				$nombre = isset($_GET['nombre'])?$_GET['nombre']:'';
				$Apaterno = isset($_['Apaterno'])?$_GET['Apaterno']:'';
				$Amaterno = isset($_['Amaterno'])?$_GET['Amaterno']:'';
				$Apaterno = isset($_['password'])?$_GET['password']:'';
				
				echo 'El nombre es:'.$nombre.'<br/>';
				echo 'El Apellido Paterno es:'.$Apaterno.'<br/>';
				echo 'El Apellido Materno:'.$Amaterno.'<br/>';
				echo 'El Password es:'.$password.'<br/>';
			}else{
				header('location: formulario.php');
			}
			
		?>
	</body>
</html>