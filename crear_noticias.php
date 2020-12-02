<?php include('cabecera.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crear noticia</title>
<link href="estilos.css" rel="stylesheet" type="text/css">
</head>
 
<body>
<div class="group">
  <form action="form_noticias.php" method="POST">
  <h2><em>Crear noticia</em></h2>  
     
      <label for="nombre">Titulo <span><em>(requerido)</em></span></label>
      <input type="text" name="Titulo" class="form-input" required/>   
      <br><br>
      
      <label for="apellido">Contenido <span><em>(requerido)</em></span></label>
      <input type="text" name="Contenido" class="form-input" required/>         
      <br><br>
      
      <label for="email">Autor <span><em>(requerido)</em></span></label>
      <input type="text" name="Autor" class="form-input" />
      <br><br>
      
     <center> <input class="form-btn" name="submit" type="submit" value="Crear" /></center>
    </p>
  </form>
</div>
</body>
</html>