<?php
/**
 * @file eliminar-elemento-duplicado-array.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   9-enero-2011
 * @url    http://lineadecodigo.com/php/eliminar-elementos-duplicados-de-un-array-en-php/
 * @description Elimina los elementos duplicados de un array
 */
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Eliminar elementos duplicados de un array</title>

</head>
<body>
<h1>Eliminar elementos duplicados de un array</h1>
<?php

$lista = array(1,1,2,3,4,4,4,5,6,7,7,8,9,10,10);
$lista_simple = array_values(array_unique($lista));

for ($x=0;$x<count($lista_simple); $x++)
	echo $lista_simple[$x]."<br/>";	
	
?>

<br/><br/>
<hr>
Art&iacute;culo disponible en: <a href="http://lineadecodigo.com/php/eliminar-elementos-duplicados-de-un-array-en-php/">http://lineadecodigo.com/php/eliminar-elementos-duplicados-de-un-array-en-php/</a><br/>
<a href="http://lineadecodigo.com" title="Linea de Codigo">lineadecodigo.com</a>

</body>
</html>

