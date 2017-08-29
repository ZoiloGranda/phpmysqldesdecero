<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sitio Noticias</title>
  </head>
  <body>
<h1>Nuestras noticias</h1>
<?php
//los parametros son servidor, usuario, password, nombre de la base de datos
$conexion = mysqli_connect("localhost", "root","","db_noticias");
$registros = mysqli_query($conexion, "SELECT * FROM noticias");
 while($reg = mysqli_fetch_array($registros)){
   echo "<h3>".$reg['titulo']."</h3><br>";
   echo $reg['contenido']."<br>";
   echo "<hr>";
   echo "<br>";
 }
 ?>
 <a href="agregar.php">Agregar Nueva Noticia</a>
 <a href="lista.php">Lista de mantenimiento</a>
  </body>
</html>
