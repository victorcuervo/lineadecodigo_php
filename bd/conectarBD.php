<?php
/**
 * @file conectarBD.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   12-enero-2013
 * @url    http://lineadecodigo.com/php/conectarse-a-mysql-con-php/
 * @description Programa que se conecta a una base de datos mysql
 */
?>


<!doctype html>
<html>
<head><title>Conectar BD MySQL en PHP</title>
</head>
<body>
<h1>Conectar BD MySQL en PHP</h1>


<?php 

@ $db = new mysqli(localhost, "root", "", "biblioteca");

if ($db->connect_error)
	die('Error de Conexion ('.$db->connect_errno.')'.$db->connect_error);

echo "Conexion correcta con la base de datos... ".$db->host_info;
$db->close();

?>

</body>
</html>


