<?php
/**
 * @file rotar-array.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   19-octubre-2014
 * @url    http://lineadecodigo.com/php/rotar-un-array-en-php/
 * @description C—digo fuente que nos permite rotar un array en PHP
 */
 ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Rotar un array en PHP</title>

</head>
<body>
<h1>Rotar un array en PHP</h1>
<?php


function rotar($lista){
	
  // Rotar el array a mano
  $primero = $numeros[0];
  $x;
 
  for($x=0; $x<count($lista)-1; $x++)
    $lista[$x] = $lista[$x+1];
 
  $lista[$x-1]= $primero;
  
  return $lista;
}

function rotar2($lista) {
	// Rotar el array mediante array_push y array_shift
	array_push($lista,array_shift($lista));
	return $lista;
}


function imprimir($lista) {
	for ($x=0;$x<count($lista); $x++)
		echo $lista[$x]."<br/>";
}


$lista = array("amaya","julio","javier","nacho","sonsoles");
$lista2 = array();


echo "<h2>Array Inicial</h2>";
imprimir($lista);
$lista2 = rotar2($lista);
echo "<h2>Array Rotado</h2>";
imprimir($lista2);


?>

<br/><br/>
<hr>
Art&iacute;culo disponible en: <a href="http://lineadecodigo.com/php/rotar-un-array-en-php/">http://lineadecodigo.com/php/rotar-un-array-en-php/</a><br/>
<a href="http://lineadecodigo.com" title="Linea de Codigo">lineadecodigo.com</a>

</body>
</html>

