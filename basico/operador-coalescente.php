<?php
/**
 * @file operador-coalescente.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   27/enero/2024
 * @url    http://lineadecodigo.com/php/xxx/
 * @description Uso del operador coalescente nulo para gestionar variables no seteadas.
 */

$nombre = 'Víctor';

$saludo = "Hola ";

if (isset($nombre)) {
    $saludo.= $nombre;
} else {
    $saludo.= "a todos";
}

echo $saludo;

$salud2 = "Hola ";

$salud2 .= $nombre ?? "a todos";
echo $salud2;

?>