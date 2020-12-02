<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
    <body>
        <div id="navbar">
<?php
include ('authen_login.php');

/* Se muestra el navbar por pantalla */
echo '<a href="/index.php">Inicio</a>';
echo ' <a href="/list_usuarios.php">Usuarios</a>';
echo ' <a href="/list_noticias.php">Noticias</a>';

/* Si la sesión está iniciada no aparece */
if (!isset($_SESSION['user'])) {
echo ' <a href="/login.html">Iniciar sesión</a>';
}

/* Si la sesión está iniciada aparecen estas opciones en navbar */
if (isset($_SESSION['user'])) {
    echo '<a href="/form_usuario.php"> Crear usuario</a>';
    echo '<a href="/crear_noticias.php"> Crear noticia</a>';
    echo '<a href="/logout.php"> Cerrar Sesión</a>';
}
?>
        </div>
    </body>
</html>