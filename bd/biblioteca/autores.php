<!DOCTYPE html>
<html>
<head><title>Autores</title>
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

<h1>Autores</h1>
<?php include ("cabecera.php")?>

<h2>Listado de Autores</h2>
<?php 


@ $db = new mysqli(localhost, "root", "", "biblioteca");

if (mysqli_connect_errno()){
	echo "Error conectando con la base de datos";
	exit;
} else {

	$query = "SELECT idautor,autor FROM autores";
	$result = $db->query($query);

	$numfilas = $result->num_rows;
	echo "El n&uacute;mero de elementos es ".$numfilas;

?>

	<table>
	<thead>
	<tr>
	<td>Id Autor</td>
	<td>Autor</td>
	<td></td></tr>
	</thead>

<?php 

	
	
	for ($x=0;$x<$numfilas;$x++) {
		$fila = $result->fetch_object();
		echo "<tr>";
		echo "<td>".$fila->idautor."</td>";
		echo "<td>".$fila->autor."</td>";
		echo "<td><a href='deleteAutor.php?autor=".$fila->idautor."'>Eliminar Autor</a></td>";
		echo "</tr>";
	}
	
	$result->free();
	$db->close();
}

?>
</table>

<h2>Alta de Autores</h2>
<form action="insertAutor.php" method="post">
<fieldset>
<label for="nombre">Nombre</label>
<input type="text" id="nombre" name="nombre" size="100"/><br/>
<input type="submit" value="Alta de Autor"/>
</fieldset>
</form>

</body>
</html>
