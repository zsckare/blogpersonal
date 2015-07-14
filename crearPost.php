<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php   
include ("php/conexion.php");
$link=Conectarse();
    
    
   if(isset($_POST['titulo']))
        {
            $phat="img/";
            $archivo=$_FILES['imagen']['name'];
            $phat = $phat . basename( $_FILES['imagen']['name']);
            $mover=move_uploaded_file($_FILES['imagen']['tmp_name'], $phat);
            if($mover)
            {
                $titulo=trim($_POST['titulo']);
                $contenido=trim($_POST['contenido']);
                $query="INSERT INTO `posts` (`id_post` ,`title_post` ,`content_post`,`portada`) VALUES (NULL , '$titulo', '$contenido', '$phat' )";
                mysql_query($query)or die;
                header("Location: index.php")or die(mysql_error());
            }
            else
            {
                echo '<script>alert("Fallo");</script>';
            }

        }

 ?>
</body>
</html>