<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Dirección de respuesta a un email con PHP</title>
</head>
<body>
<h1>Dirección de respuesta a un email con PHP</h1>


<?php
$para = 'nombre@correo.com';
$titulo = 'Enviando email desde PHP';
$mensaje = 'Este es el primer email que envío desde PHP';
$cabeceras = 'From: Mi Nombre<yo@correo.com>' . "\r\n" .
		'Reply-To: Otro <otro@correo.com>';

$enviado = mail($para, $titulo, $mensaje, $cabeceras);

if ($enviado)
	echo 'Email enviado correctamente';
else
	echo 'Error en el envío del email';

?>

<br/><br/>
<hr>
Art&iacute;culo disponible en: <a href="http://lineadecodigo.com/php/direccion-de-respuesta-a-un-email-con-php/">http://lineadecodigo.com/php/direccion-de-respuesta-a-un-email-con-php/</a><br/>
<a href="http://lineadecodigo.com" title="Linea de Codigo">lineadecodigo.com</a>


</body>
</html>
