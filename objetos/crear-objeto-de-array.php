<?php

/**
 * @file crear-objeto-de-array.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   10-mayo-2013
 * @url    http://lineadecodigo.com/php/crear-un-objeto-desde-un-array-en-php/
 * @description Crear un objeto desde un array en PHP utilizando el forzado de tipos. Para ello utilizaremos un cast a un tipo object.
 */

//$miarray = array("titulo"=>"Las legiones malditas", "autor" => "Santiago Posteguillo", "editorial" => "Ediciones B", "fechaPublicacion" => 2008);

$miarray = array();
$miarray["titulo"] = "Las legiones malditas";
$miarray["autor"] = "Santiago Posteguillo";
$miarray["editorial"] = "Ediciones B";
$miarray["fechaPublicacion"] = 2008;

var_dump($miarray);
$libro = (object)$miarray;
var_dump($libro);

?>