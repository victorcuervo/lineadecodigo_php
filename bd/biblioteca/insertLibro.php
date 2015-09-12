<!doctype html>
<html>
<head><title>Insertando Elemento...</title></head>
<body>
<h1>Insertando Elemento...</h1>

<?php

// Recuperamos el nombre del formulario
$isbn = $_POST['isbn'];
$titulo = $_POST['titulo'];
$idautor = $_POST['autor'];
$ideditorial = $_POST['editorial'];
$fecha = $_POST['fecha'];

if (!$isbn || !titulo || !idautor || !ideditorial || !fecha) {
	echo "Tienes que rellenar todos los valores";
	exit;
}


if (!get_magic_quotes_gpc()) {
	$isbn = addslashes($isbn);
	$titulo = addslashes($titulo);
}

@ $db = new mysqli(localhost, "root", "", "biblioteca");

if (mysqli_connect_errno()){
	echo "Error conectando con la base de datos";
	exit;
} else {

	$query = "INSERT INTO libros (isbn, titulo, idAutor, ideditorial, fecha) VALUES ('".$isbn."','".$titulo."',".$idautor.",".$ideditorial.",'".$fecha."');";
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