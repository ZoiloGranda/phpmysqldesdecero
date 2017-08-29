<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Funciones</title>
</head>
<body>
<?php
	function HolaMundo(){
		return "hola";
	}
//	echo HolaMundo();
function Suma($num1, $num2)
{
	return $num1 + $num2;
}
function Negrita($texto){
	echo "<b>$texto</b>";
}
echo "la Suma es ".Suma(3,2)."<br>";

$text = "hola soy un texto";
echo $text;
echo "<br>";
Negrita($text);

 ?>
</body>
</html>
