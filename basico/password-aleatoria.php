<?php
/**
 * @file password-aleatoria.php
 * @version 1.0
 * @author José Sevilla (http://lineadecodigo.com)
 * @date   27-marzo-2011
 * @url    http://lineadecodigo.com/php/contrasena-aleatoria-con-php/
 * @description Código para generar contrasñeas aleatorias.  
 */
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Sacar un naipe de la baraja con PHP</title>

</head>
<body>
<h1>Contraseña aleatoria con PHP</h1>
<?php

$caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
$longpalabra=8;

for($pass='', $n=strlen($caracteres)-1; strlen($pass) < $longpalabra ; ) {
	$x = rand(0,$n);
	$pass.= $caracteres[$x];
}

 print 'Nuestra contraseña obtenida es: ' . $pass;

 ?>
  
<br /><br />
<hr>
Art&iacute;culo disponible en: <a href="http://lineadecodigo.com/php/contrasena-aleatoria-con-php/">http://lineadecodigo.com/php/contrasena-aleatoria-con-php/</a><br/>
<a href="http://lineadecodigo.com" title="Linea de Codigo">lineadecodigo.com</a>

</body>
</html>