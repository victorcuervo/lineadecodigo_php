<?php

/**
 * @file array-objetos.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   27/enero/2024
 * @url    https://lineadecodigo.com/php/array-de-objetos-en-php/
 * @description Crear un array que contenga objetos y luego recorrerlo.
 */

class Libro {

    private $titulo;
    private $autor;

    public function __construct($titulo,$autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

}


$l1 = new Libro("Roma Soy Yo","Santiago Posteguillo");
$l2 = new Libro("Alexandros","Valerio Massimo Manfredi");
$l3 = new Libro("La Pirámide Inmortal","Javier Sierra");

$libros = array();
$libros[0] = $l1;
$libros[1] = $l2;
$libros[3] = $l3;

foreach ($libros as $libro) {
    echo $libro->getTitulo()."\n";
}



?>