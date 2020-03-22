<?php
/**
 * @file reemplazar-cadena.php
 * @version 1.0
 * @author Víctor Cuervo (http://lineadecodigo.com)
 * @date   08/febrero/2020
 * @url    http://lineadecodigo.com/php/reemplazar-caracteres-en-una-cadena-php/
 * @description Ejemplo que sustituye un caracter 'x' dentro de una cadena por un número.
 */


$lista = '12345xxxxx';
echo 'Cadena Inicial: '.$lista."\n";

while (strpos($lista, 'x')) {
	$lista = preg_replace('/x/', rand(0,9), $lista, 1);
}

echo 'Cadena Final: '.$lista;
?>