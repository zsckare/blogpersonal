<?php include("php/conexion.php");$link=Conectarse(); ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
		<title>Vagabundo Informatico</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/rows.css">
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
		<?php include("navegacion.php"); ?>
		<!--
			$texto = substr($row['noticia'], 0, 100)."...";
			echo"$texto";
		-->
		<?php 
			
			/*traer ultimos 6 posts*/	
			$i=0;
			$titulos[0]="";
			$cuerpo[0]="";
			$imagen[0]="";
			$ids[0]="";
			$result=mysql_query("SELECT *FROM `posts`ORDER BY `id_post` ASC");
			$tamanio=mysql_num_rows($result);

			while ($row=mysql_fetch_row($result)) {
				$ids[$i]=$row[0];
				$titulos[$i]=$row[1];
				$cuerpo[$i]=$row[2];
				$imagen[$i]=$row[3];
				$i++;
			}
		?>
		<div class="container big-top-space big-bottom-space">
			<?php 
			$p=0;
				for ($i=0; $i <2 ; $i++) { 
					echo '<div class="row">';
						for ($j=0; $j <2 ; $j++) { 
							if($p!=$tamanio){
							echo '
							<div class="col s12 m6 l6">
									<div class="card">
										<div class="portada">
											<img src="'.$imagen[$p].'" alt="">
										</div>
										
										<div class="contenido">
											<h3 class="card-title">'.$titulos[$p].'</h3>
										</div>
										
										<div class="boton" 	>
											<a href="post.php?id_post='.$ids[$p].'" class="button btn-seemore">Ver Mas</a>
										</div>
									</div>
								</div>';
								$p++;
							}else{
								break;
							}
						}
					echo "</div>";
				}
			 ?>
		</div>
	

<?php include("footer.php"); ?>