<?php
    include('conexion.php');


    /*Recibir las variables por URL */
    $id = $_GET['id'];
    $likes = $_GET['likes'];
    $value = $likes + 1;

    /* Query para aumentar los likes en la BBDD */
    $sql = "UPDATE noticias SET Likes = {$value} WHERE Id = {$id}";	
    mysqli_query($link, $sql);


    header('Location: list_noticias.php');
?>