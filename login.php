<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<title></title>		
		 <link rel="stylesheet" href="css/bootstrap.min.css">
		 <link rel="stylesheet" href="css/style.css">
		 <link rel="stylesheet" href="css/mdb.min.css">
		 <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

		 <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
	  <script src="js/mdb.min.js"></script>
		<!--<style>
			#login-form{
				width:60%;				
				background:linear-gradient(#cccccc,#55aadf);
				position:fixed;
				padding:5%;
				margin-left:15%;
			}
			#enviar{
				width:30%;
				margin-left:10%;
				background-color:#55aadf;
				border:2px solid #55aadf;
				box-shadow:5px 1px 1px black;
			}
			input{
				padding:1%;
				/*padding-right:2%;*/
			}
			legend{
				color:white;
				padding-left:20%;
				padding-bottom:5%;
				text-shadow:5px 5px 5px black;
			}
			form{
				padding-left:30%;
			}
			label{
				padding-right:3%;
			}
		</style>-->
	</head>
	<body>
	
	
	<div class="container">
	<div class="row">
	<div class="col"></div>
	<section class="col">
		<div class="card" style="width:28rem;">
			<div class="card-body">
				<div class="form-header primary-color-dark">
					<h3>
						<i class="fa fa-lock"></i>
						Login:
					</h3>
				</div>
				<form method="POST" action="valida.php">			
					<!--<p class="h5 text-center mb-4">Sign in</p>-->

					<div class="md-form">
						<i class="fa fa-user prefix grey-text"></i>
						<input type="text" id="defaultForm-user" class="form-control" name="usuario" placeholder="Tu Usuario">
						<!--<label for="defaultForm-user">Tu Usuario</label>-->
					</div>

					<div class="md-form">
						<i class="fa fa-lock prefix grey-text"></i>
						<input type="password" id="defaultForm-pass" class="form-control" name="password" placeholder="Tu Contraseña">
						<!--<label for="defaultForm-pass">Tu Contraseña</label>-->
					</div>

					<div class="text-center">
						<button class="btn btn-indigo">Iniciar Sesión</button>
					</div>
				</form>
			</div>
		</div>
	</section>
	<div class="col"></div>
	</div>
	</div>
	
		<!--<div id="login-form">
			<form method="POST" action="valida.php">
				<legend>Login</legend>
				<!--<label>Usuario:</label>
				<input type="text" id="user" name="usuario" placeholder="Usuario"><br><br>
				<!--<label>Password:</label>
				<input type="password" id="password"  name="password" placeholder="Contraseña"><br><br>
				<input type="submit" id="enviar" value="Iniciar Sesión">
			</form>
		</div>-->
		
	</body>
</html>