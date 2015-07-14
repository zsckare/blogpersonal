<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
		<title><?php echo $pagetitle; ?></title>
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/rows.css">
		<link rel="stylesheet" href="../css/colors.css">
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
		<!-- script  -->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="../js/main.js"></script>
		<script src="../js/menu.js"></script>
		<script src="../js/script.js"></script>
		<script src="../js/file.js"></script>
	</head>
	<body>
<header>
	<div class="info">
		<p>Antonio Alvarez</p>
		<p class="masinfo" style="margin-top: 2em;">Web Developer</p>
		<p class="masinfoplus">Estudiante de CodigoFacilito, Rails Lover, Amante de la Pizza, le muevo al FrontEnd.</p>
	</div>
	<div class="cabezera">
	<div class="form_container">
		<div class="slideContainer">
			<div class="slide" data-background="../img/06-large.jpg"></div>
			<div class="slide" data-background="../img/header.jpg"></div>
			<div class="slide" data-background="../cf_002.jpg"></div>
			<div class="slide" data-background="../cf_003.jpg"></div>
		</div>
		<button class="left"><i class="ion-arrow-left-b"></i></button>
		<button class="right"><i class="ion-arrow-right-b"></i></button>
	</div>
		
	</div>
	<nav class="menu" >
		<ul class="container"  >
			<li><a href="../index.php"><i class="ion-android-home izq "></i>Inicio</a></li>
			<li><a href="../"><i class="ion-briefcase izq"></i>Portafolio</a></li>
			<li><a href="../"><i class="ion-man izq"></i>Sobre Mi</a></li>
			<li><a href="../"><i class="ion-settings izq"></i>Tutoriales	</a></li>
			<li><a href="../logout.php"><i class="ion-log-out izq"></i> Cerrar Sesión</a></li>
		</ul>
	</nav>
	<div class="navegacionmoblie">
		<div class="cortina"></div>
		<button id="menu-mobile"><i class="ion-android-menu"></i></button>
		<div class="nav-mobile">
			<ul >
				<li><a href=""><i class="ion-android-home izq"></i>Inicio</a></li>
				<li><a href=""><i class="ion-briefcase izq"></i>Portafolio</a></li>
				<li><a href=""><i class="ion-man izq"></i>Sobre Mi</a></li>
				<li><a href=""><i class="ion-settings izq"></i>Tutoriales	</a></li>
				<li><a href="../logout.php"><i class="ion-log-out izq"></i> Cerrar Sesión</a></li>
			</ul>
		</div>
	</div>
</header>