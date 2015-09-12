<!DOCTYPE html>
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
<h1>Libros</h1>
<?php include ("cabecera.php")?>

<h2>Listado de Libros</h2>
<?php 


@ $db = new mysqli(localhost, "root", "", "biblioteca");

if (mysqli_connect_errno()){
	echo "Error conectando con la base de datos";
	exit;
} else {

	$query = "SELECT isbn,titulo,autor,editorial,fecha FROM libros,autores,editoriales WHERE libros.idautor=autores.idautor AND libros.ideditorial=editoriales.ideditorial";
	$result = $db->query($query);

	$numfilas = $result->num_rows;
	echo "El n&uacute;mero de elementos es ".$numfilas;

?>

	<table>
	<thead>
	<tr>
	<td>ISBN</td>
	<td>T&iacute;tulo</td>
	<td>Autor</td>
	<td>Editorial</td>	
	<td>Fecha</td>
	<td></td></tr>
	</thead>

<?php 

	
	
	for ($x=0;$x<$numfilas;$x++) {
		$fila = $result->fetch_object();
		echo "<tr>";
		echo "<td>".$fila->isbn."</td>";
		echo "<td>".$fila->titulo."</td>";
		echo "<td>".$fila->autor."</td>";
		echo "<td>".$fila->editorial."</td>";
		echo "<td>".$fila->fecha."</td>";
		echo "<td><a href='deleteLibro.php?isbn=".$fila->isbn."'>Eliminar Libro</a></td>";
		echo "</tr>";
	}

}

?>
</table>

<h2>Alta de Libros</h2>
<form action="insertLibro.php" method="post">
<fieldset>
<legend>Alta de Libros</legend>
<label for="isbn">ISBN: </label>
<input type="text" id="isbn" name="isbn" size="13"/><br/>
<label for="titulo">Titulo: </label>
<input type="text" id="titulo" name="titulo" size="200"/><br/>


<label for="autor">Autor: </label>
<?php 
$query = "SELECT idautor,autor FROM autores";
$result = $db->query($query);
$numfilas = $result->num_rows;

echo "<select id='autor' name='autor'>";
for ($x=0;$x<$numfilas;$x++) {
	$fila = $result->fetch_object();
	echo "<option value='".$fila->idautor."'>".$fila->autor."</option>";
}
echo "</select>"
?><br/>

<label for="editorial">Editorial: </label>
<?php 
$query = "SELECT ideditorial,editorial FROM editoriales";
$result = $db->query($query);
$numfilas = $result->num_rows;

echo "<select id='editorial' name='editorial'>";
for ($x=0;$x<$numfilas;$x++) {
	$fila = $result->fetch_object();
	echo "<option value='".$fila->ideditorial."'>".$fila->editorial."</option>";
}
echo "</select>"
?><br/>


<label for="fecha">Fecha Publicaci&oacute;n: </label>
<input type="date" name="fecha" id="fecha"><br/>


<input type="reset" value="Limpiar Datos"/> <input type="submit" value="Alta de Libro"/><br/>
</fieldset>
</form>



</body>
</html>
