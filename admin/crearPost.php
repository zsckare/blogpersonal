<?php   
include ("php/conexion.php");
$link=Conectarse();
    
    
   if(isset($_POST['paterno']))
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

                mysql_query($query);
            }
            else
            {
                echo "Fallo al mover";
            }

        }

 ?>