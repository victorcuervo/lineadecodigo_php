<?php

/**
 * @file clase-anonima.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   28/enero/2024
 * @url    http://lineadecodigo.com/php/xxx/
 * @description Crear una clase anónima
 */

function cuadrado ($numero,$escritor) {
    for ($x=0;$x<=$numero;$x++) {
        $escritor->escribir($x);
    }
}

cuadrado(4,new class {
    public function escribir($mensaje){
        print_r("Log >> ".$mensaje."\n");
    }
});

