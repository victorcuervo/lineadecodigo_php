<?php 
/**
 * @file lista-numeros-aleatorios.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   5-mayo-2013
 * @url    http://lineadecodigo.com/php/generar-una-lista-de-numeros-aleatorios-en-php/
 * @description C—mo crear una lista de nœmeros aleatorios en PHP utilizando un array y la funci—n rand.
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
$max_num = 5;


// Generamos los nœmeros aleatorios
for ($x=0;$x<$max_num;$x++) {
	$num_aleatorio = rand(1,100);
	array_push($valores,$num_aleatorio);
}

// Recorremos la lista
for ($x=0;$x<count($valores);$x++)
	echo $valores[$x]."<br/>";


?>

</body>
</html>