<?php  
 require('conexion.php');

/* Iniciar sesión */
session_start();

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
/* Asignar valores POST a las variables de las credenciales */
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

/* Hacer consulta de las credenciales */
$query = "SELECT * FROM `usuarios` WHERE Nombre='$username' and Contraseña='$password'";
 
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$count = mysqli_num_rows($result);

if ($count == 1){

/* echo inicio de sesión correcto */
echo "<script type='text/javascript'>alert('Sesión iniciada correctamente.');
window.location.replace('/index.php');
</script>";
$_SESSION["user"] = $username;

}else{
echo "<script type='text/javascript'>alert('Usuario o contraseña incorrectos.')
window.location.replace('/login.html');
</script>";
/* echo inicio de sesión incorrecto */
}
}
?>