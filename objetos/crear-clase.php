<?php

/**
 * @file crear-clase.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   27/enero/2024
 * @url    http://lineadecodigo.com/php/xxx/
 * @description Crear una clase que representa un libro
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