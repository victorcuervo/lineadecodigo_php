<?php
/**
 * @file consultaBD.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   12-enero-2013
 * @url    http://lineadecodigo.com/php/consulta-a-una-base-de-datos-mysql-con-php/
 * @description C—digo que realiza una consulta a una BD MySQL
 */
?>


<!doctype html>
<html>
<head><title>Consultar BD MySQL en PHP</title>
<style type="text/css">
thead {
 background-color:#6199EC;
 color:#fff;">
 }
 
table td {
  border:thin solid #000;
  }
  
</style>


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
echo "El n&uacute;mero de elementos es ".$numfilas;

?>

<table>
<thead>
<tr>
<td>ISBN</td>
<td>T&iacute;tulo</td>
<td>Fecha</td></tr>
</thead>

<?php 

	
	
for ($x=0;$x<$numfilas;$x++) {
	$fila = $result->fetch_object();
	echo "<tr>";
	echo "<td>".$fila->ISBN."</td>";
	echo "<td>".$fila->Titulo."</td>";
	echo "<td>".$fila->Fecha."</td>";
	echo "</tr>";
}

$result->free();
$db->close();


?>
</table>


</body>
</html>
