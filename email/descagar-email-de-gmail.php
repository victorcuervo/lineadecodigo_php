<?php
/**
 * @file conectar-email-pop3.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   22-marzo-2011
 * @url    http://lineadecodigo.com/php/descargar-emails-de-gmail-con-php/
 * @description Descargar emails mediante POP3 y PHP
 */
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Descargar emails de GMail con PHP</title>

</head>
<body>
<h1>Descargar emails de GMail con PHP</h1>

 <?php 

$hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
$username = 'usuario@gmail.com';
$password = 'password';


$inbox = imap_open($hostname,$username,$password) or die('Ha fallado la conexión: ' . imap_last_error());


$emails = imap_search($inbox,'ALL');

if($emails) {
  
  $salida = '';
  
  foreach($emails as $email_number) {    
    $overview = imap_fetch_overview($inbox,$email_number,0);
    $salida.= '<p>Tema: '.$overview[0]->subject.'<br/>';
    $salida.= 'De: '.$overview[0]->from.'</p>';	   
  }
  
  echo $salida;

} 

imap_close($inbox);

?>

<br/><br/>
<hr>
Art&iacute;culo disponible en: <a href="http://lineadecodigo.com/php/descargar-emails-de-gmail-con-php/">http://lineadecodigo.com/php/descargar-emails-de-gmail-con-php/</a><br/>
<a href="http://lineadecodigo.com" title="Linea de Codigo">lineadecodigo.com</a>

</body>
</html>