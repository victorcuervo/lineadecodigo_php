<?php
/**
 * @file fecha.php
* @version 1.0
* @author V’ctor Cuervo (http://lineadecodigo.com)
* @date   31-agosto-2013
* @url    http://lineadecodigo.com/php/xxx/
* @description Programa que nos muestra el mes del a–o en el que estamos
*/

date_default_timezone_set("Europe/Madrid");
locale_set_default('es-ES');
echo "Ahora estamos en el mes de ".date("F");

?>