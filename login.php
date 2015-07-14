<?php include("php/conexion.php");$link=Conectarse(); ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
		<title>Vagabundo Informatico</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/rows.css">
		<link rel="stylesheet" href="cs/colors.css">
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
		<!-- script  -->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		
		<script src="js/menu.js"></script>
		<script src="js/script.js"></script>
	</head>
	<body>
		<?php include("navegacion.php"); ?>
			<div class="container be-white big-top-space big-bottom-space	" id="login">
				<form action="admin/login.php" method="post" >
					<div class="row">
						<h2 class="center-align abel">Iniciar Sesión</h2>
					</div>
					<div class="container">
						<div class="row">
							<div class="col s12 m6 l6 offset-m3 offset-l3 input-login">
								<input type="text" placeholder="Usuario" name="usuario">
							</div>
							
						</div>
						<div class="row">
							<div class="col s12 m6 l6 offset-m3 offset-l3 input-login">
								<input type="password" placeholder="Contraseña" name="password">
							</div>
							
						</div>
						<div class="row">
							<div class="center-align">
								<input type="submit" class="btn-login" value="Ingresar">
							</div>
							
						</div>
					</div>
				</form>
			</div>
	

<?php include("footer.php"); ?>