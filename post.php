<?php 

	include("php/conexion.php");
	$link=Conectarse();
	$id_post=$_GET['id_post'];

	$titulopost="";
	$contenidopost="";
	$imagenpost="";
	$result=mysql_query("SELECT * FROM posts WHERE id_post='$id_post' ");
	while($row=mysql_fetch_row($result)){
		$titulopost=$row[1];
		$contenidopost=$row[2];
		$imagenpost=$row[3];
	}
 ?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
		<title>Posts |<?php echo " ".$titulopost; ?></title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/rows.css">
		<link rel="stylesheet" href="btns-style.css">
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
		<!-- script  -->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/menu.js"></script>
		<script src="js/script.js"></script>
	</head>
	<body>
		<?php
			include("navegacion.php");
		?>

		<div class="container">
			<article class="top-space post" >
				<div class="contenedor-portada">
					<img src="<?php echo $imagenpost; ?>" alt="">
					<div class="titulo-post">
						<h1><?php echo $titulopost; ?></h1>
					</div>
				</div>
				<div class="cuerpo-post">
					<div class="header-post">
						<p>Escrito por: Antonio Alvarez Guevara</p>
					</div>
					<div class="contenido-post">
						<p>
							<?php echo $contenidopost; ?>
						</p>
					</div>
				</div>
			</article>
		</div>
<?php include("footer.php"); ?>