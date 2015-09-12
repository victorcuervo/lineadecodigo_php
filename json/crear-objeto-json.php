<?php

/**
 * @file crear-objeto-json.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   10-mayo-2013
 * @url    http://lineadecodigo.com/php/crear-un-objeto-json-en-php/
 * @description Crear un objeto JSON en PHP apoy‡ndonos en la funci—n json_encode del lenguaje..
 */

$pregunta = new stdClass();
$pregunta->titulo = "Altitud del monte Everest";
$pregunta->categoria = "Cultura";
//$pregunta->respuestas = array(8850,8900,8875);
$pregunta->respuestas = array("respuesta1"=>8850,"respuesta2"=>8900,"respuesta3"=>8875);


$json = json_encode($pregunta);
echo $json;


?>