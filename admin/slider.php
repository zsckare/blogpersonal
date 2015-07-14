<?php $pagetitle="Slider"; ?>
<?php include("encabezado.php"); ?>
		
	<div class="container  big-bottom-space">
		<div class="col s12 m8 l8">
			
		</div>
		<div class="col s12 m4 l4">
			<form action="../procesarimagenes.php" enctype="multipart/form-data" method="post">
				<div>
					<label>Archivo </label>
					<input type="file" name="archivo[]">
				</div>
				<div class="row">
				<label>Archivo </label>
			    <input type="file" name="archivo[]">
			    </div>
			    
			    <div class="row">
			    <label>Archivo </label>
			    <input type="file" name="archivo[]">
			    </div>
			    
			    <div class="row">
			    	<label>Archivo </label>
			    	<input type="file" name="archivo[]">
			    </div>
			    
			    <div class="row">
			    	<label>Archivo </label>
			    	<input type="file" name="archivo[]">
			    </div>

    			<input type="submit" value="Guardar Archivos">
			</form>
		</div>
	</div>

<?php include("footer.php"); ?>