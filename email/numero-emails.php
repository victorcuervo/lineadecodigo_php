<?php
/**
 * @file numero-emails.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   23-marzo-2011
 * @url    http://lineadecodigo.com/php/saber-cuantos-emails-tenemos-con-php/
 * @description Comprobar cuántos emails tenemos en nuestro servidor de correo
 */
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Saber cuantos emails tenemos con PHP</title>

</head>
<body>
<h1>Saber cuantos emails tenemos con PHP</h1>

 <?php 

$hostname = '{mail.aulambra.com/notls}INBOX';
$username = 'usuario@aulambra.com';
$password = 'password';

$inbox = imap_open($hostname,$username,$password) or die('Ha fallado la conexión: ' . imap_last_error());

$numero_emails = imap_num_msg($inbox);
echo "Tienes ".$numero_emails." mensajes en tu correo";
 
imap_close($inbox);

?>

<br/><br/>
<hr>
Art&iacute;culo disponible en: <a href="http://lineadecodigo.com/php/saber-cuantos-emails-tenemos-con-php/">http://lineadecodigo.com/php/saber-cuantos-emails-tenemos-con-php/</a><br/>
<a href="http://lineadecodigo.com" title="Linea de Codigo">lineadecodigo.com</a>

</body>
</html>