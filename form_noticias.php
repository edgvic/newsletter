<?php
include('conexion.php');

/* Variables para cada campo */
$db_name = "m07";
$db_table_name = "noticias";
$subs_title = utf8_decode($_POST['Titulo']);
$subs_content = utf8_decode($_POST['Contenido']);
$subs_autor = utf8_decode($_POST['Autor']);
$subs_time = date("h:i:s");
$subs_likes = 0;
 
/*Consulta para insertar los datos introducidos en cada campo de la tabla noticias */
$sql = 'INSERT INTO `'.$db_table_name.'` (`Titulo` , `Contenido` , `Autor`, `Hora Creación`, `Likes`) VALUES ("' . $subs_title . '", "' . $subs_content . '", "' . $subs_autor . '", "' . $subs_time . '", "' . $subs_likes . '")';
 
$retry_value = mysqli_query($link, $sql);
 
if (!$retry_value) {
   die('Error: ' . mysqli_error($link));
}
	
/* Devolver al index */
header('Location: index.php');

 
mysql_close($db_connection);
		
?>