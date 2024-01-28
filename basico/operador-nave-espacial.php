<?php
/**
 * @file operador-nave-espacial.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   28/enero/2024
 * @url    http://lineadecodigo.com/php/xxx/
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
 