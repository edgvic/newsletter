<?php
include('conexion.php');
include('cabecera.php');

/*Consulta para obtener todas las noticias*/
$sql = "SELECT * FROM noticias ORDER BY 'id' ASC";

/*Mostramos en pantalla todos los campos de la tabla noticias */
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th><h3>Autor</h3></th>";
                echo "<th><h3>Titulo</h3></th>";
                echo "<th><h3>Contenido</h3></th>";
                echo "<th><h3>Hora creación</h3></th>";
                echo "<th><h3>Likes</h3></th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            $id = $row['Id'];
            $likes = $row['Likes'];
            $url = "cookie_likes.php?id=$id&likes=$likes";

            echo "<tr>";
                echo "<td>" . $row['Autor'] . "</td>";
                echo "<td>" . $row['Titulo'] . "</td>";
                echo "<td>" . $row['Contenido'] . "</td>";
                echo "<td>" . $row['Hora creación'] . "</td>";
                echo "<td>" . $row['Likes'] . "</td>";
                echo "<td>
                <button type='button' class='btn btn-primary'>
                    <a  id='like' name='button' href='$url'> Like</a></button>
                </td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Resultado vacío
        mysqli_free_result($result);
    } else{
        echo "No se han encontrado resultados en relación a la consulta realizada.";
    }
} else{
    echo "ERROR: No ha sido posible ejecutar la conexión $sql. " . mysqli_error($link);
}
 
// Cerrar conexión
mysqli_close($link);
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Noticias</title>
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
</html>