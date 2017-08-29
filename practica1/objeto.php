<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Objeto</title>
  </head>
  <body>
<h1>Objetos</h1>
<?php
include "usuario.php";
$persona1 = new Usuario;
$persona1->setNombre("Zoilo");
$persona1->setClave("12345");
echo "<br>El nombre de la persona es ".$persona1->getNombre();
echo "<br>La clave de la persona es ".$persona1->getClave();

$persona2 = new Usuario;
$persona2->setNombre("Pepe");
$persona2->setClave("qwert");
echo "<br>El nombre de la persona es ".$persona2->getNombre();
echo "<br>La clave de la persona es ".$persona2->getClave();
echo "<br>el usuario ".$persona2->getNombre()." dice ".$persona2->saludar();

 ?>
  </body>
</html>
