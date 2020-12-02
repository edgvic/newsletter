<?php
include('conexion.php');
/* Recibir la cookie del id si existe*/
if (isset($_COOKIE["userid"])){
$id = $_COOKIE["userid"];
}

/* Función eliminar usuario */
function delete($id, $link){

    /* Query para eliminar al usuario */
    $sql = "DELETE FROM usuarios WHERE Id = {$id}";	
    return mysqli_query($link, $sql);
    }

if(isset($_POST['delete'])) {
    delete($id, $link);
    header('Location: list_usuarios.php');
}


/* Función crear usuario */
function create($id, $link){
    /* Declarar variables para cada campo de la tabla */
$db_name = "m07";
$db_table_name = "usuarios";
$subs_name = utf8_decode($_POST['Nombre']);
$subs_pass = utf8_decode($_POST['Contraseña']);
$subs_email = utf8_decode($_POST['Email']);
$subs_age = utf8_decode($_POST['Edad']);
$subs_date = utf8_decode($_POST['Fecha_nacimiento']);
$subs_adress = utf8_decode($_POST['Dirección']);
$subs_code = utf8_decode($_POST['Código_postal']);
$subs_provincia = utf8_decode($_POST['Provincia']);
$subs_gender = utf8_decode($_POST['Genero']);

/* Consulta para insertar cada dato en los campos de la tabla usuarios */
$sql = 'INSERT INTO `'.$db_table_name.'` (`Nombre` , `Contraseña` , `Email`, `Edad`, `Fecha nacimiento`, `Dirección`, `Código postal`, `Provincia`, `Genero`) VALUES ("' . $subs_name . '", "' . $subs_pass . '", "' . $subs_email . '", "' . $subs_age . '", "' . $subs_date . '", "' . $subs_adress . '", "' . $subs_code . '", "' . $subs_provincia . '", "' . $subs_gender . '")';
 
return mysqli_query($link, $sql);
}

if(isset($_POST['create'])) {
    create($id, $link);
    header('Location: list_usuarios.php');
}


/* Función modificar usuario */
function update($id, $link){
    /* Declarar variables para cada campo de la tabla */
$subs_name = ($_POST['Nombre']);
$subs_pass = utf8_decode($_POST['Contraseña']);
$subs_email = utf8_decode($_POST['Email']);
$subs_age = utf8_decode($_POST['Edad']);
$subs_date = utf8_decode($_POST['Fecha_nacimiento']);
$subs_adress = utf8_decode($_POST['Dirección']);
$subs_code = utf8_decode($_POST['Código_postal']);
$subs_provincia = utf8_decode($_POST['Provincia']);
$subs_gender = utf8_decode($_POST['Genero']);

/* Consulta para insertar cada dato en los campos de la tabla usuarios */
$sql = "UPDATE usuarios SET Nombre = '{$subs_name}' WHERE Id = {$id}";
return mysqli_query($link, $sql);
}

if(isset($_POST['update'])) {
    update($id, $link);
    header('Location: list_usuarios.php');
}
?>
