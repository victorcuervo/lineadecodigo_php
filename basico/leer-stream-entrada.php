<?php

/**
 * @file leer-stream-entrada.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   2-mayo-2013
 * @url    http://lineadecodigo.com/php/leer-el-stream-de-entrada-en-php/
 * @description C—mo leer el stream de entrada en PHP para poder recibir peticiones de tipo XML o JSON en nuestro servidor.
 */

// Una forma de acceder a todo el contenido que recibe
$datos = file_get_contents('php://input');
var_dump($datos);

?>