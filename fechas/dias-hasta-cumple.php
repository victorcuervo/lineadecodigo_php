<?php
/**
 * @file fecha.php
* @version 1.0
* @author V’ctor Cuervo (http://lineadecodigo.com)
* @date   31-agosto-2013
* @url    http://lineadecodigo.com/php/xxx/
* @description Calcular cuantos d’as quedan hasta tu cumplea–os.
*/

date_default_timezone_set("America/Lima");
//extraemos la fecha usando la funcion date
// d: dia
// m: mes
// Y: a–o en cuatro digitos
echo date("d/m/Y")."<br/>";
echo date("c")."<br/>";
echo date("H:i:s")."<br/>";
echo "Hoy es el dia ".date("w")." de la semana";

?>