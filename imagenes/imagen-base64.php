<!doctype html>
<html>
<head><title>Imagenes en Base64 con PHP</title></head>
<body>
<h1>Imagenes en Base64 con PHP</h1>
<?php

$imagen = file_get_contents('imagen.jpg');
$imageData = base64_encode($imagen);

echo "<img src='data:image/jpg;base64,".$imageData."' />";

?>

<br/><br/>
<hr>
Art&iacute;culo disponible en: <a href="http://lineadecodigo.com/php/codificar-una-imagen-en-base-64-con-php">http://lineadecodigo.com/php/codificar-una-imagen-en-base-64-con-php</a><br/>
<a href="http://lineadecodigo.com" title="Linea de Codigo">lineadecodigo.com</a> por <a href="http://lineadecodigo.com/author/daverndn/">Dave Rndn</a>


</body>
</html>
