<?php

/* Destruimos la sesión creada al iniciar sesión en authen_login.php */
session_start();
unset($_SESSION["user"]);
session_destroy();
session_write_close();

/* Redirigir a index */
header('Location: index.php');
die;
?>