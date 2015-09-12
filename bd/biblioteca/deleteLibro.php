<!doctype html>
<html>
<head><title>Eliminando Elemento...</title></head>
<body>
<h1>Eliminando Elemento...</h1>

<?php

// Recuperamos el nombre del formulario
$isbn = $_GET['isbn'];

if (!$isbn) {
	echo "Tienes que rellenar todos los valores";
	exit;
}


if (!get_magic_quotes_gpc())
	$isbn = addslashes($isbn);


@ $db = new mysqli(localhost, "root", "", "biblioteca");

if (mysqli_connect_errno()){
	echo "Error conectando con la base de datos";
	exit;
} else {

	$query = "DELETE FROM libros WHERE isbn='".$isbn."'";
	echo $query;
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