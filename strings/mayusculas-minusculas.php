<!DOCTYPE html>
<html>
<head><title>May&uacute;sculas y min&uacute;sculas en PHP</title></head>
<body>
<h1>May&uacute;sculas y min&uacute;sculas en PHP</h1>
<?php

echo "Una cadena toda en may&uacute;sculas ---- ".strtoupper("hola usuario <br>");
echo "Una cadena toda en min&uacute;sculas ---- ".strtolower("hola USUARIO<br>");
echo "Una cadena con la primera letra en may&uacute;sculas ---- ".ucfirst("hola usuario<br>"); 
echo "Una cadena en formato t&iacute;tulo ---- ".ucwords ("hola usuario<br>");


$str = "hola usuario";
$str = mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
echo "La cadena en formato titulo utilizando mb_convert ---- ".$str;

?>

<br/><br/>
<hr>
Art&iacute;culo disponible en: <a href="http://lineadecodigo.com/php/convertir-a-mayusculas-y-a-minusculas-en-php/">http://lineadecodigo.com/php/convertir-a-mayusculas-y-a-minusculas-en-php/</a><br/>
<a href="http://twitter.com/DaveRndn">@DaveRndn</a> para <a href="http://lineadecodigo.com" title="Linea de Codigo">lineadecodigo.com</a>


</body>
</html>
