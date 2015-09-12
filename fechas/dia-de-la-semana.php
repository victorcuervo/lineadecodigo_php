<?php
/**
 * @file dia-de-la-semana.php
* @version 1.0
* @author V’ctor Cuervo (http://lineadecodigo.com)
* @date   31-agosto-2013
* @url    http://lineadecodigo.com/php/dia-de-la-semana-en-php/
* @description Saludar con el d’a de la semana en PHP
*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>D’a de la Semana</title>
</head>
<body>
<h1> D&iacute;a de la Semana</h1>

<?php 
setlocale(LC_ALL,"es_ES");
date_default_timezone_set("Europa/Madrid");

echo "<h2>Con strftime</h2>";
echo strftime("Buenos d&iacute;as, hoy es %A <br>");

echo "<h2>Con date</h2>";
$dias = array("domingo","lunes","martes","mi&eacute;rcoles","jueves","viernes","s&aacute;bado");
echo "Buenos d&iacute;as, hoy es ".$dias[date("w")]."<br>";


?>
</body>
</html>