<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario de Actualizacion</title>
  </head>
  <body>
    <?php
    $id = $_GET['id'];
    $conexion = mysqli_connect("localhost", "root","","db_noticias");
    $registros = mysqli_query($conexion, "SELECT * FROM noticias WHERE id = $id");
    $reg = mysqli_fetch_array($registros);
     ?>
    <form class="" action="accion.php?ac=2" method="post">
      <input type="hidden" name="id" value="<?php echo $id;?>">
      <p>Titulo</p>
      <input type="text" name="titulo" value="<?php echo $reg['titulo']?>">
      <p>Contenido</p>
      <textarea name="contenido" rows="8" cols="80"><?php echo $reg['contenido']?></textarea><br>
      <input type="submit" name="" value="Actualizar Noticia">

    </form>
  </body>
</html>
