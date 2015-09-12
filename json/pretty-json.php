<?php

/**
 * @file pretty-json.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   19-mayo-2013
 * @url    http://lineadecodigo.com/php/xxx/
 * @description .
 */

$pregunta = new stdClass();
$pregunta->titulo = "Altitud del monte Everest";
$pregunta->categoria = "Cultura";
$pregunta->respuestas = array("respuesta1"=>8850,"respuesta2"=>8900,"respuesta3"=>8875);


$json = json_encode($pregunta,'JSON_PRETTY_PRINT');
echo $json;


?>