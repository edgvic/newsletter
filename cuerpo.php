<?php
require('conexion.php');

/* Consulta selección campos de tabla noticias */
$sql = "SELECT * FROM noticias ORDER BY 'Hora creación' DESC LIMIT 5";

/* Mostrar por pantalla todos los datos de los campos de la tabla noticias */
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Autor</th>";
                echo "<th>Titulo</th>";
                echo "<th>Contenido</th>";
                echo "<th>Hora creación</th>";
                echo "<th>Likes</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Autor'] . "</td>";
                echo "<td>" . $row['Titulo'] . "</td>";
                echo "<td>" . $row['Contenido'] . "</td>";
                echo "<td>" . $row['Hora creación'] . "</td>";
                echo "<td>" . $row['Likes'] . "</td>";
                
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