<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sitio Web</title>
  </head>
  <body>
<?php include "funciones.php"; ?>
    <h1>Bienvenido al sitio</h1>
    <p><?php Negrita("Elija una opcion del menu"); ?></p>
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="formulario.php">Formulario</a></li>
      <li><a href="ciclofor.php">Ciclo For</a></li>
    </ul>
    <?php include "objetivo.txt"; ?>
  </body>
</html>
