<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Formulario</title>
</head>
<body>
<form method="POST" action="procesar.php">
<p>Digite su nombre</p>
<input type="text" name="nombre">
<p>Digite su email</p>
<input type="text" name="email">
<p>Seleccione su pais</p>
<select name="pais">
	<option value="CR">Costa Rica</option>
	<option value="EC">Ecuador</option>
	<option value="VE">Venezuela</option>
	<option value="AR">Argentina</option>
</select>
<input type="submit" value="Enviar">
	
</form>

</body>
</html>