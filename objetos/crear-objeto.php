<?php

/**
 * @file crear-objeto.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   10-mayo-2013
 * @url    http://lineadecodigo.com/php/crear-un-objeto-en-php/
 * @description Art’culo que nos explica como podemos crear un objeto en PHP utilizando el sencillo ejemplo de un libro y sus propiedades.
 */

$libro = new stdClass();
$libro->titulo = "Las legiones malditas";
$libro->autor = "Santiago Posteguillo";
$libro->editorial = "Ediciones B";
$libro->fechaPublicacion = 2008;

var_dump($libro);

?>