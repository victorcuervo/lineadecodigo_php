<?php
/**
 * @file crear-objeto-vacio.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   10-mayo-2013
 * @url    http://lineadecodigo.com/php/crear-un-objeto-vacio-en-php/
 * @description Utilizar la clase stdClass para crear un objeto vac’o en PHP y poder empezar a asignarle propiedades.
 */

$objeto = new stdClass();
echo "Tipo de la variable objeto es ".gettype($objeto);
var_dump($objeto);

?>