<?php 
	$pagetitle="Todos Los Posts";
	include("encabezado.php");
?>
	<div class="container" style="margin-bottom:2em ;" >
		<div class="hoja">
			<div class="row">
				<h3 class="center-align">Todos Los Posts</h3>
			</div>
			<div class="row">
				<div class="row">
					<div class="col s4 m4 l4">
						Titulo del Post
					</div>
					<div class="col s2 m2 l2 offset-s3 offset-m3 offset-l3">
						<a href=""><i class="ion-ios-eye-outline small"></i></a>
					</div>
					<div class="col s2 m2 l2"><a href=""><i class="ion-edit small"></i></a></div>
					<div class="col s1 m1 l1">
						<a href=""><i class="ion-trash-a small"></i></a>	
					</div>

				</div>
			</div><!--Fila para mostrar listado de post-->
		</div>
	</div>




<?php include ("footer.php"); ?>