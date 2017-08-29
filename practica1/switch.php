<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Switch</title>
</head>
<body>
<?php 
$codigo = 'VE';
switch ($codigo) {
	case 'CR':
		echo "EL PAIS ES COSTA RICA";
		break;
	case 'VE':
		echo "EL PAIS ES VENEZUELA";
		break;
	default:
		echo "EL PAIS NO SE ENCONTRÓ";
		break;
}
 ?>
</body>
</html>