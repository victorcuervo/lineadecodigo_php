<?php
/**
 * @file cuerpo-mensaje.php
 * @version 1.0
 * @author Víctor Cuervo - http://lineadecodigo.com
 * @date   16/septiembre/2017
 * @url    http://lineadecodigo.com/php/obtener-cuerpo-mensaje-php/
 * @description Obtener el cuerpo de un mensaje al conectarnos a un servidor de correo.
 */
 ?>

 <!doctype html>
 <html>
 <head>
 	<meta charset="utf-8"/>
 	<title>Cuerpo del mensaje con PHP</title>
 </head>
 <body>
 <h1>Cuerpo del mensaje con PHP</h1>
<?php

$hostname = '{mail.correo.com/notls}INBOX';
$username = 'test@correo.com';
$password = 'password';

$inbox = imap_open($hostname,$username,$password) or die('Ha fallado la conexión: ' . imap_last_error());

$emails = imap_search($inbox,'ALL');

if($emails) {
  $email_number = 1;
  $cuerpo = imap_fetchbody($inbox,$email_number,1);
  echo imap_qprint($cuerpo);
}

imap_close($inbox);

?>


<br/><br/>
<hr>
Art&iacute;culo disponible en: <a href="http://lineadecodigo.com/php/obtener-cuerpo-mensaje-php/">http://lineadecodigo.com/php/obtener-cuerpo-mensaje-php/</a><br/>
<a href="http://lineadecodigo.com" title="Linea de Codigo">lineadecodigo.com</a>

</body>
</html>
