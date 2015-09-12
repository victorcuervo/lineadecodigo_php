<?php 
/**
 * @file lista-numeros-aleatorios-no-repetidos.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   5-mayo-2013
 * @url    http://lineadecodigo.com/php/lista-de-numeros-aleatorios-unicos-en-php/
 * @description C—digo que nos genera una lista de nœmeros aleatorios œnicos en PHP. Este programa comprobar‡ que el nœmero aleatorio no haya sido todav’a generado.
 */
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Lista de n&uacute;meros aleatorios</title>
</head>
<body>
<h1>Lista de n&uacute;meros aleatorios</h1>
<?php

$valores = array();

// Hay que evitar que haya ids iguales

$x = 0;
while ($x<$num) {
	$num_aleatorio = rand(1,$max);
	if (!in_array($num_aleatorio,$valores)) {
		array_push($valores,$num_aleatorio);
		$x++;
	}
}

// Recorremos la lista
for ($x=0;$x<count($valores);$x++)
	echo $valores[$x]."<br/>";


?>

</body></html>