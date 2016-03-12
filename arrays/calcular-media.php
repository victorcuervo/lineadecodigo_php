<?php

/**
 * @file calcular-media.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   12/marzo/2016
 * @url    http://lineadecodigo.com/php/media-promedio-php/
 * @description Calculo de la media de dos números.
 */

$numeros = [1,2,3,4];

// Calculamos la media o promedio
echo 'Media o Promedio de un conjunto de números ';
echo array_sum($numeros)/count($numeros);



// Otra forma de calcular la suma.
$suma = 0;
for ($x=0;$x<count($numeros);$x++)
	$suma += $numeros[$x];
	
echo $suma;
