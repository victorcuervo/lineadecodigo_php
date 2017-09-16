<?php
/**
 * @file sacarnaipe.php
 * @version 1.0
 * @author José Sevilla (http://lineadecodigo.com)
 * @date   23/octubre/2010
 * @url    http://lineadecodigo.com/php/sacar-un-naipe-de-la-baraja-con-php/
 * @description Programa Hola Mundo en PHP
 */
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Sacar un naipe de la baraja con PHP</title>

</head>
<body>
<h1>Sacar un naipe de la baraja con PHP</h1>

<?php

$palos = array('Picas','Corazones','Diamantes','Tréboles');
$cartas = array('As','Dos','Tres','Cuatro','Cinco','Seis','Siete','Ocho','Nueve','Diez','Jota','Reina','Rey');


 $palo = array_rand($palos, 1);
 $carta = array_rand($cartas, 1);

 print 'La carta que sali� de la baraja fue: ' . $cartas[$carta] . ' de ' . $palos[$palo] ;

?>

<br /><br />
<hr>
Art&iacute;culo disponible en: <a href="http://lineadecodigo.com/php/sacar-un-naipe-de-la-baraja-con-php/">http://lineadecodigo.com/php/sacar-un-naipe-de-la-baraja-con-php/</a><br/>
<a href="http://lineadecodigo.com" title="Linea de Codigo">lineadecodigo.com</a>

</body>
</html>
