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

// ÀQuŽ hace addslashes??

echo "Elemento a insertar... ".htmlentities($nombre)."<br>";


if (!get_magic_quotes_gpc())
	$nombre = addslashes($nombre);

echo "Elemento despu&eacute;s de addslashes... ".htmlentities($nombre)."<br>";

@ $db = new mysqli(localhost, "root", "", "biblioteca");

if (mysqli_connect_errno()){
	echo "Error conectando con la base de datos";
	exit;
} else {

	$query = "INSERT INTO autores (idautor, autor) VALUES (NULL, '".$nombre."');";
	echo "La query... ".htmlentities($query)."<br>";
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