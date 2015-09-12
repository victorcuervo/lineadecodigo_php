<?php
/**
 * @file fecha.php
* @version 1.0
* @author V’ctor Cuervo (http://lineadecodigo.com)
* @date   31-agosto-2013
* @url    http://lineadecodigo.com/php/xxx/
* @description Programa que nos dice si un a–o es bisiesto o no
*/
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>A–o Bisiesto</title>
</head>
<body>
<h1>A&ntilde;o Bisiesto</h1>


<?php 
// Recuperamos el valor del GET

if (isset($_GET["year"]) && $_GET["year"]!=""){

	// Recuperamos el a–o como par‡metro
	$year = $_GET["year"];

	if (date("L",mktime(1,1,1,1,1,$year)))
		echo $year." Es un a&ntilde;o bisieto";
	else
		echo $year." No es un a&ntilde;o bisiesto";

}
?>


<form action="annio-bisiesto.php" method="get">
<label for="year">Introduce el a&ntilde;o:</label>
<input type="text" id="year" name="year" size="4"/>
<input type="submit" value="Comprobar"/>
</form>

</body>
</html>