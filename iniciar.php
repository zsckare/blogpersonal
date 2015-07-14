iniciar.php<?php 
	session_start();

	$user=trim($_POST['usuario']);
	$pwd=trim($_POST['password']);
	$encryp=md5($pwd);
	
	include 'php/conexion.php';
	$link=Conectarse();
    $con=mysql_query("SELECT * FROM users WHERE name_user='$user' AND user_password='$encryp' ",$link);

	if($resultado = mysql_fetch_array($con)){
		$_SESSION['user']=$user;
		$_SESSION['id']=$resultado[0];
		

		header("Location: admin/index.php");

	}else{
		echo $user." ".$encryp;
		header("Location: index.php");
		
	}


 ?>
