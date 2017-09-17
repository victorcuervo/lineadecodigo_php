<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Enviar email a múltiples destinatarios con PHP</title>
</head>
<body>
<h1>Enviar email a múltiples destinatarios con PHP</h1>

<?php
$para = 'usuario1@correo.com, usuario2@otrocorreo.com';
$titulo = 'Enviando email desde PHP';
$mensaje = 'Este es un email que se envía a múltiples destinatarios';
$cabeceras = 'From: Línea de Código <envios@lineadecodigo.com>';

$enviado = mail($para, $titulo, $mensaje, $cabeceras);

if ($enviado)
	echo 'Email enviado correctamente a '.$para;
else
	echo 'Error en el envío del email';

?>

<br/><br/>
<hr>
Art&iacute;culo disponible en: <a href="http://lineadecodigo.com/php/email-multiples-destinatarios-php/">http://lineadecodigo.com/php/email-multiples-destinatarios-php/</a><br/>
<a href="http://lineadecodigo.com" title="Linea de Codigo">lineadecodigo.com</a>

</body>
</html>
