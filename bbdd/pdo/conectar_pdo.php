<?php

/**
 * @file conectar_pdo.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   22/marzo/2016
 * @url    http://lineadecodigo.com/php/conectar-bbdd-php-pdo/
 * @description Conectarse a una base de datos mediante PDO
 */

try {
	$db = new PDO('mysql:host=localhost;dbname=lineadecodigo;charset=utf8mb4', 'usuario', 'password');
	echo 'Conectado a '.$db->getAttribute(PDO::ATTR_CONNECTION_STATUS);
} catch(PDOException $ex) {
	echo 'Error conectando a la BBDD. '.$ex->getMessage(); 
}


	
