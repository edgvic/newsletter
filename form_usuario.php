<?php 
include('conexion.php');
include('cabecera.php'); 
include('funciones_bd.php');

/* Recibir la variable id por URL */
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    /* Crea cookie con el ID del usuario */
    setcookie("userid", $id, time() + 3600, "/");
    
    /* Query y fetch para obtener los datos del usuario con el id recibido */

    $sql = "SELECT * FROM usuarios WHERE Id = {$id}";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Usuario</title>
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
 
<body>
<div class="group">
  <form method="POST">
  <h2><em>Formulario usuario</em></h2>  
     
      <label for="nombre">Nombre <span><em>(requerido)</em></span></label>
      <input type="text" name="Nombre" class="form-input" value="<?php if(isset($_GET['id'])){echo $row["Nombre"];} else {echo "";} ?>" required/>   
      <br><br>
      
      <label for="apellido">Contraseña <span><em>(requerido)</em></span></label>
      <input type="password" name="Contraseña" class="form-input" value="<?php if(isset($_GET['id'])){echo $row["Contraseña"];} else {echo "";} ?>" required/>         
      <br><br>
      
      <label for="email">Email <span><em>(requerido)</em></span></label>
      <input type="email" name="Email" class="form-input" value="<?php if(isset($_GET['id'])){echo $row["Email"];} else {echo "";} ?>" required/>
      <br><br>
      
      <label for="edad">Edad <span><em>(requerido)</em></span></label>
      <input type="number" name="Edad" class="form-input" value="<?php if(isset($_GET['id'])){echo $row["Edad"];} else {echo "";} ?>" required/> 
      <br><br>
      
      <label for="fecha nacimiento">Fecha de nacimiento <span><em>(requerido)</em></span></label>
      <input type="date" name="Fecha nacimiento" class="form-input" value="<?php if(isset($_GET['id'])){echo $row["Fecha nacimiento"];} else {echo "";} ?>" required/> 
      <br><br>
      
      <label for="direccion">Dirección <span><em>(requerido)</em></span></label>
      <input type="text" name="Dirección" class="form-input" value="<?php if(isset($_GET['id'])){echo $row["Dirección"];} else {echo "";} ?>" required/> 
      <br><br>
      
      <label for="codigo postal">Código postal <span><em>(requerido)</em></span></label>
      <input type="number" name="Código postal" class="form-input" value="<?php echo $row["Código postal"]; ?>" required/> 
      <br><br>
      
      <label for="provincia">Provincia <span><em>(requerido)</em></span></label>
      <input type="text" name="Provincia" class="form-input" value="<?php if(isset($_GET['id'])){echo $row["Provincia"];} else {echo "";} ?>" required/> 
      <br><br>
      
      <label for="genero">Genero <span><em>(requerido)</em></span></label>
      <input type="text" name="Genero" class="form-input" value="<?php if(isset($_GET['id'])){echo $row["Genero"];} else {echo "";} ?>" required/> 
      <br><br>
      
     <center> 
         <input class="form-btn" name="create" type="submit" value="Crear" />
     

         <input class="form-btn" name="update" type="submit" value="Actualizar" />

         <input class="form-btn" name="delete" type="submit" value="Eliminar" />
         </form>
      </center>
    </p>
</div>
</body>
</html>