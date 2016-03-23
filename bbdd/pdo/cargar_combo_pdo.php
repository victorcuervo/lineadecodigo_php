<?php

/**
 * @file cargr_combo_pdo.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   22/marzo/2016
 * @url    http://lineadecodigo.com/php/cargar-combo-desde-bbdd-php-pdo/
 * @description Cargar un combo con PHP PDO
 */

try {
	$db = new PDO('mysql:host=localhost;dbname=lineadecodigo;charset=utf8mb4', 'usuario', 'password');

	echo '<h1>Paises</h1>';

	echo '<select>';
	foreach($db->query('SELECT id,country FROM country') as $row) {
		echo '<option value="'.$row['id'].'">'.$row['country'].'<option/>';
	}
	echo '</select>';

} catch(PDOException $ex) {
	echo 'Error. '.$ex->getMessage();
}

	
