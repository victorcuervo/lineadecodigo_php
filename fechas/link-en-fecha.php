<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Link en una fecha con PHP</title>
</head>
<body>
<h1>Link en una fecha con PHP</h1>

<?php

date_default_timezone_set('Europe/Madrid');

function mostrar() {
  // Enlace solo se muestra el domingo de 13h a 14h
  if ((date("w") == 0) && (date("H") == 13))
    return true;
  else
    return false;
}

if (mostrar())
  echo '<a href="http://lineadecodigo.com">Enlace En Fecha</a>';

?>

<br/><br/>
<hr>
Art&iacute;culo disponible en: <a href="http://lineadecodigo.com/php/links-temporales-con-php/">http://lineadecodigo.com/php/links-temporales-con-php/</a><br/>
<a href="http://lineadecodigo.com" title="Linea de Codigo">lineadecodigo.com</a>

</body>
</html>
