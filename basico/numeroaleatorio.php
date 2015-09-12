<!DOCTYPE html>
<html>
<head><title>N&uacute;mero aleatorio en PHP</title></head>
<body>
<h1>N&uacute;mero aleatorio en PHP</h1>
<?php

$d1=rand(1,30);
echo "El n&uacute;mero aleatorio (entre 1 y 30) mediante rand() es ".$d1."<br>" ;

$d2=mt_rand(1,30);
echo "El n&uacute;mero aleatorio (entre 1 y 30) mediante mt_rand() es ".$d2 ;

?>

<br/><br/>
<hr>
Art&iacute;culo disponible en: <a href="http://lineadecodigo.com/php/generar-un-numero-aleatorio-en-php/">http://lineadecodigo.com/php/generar-un-numero-aleatorio-en-php/</a><br/>
<a href="http://twitter.com/DaveRndn">@DaveRndn</a> para <a href="http://lineadecodigo.com" title="Linea de Codigo">lineadecodigo.com</a>


</body>
</html>
