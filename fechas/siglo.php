<?php
/**
 * @file fecha.php
* @version 1.0
* @author V’ctor Cuervo (http://lineadecodigo.com)
* @date   31-agosto-2013
* @url    http://lineadecodigo.com/php/calcular-el-siglo-en-php/
* @description Programa que nos dice el siglo de un a–o.s
*/
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Siglo</title>
</head>
<body>
<h1>Siglo</h1>


<?php 
// Recuperamos el valor del GET

if (isset($_GET["year"]) && $_GET["year"]!=""){

	// Recuperamos el a–o como par‡metro
	$year = $_GET["year"];
	
	if (is_numeric($year)) {

		$year = str_pad($year,4,"0",STR_PAD_LEFT);
		$siglo = substr($year,0,2)+1;

		echo "El a&ntilde;o ".$year." corresponde con el siglo ".$siglo;
	} else
		echo "Revisa el formato del a&ntilde;o insertado";
		
}
?>


<form action="siglo.php" method="get">
<label for="year">Introduce el a&ntilde;o:</label>
<input type="text" id="year" name="year" size="4"/>
<input type="submit" value="Comprobar"/>
</form>

</body>
</html>