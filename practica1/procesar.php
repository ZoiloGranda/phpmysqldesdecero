<!DOCTYPE html>
<html>
<head>
	<title>Procesador</title>
</head>
<body>
<h1>Formulario Completo</h1>
<?php
// $_GET['nombre'] _get para recibir por metodo get, o osea en la url, y entre corchetes el nombre de la variable que se recibe
//si se hace por post, solo hay que cambiar _GET por _POST
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$pais = $_POST["pais"];
 ?>
 <h2>Nombre</h2>
 <p><?php echo $nombre;?></p>
 <h2>Email</h2>
 <p><?php echo $email;?></p>
 <h2>Pais</h2>
 <p><?php echo $pais;?></p>
</body>
</html>
