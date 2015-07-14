<?php 

	session_start();
    if(isset($_SESSION['id'])){

    }
    else{
      header("Location: ../index.php");
    }
	include("../php/conexion.php");
	$link=Conectarse();
	$pagetitle="Todos Los Posts";
	include("encabezado.php");
	
?>
	<div class="container big-bottom-space top-space	"  >
		<div class="hoja">
			<div class="row">
				<h1 class="center-align">Todos Los Posts</h1>
			</div>
			
			<?php 
				$query=mysql_query("SELECT * FROM posts ORDER BY id_post DESC");
				while ($row=mysql_fetch_row($query)) {
					echo '
						<div class="row">
							<div class="row">
								<div class="col s4 m4 l4">
									<h3>'.$row[1].'</h3>
								</div>
								<div class="col s2 m2 l2 offset-s3 offset-m3 offset-l3">
									<a href="../post.php?id_post='.$row[0].'" class="ver"><i class="ion-eye small"></i></a>
								</div>
								<div class="col s2 m2 l2"><a href="editarPost.php?id='.$row[0].'" class="editar"><i class="ion-edit small"></i></a></div>
								<div class="col s1 m1 l1">
									<a href="eliminarPost.php?id_post='.$row[0].'" class="eliminar"><i class="ion-trash-a small"></i></a>	
								</div>

							</div>
						</div>';
				}

			?>

		</div>
	</div>
	<div >
		<a href="nuevoPost.php" id="nuevopost"><i class="ion-close-round small">	</i></a>
	</div>

<?php include ("footer.php"); ?>