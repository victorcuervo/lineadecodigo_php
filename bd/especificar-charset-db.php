<?php
/**
 * @file especificar-charset-db.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   19-mayo-2013
 * @url    http://lineadecodigo.com/php/cambiar-el-charset-en-la-conexion-a-mysql/
 * @description Código que nos muestra como cambiar el charset en la conexión a una base de datos MySQL, para cambiarlo de latin1 a utf8..
 */
?>


<!doctype html>
<html>
<head><title>Especificar Charset al conectarnos a una Base de Datos</title>
</head>
<body>
<h1>Especificar Charset al conectarnos a una Base de Datos</h1>


<?php 

@ $db = new mysqli(localhost, "root", "", "biblioteca");

if ($db->connect_error)
	die('Error de Conexion ('.$db->connect_errno.')'.$db->connect_error);

echo "Conexion correcta con la base de datos... <br>".$db->host_info."<br>";
echo "Utilizando un charset, por defecto, de tipo: ".$db->character_set_name()."<br>";
$db->set_charset('utf8');

echo "Utilizando un nuevo charset de tipo: ".$db->character_set_name();
$db->close();

?>

</body>
</html>