<?php
include('conexion.php');
include('cabecera.php');

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($link, $sql);
$identificador = mysqli_fetch_array($result, MYSQLI_ASSOC);

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th><h3>Usuario</h3></th>";
                echo "<th><h3>Email</h3></th>";

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            $id = $row['Id'];
            $url = "form_usuario.php?id=$id";
            echo "<tr>";
                echo "<td>" . $row['Nombre'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                /* Si la sesión está iniciada aparece la opción de editar usuarios, pasando la variable id por URL al formulario */
                if (isset($_SESSION['user'])) {
                    echo "<td><button type='button' class='btn btn-primary'><a  id='editar' name='button' href='$url'> Editar</a></button></td>";
                    }
            
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
        <title>Usuarios</title>
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
</html>