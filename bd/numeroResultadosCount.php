<?php
/**
 * @file consultaBD.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   12-enero-2013
 * @url    http://lineadecodigo.com/php/numero-de-resultados-de-una-consulta-a-base-de-datos-con-php/
 * @description C—digo que muestra el nœmero de resultados de una consulta
 */
?>


<!doctype html>
<html>
<head><title>Consultar BD MySQL en PHP</title>



</head>
<body>
<h1>Consultar BD MySQL en PHP</h1>


<?php 

@ $db = new mysqli(localhost, "root", "", "biblioteca");

if ($db->connect_error)
	die('Error de Conexion ('.$db->connect_errno.')'.$db->connect_error);

$query = "SELECT * FROM libros";
$result = $db->query($query);

$numfilas = $result->num_rows;
echo "El n&uacute;mero de elementos es ".$numfilas."<br>";


$query = "SELECT count(*) resultado FROM libros";
$result = $db->query($query);
echo "El n&uacute;mero de elementos es ".$fila = $result->fetch_object()->resultado;

$result->free();
$db->close();

?>


</body>
</html>
