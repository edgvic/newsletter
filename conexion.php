<?php
/* Intentar la conexión al servidor MySQL */
$link = mysqli_connect("localhost", "admin", "admin", "m07");
 
/* Comprobar conexión */
if($link === false){
    die("ERROR: No se pudo realizar la conexión. " . mysqli_connect_error());
}
 
?>