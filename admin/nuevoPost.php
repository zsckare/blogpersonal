<?php 
	$pagetitle="Nuevo Post";
	include("encabezado.php");
?>
	<div class="container big-top-space big-bottom-space papel tamanio-min">
		<form action="../crearPost.php" method="post" class="paddin-hoja"  enctype="multipart/form-data">
			<div class="row">
				<h2 class="center-align" style="font-size:2em; margin-top:-1em;">Nuevo Post</h2>
			</div>
			<div class="row" style="margin-bottom:.3em;">
				<div class="col s12 m8 l8">
					<input type="text" name="titulo" placeholder="Titulo Del Post">
				</div>
			</div>
			<div class="row">
				<div class="col s12 m8 l8">
					<textarea name="contenido" style="height: 20em !important; " placeholder="Contenido" ></textarea> 
				</div>
			</div>
			<div class="row">
				<input type="file" name="imagen">
			</div> 
			<div class="row">
				<div class="col s12 m8 l8">
					<div class="center-align">
						<input type="submit">
					</div>
				</div>
			</div>
		</form>
	</div>




<?php include ("footer.php"); ?>