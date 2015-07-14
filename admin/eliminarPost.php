<?php 
	include("../php/conexion.php");
	$link=Conectarse();
	$id_post=$_GET['id_post'];

	$query="DELETE FROM posts WHERE id_post='$id_post' ";
	mysql_query($query,$link) or die(mysql_error());
	header("Location: allposts.php");
 ?>