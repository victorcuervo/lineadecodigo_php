<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Enviar email con PHP</title>
</head>
<body>
<h1>Enviar email con PHP</h1>

<?php
$para = 'nombre@correo.com';
$titulo = 'Enviando email desde PHP';
$mensaje = 'Este es el primer email que envío desde PHP';
$cabeceras = 'From: Mi Nombre<yo@correo.com>';

$enviado = mail($para, $titulo, $mensaje, $cabeceras);

if ($enviado)
	echo 'Email enviado correctamente';
else
	echo 'Error en el envío del email';

?> 


<br/><br/>
<hr>
Art&iacute;culo disponible en: <a href="http://lineadecodigo.com/php/enviar-email-con-php/">http://lineadecodigo.com/php/enviar-email-con-php/</a><br/>
<a href="http://lineadecodigo.com" title="Linea de Codigo">lineadecodigo.com</a>


</body>
</html>
