<?php
/**
 * @file recorrer-array.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   9-enero-2011
 * @url    http://lineadecodigo.com/php/recorrer-un-array-en-php/
 * @description Recorre un array en PHP
 */
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Recorrer un array en PHP</title>

</head>
<body>
<h1>Recorrer un array en PHP</h1>
<?php

$lista = array("amaya","julio","javier","nacho","sonsoles");

for ($x=0;$x<count($lista); $x++)
	echo $lista[$x]."<br/>";

?>

<br/><br/>
<hr>
Art&iacute;culo disponible en: <a href="http://lineadecodigo.com/php/recorrer-un-array-en-php/">http://lineadecodigo.com/php/recorrer-un-array-en-php/</a><br/>
<a href="http://lineadecodigo.com" title="Linea de Codigo">lineadecodigo.com</a>

</body>
</html>

