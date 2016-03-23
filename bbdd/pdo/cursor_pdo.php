<?php

/**
 * @file cursor_pdo.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   22/marzo/2016
 * @url    http://lineadecodigo.com/php/cursor-pdo/
 * @description Recorrer un cursor con PDO
 */

try {
	$db = new PDO('mysql:host=localhost;dbname=lineadecodigo;charset=utf8mb4', 'usuario', 'password');	
	
	echo '<h1>Listado de Usuarios</h1>';
	
	foreach($db->query('SELECT first_name,last_name FROM users') as $row) {
		echo $row['first_name'].' '.$row['last_name'].'<br/>';
	}
	
} catch(PDOException $ex) {
	echo 'Error. '.$ex->getMessage();
}




	
