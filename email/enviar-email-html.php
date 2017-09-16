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

$mensaje = '<html>'.
			'<head><title>Email con HTML</title></head>'.
			'<body><h1>Email con HTML</h1>'.
			'Esto es un email que se envía en el formato HTML'.
			'<hr>'.
			'Enviado por mi programa en PHP'.
			'</body>'.
			'</html>';

$cabeceras = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= 'From: Mi Nombre<yo@correo.com>';

$enviado = mail($para, $titulo, $mensaje, $cabeceras);

if ($enviado)
	echo 'Email enviado correctamente';
else
	echo 'Error en el envío del email';

?>

<br/><br/>
<hr>
Art&iacute;culo disponible en: <a href="http://lineadecodigo.com/php/enviar-email-con-formato-html-en-php/">http://lineadecodigo.com/php/enviar-email-con-formato-html-en-php/</a><br/>
<a href="http://lineadecodigo.com" title="Linea de Codigo">lineadecodigo.com</a>


</body>
</html>
