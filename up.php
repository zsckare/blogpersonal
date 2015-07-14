<?php
include ("php/conexion.php");
$link=Conectarse();

$nombreArchivo = $_FILES['user_file']['name'];
$tipoArchivo = $_FILES['user_file']['type'];
$tempArchivo = $_FILES['user_file']['tmp_name'];

	$ruta="slides/".$nombreArchivo;
	$query="INSERT INTO `slideshow` (`id_slide` ,`ruta_silde`)VALUES (NULL , '$ruta');"


	mysql_query($query);
if(move_uploaded_file($tempArchivo,"slides/".$nombreArchivo))
{
	echo "slides/".$nombreArchivo;

}
else
{
	print_r($_FILES);
}



	