<?php
/**
 * @file operador-nave-espacial.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   28/enero/2024
 * @url    https://lineadecodigo.com/blog/operador-nave-espacial-spaceship-en-php/
 * @description Cómo utilizar el operador nave espacial <=>
 */


$n1 = 10;
$n2 = 1;

 switch ($n1 <=> $n2) {
    case 0:
        echo 'Los dos núneros son iguales';
        break;
    case -1:
        echo "$n2 es más grande";
        break;
    case 1:
        echo "$n1 es más grande";
 }

$numeros = [1,2,3,4,5,6,7,8,9,10];
shuffle($numeros);
print_r($numeros);

usort($numeros, function ($a, $b) {
    return $a <=> $b; // Ordenar de menor a mayor
});

print_r($numeros);