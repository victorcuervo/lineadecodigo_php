<?php 
/**
 * @file insertBD.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   5-febrero-2013
 * @url    http://lineadecodigo.com/php/insertar-elementos-en-mysql-con-php/
 * @description Programa que inserta un elemento en una base de datos MySQL
 */
?>
<!doctype html>
<html>
<head><title>Insertando Elemento...</title></head>
<body>
<h1>Insertando Elemento...</h1>

<?php

// Recuperamos el nombre del formulario
$nombre = $_POST['nombre'];

if (!$nombre) {
	echo "Tienes que insertar un valor para el autor";
	exit;
}

@ $db = new mysqli(localhost, "root", "", "biblioteca");

if (mysqli_connect_errno()){
	echo "Error conectando con la base de datos";
	exit;
} else {

	$result = $db->query($query);

	if ($result)
		echo $db->affected_rows." fila(s) afectada(s). Informaci&oacute;n insertada correctamente";
	else
		echo "Ha ocurrido un problema insertando los datos";
	
	$db->close();
}
?>

</body>
</html>