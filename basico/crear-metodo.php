<?
/**
 * @file crear-metodo.php
 * @version 1.0
 * @author Christian Portilla (http://lineadecodigo.com)
 * @date   14-junio-2013
 * @url    http://lineadecodigo.com/php/definir-una-constante-en-php/
 * @description Uso de la sentencia define para la creaci—n de constantes en PHP.
 */

//Metodo para sumar dos enteros

function metodoSumar($i,$j){
	$i=intval(trim($i));//obtener parte entera de $i
	$j=intval(trim($j));//obtener parte entera de $j
	return $i+$j;
}


// Llamamos al mŽtodo con diferentes valores
echo metodoSumar(200,797)."<br>";
echo metodoSumar('123','97')."<br>";
echo metodoSumar('123.78','97.90')."<br>";
echo metodoSumar('b','a')."<br>";


?>