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
<head><title>Nœmero de resultados de la base de datos con PHP</title>



</head>
<body>
<h1>Nœmero de resultados de la base de datos con PHP</h1>


<?php 

@ $db = new mysqli(localhost, "root", "", "biblioteca");

if ($db->connect_error)
	die('Error de Conexion ('.$db->connect_errno.')'.$db->connect_error);

$query = "SELECT * FROM libros";
$result = $db->query($query);

$numfilas = $result->num_rows;
echo "El n&uacute;mero de elementos es ".$numfilas."<br>";

$result->free();
$db->close();

?>


</body>
</html>
