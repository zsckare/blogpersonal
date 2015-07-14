<?php
$nombreArchivo = $_FILES['user_file']['name'];
$tipoArchivo = $_FILES['user_file']['type'];
$tempArchivo = $_FILES['user_file']['tmp_name'];

	
if(move_uploaded_file($tempArchivo,"img/".$nombreArchivo))
{
	echo "img/".$nombreArchivo;

}
else
{
	print_r($_FILES);
}

