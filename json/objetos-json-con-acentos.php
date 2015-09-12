<?php

/**
 * @file crear-objeto-json.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   10-mayo-2013
 * @url    http://lineadecodigo.com/php/manejar-objetos-json-con-acentos-en-php/
 * @description Como manejar objetos JSON con acentos en PHP mediante la conversi—n de las cadenas de texto a UTF8.
 */

$objeto = new stdClass();
$objeto->texto = "V’ctor";
$json = json_encode($objeto);
echo $json;

$objeto->texto = utf8_encode("V’ctor");
$json = json_encode($objeto);
echo $json;

?>