<?php
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];
$msj = "Usted recibio un mensaje de ".$nombre." con el email ".$email
." y el mensaje es<br>".$mensaje;
mail("zgranda@gmail.com", "mensaje desde ell sitio web", $msj);
 ?>
