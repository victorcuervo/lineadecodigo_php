<?php
/**
 * @file fecha.php
* @version 1.0
* @author Víctor Cuervo (http://lineadecodigo.com)
* @date   31-agosto-2013
* @url    http://lineadecodigo.com/php/xxx/
* @description Programa que nos muestra el mes del a�o en el que estamos
*/
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Fecha Publicación Documento</title>
</head>
<body>
<h1>Hora en PHP</h1>

<?php
	date_default_timezone_set("Europe/Madrid");
	echo "En formato 24h<br>";
	echo date("H:i:s");
	echo "<br><br>";
	echo "En formtato 12h<br>";
	echo date("h:i:s a");
?>

</body>
</html>
