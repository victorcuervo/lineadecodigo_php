<!doctype html>
<html>
<head><title>Tama&ntilde;o de una imagen en PHP</title></head>
<body>
<h1>Tama&ntilde;o de una imagen en PHP</h1>
<img src="imagen.jpg"> <br/>
<?php
	list($width, $height, $type, $attr) = getimagesize("imagen.jpg");
	
	echo "Ancho de imagen: " .$width;
	echo '<br>';
	echo "Alto de imagen: " .$height;
	echo '<br>';
	echo "Tipo de imagen: " .image_type_to_extension($type);
	echo '<br>';
	echo "Atributos: " .$attr;
?>

<br/><br/>
<hr>
Art&iacute;culo disponible en: <a href="http://lineadecodigo.com/html5/alto-y-ancho-de-una-imagen-en-php/">http://lineadecodigo.com/html5/alto-y-ancho-de-una-imagen-en-php/</a><br/>
<a href="http://lineadecodigo.com" title="Linea de Codigo">lineadecodigo.com</a> por <a href="http://lineadecodigo.com/author/daverndn/">Dave Rndn</a>


</body>
</html>
