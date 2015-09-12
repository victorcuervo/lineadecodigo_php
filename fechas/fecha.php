<?php
/**
 * @file fecha.php
* @version 1.0
* @author Christian Portilla (http://lineadecodigo.com)
* @date   31-agosto-2013
* @url    http://lineadecodigo.com/php/xxx/
* @description Mostrar la fecha por pantalla.
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