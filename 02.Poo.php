<?php

#CLASE :
#Una clase es un modelo que se utiliza para crear objetos que comparte un mismo comportamiento, estado e identidad.

class Automovil{

    #PROPIEDADES :
    #Son las caracteristicas que puede tener un objeto.

    public $marca;
    public $modelo;

    #MÉTODO :
    #Es el algoritmo asociado a un objeto que indica la capacidad de lo que este puede hacer. La unica diferencia entre metodo y función, es que llamamos método a las funciones de una clase (en la poo), mientras que llamamos funciones a los aloritmos de la programación estructurada.

    public function mostrar(){

        echo "<p>HOLA! soy un $this->marca, modelo $this->modelo</p>";

    }

}

#OBJETO :
#Una entidad provista de métodos o mensajes a los cuales corresponden propiedades con valores concretos.

$a = new Automovil();
$a -> marca = "Toyota";
$a -> modelo = "Corolla";
$a -> mostrar();

$b = new Automovil();
$b -> marca = "Hyundai";
$b -> modelo = "Accent Vision";
$b -> mostrar();

$b = new Automovil();
$b -> marca = "Mazda";
$b -> modelo = "2";
$b -> mostrar();

$c = new Automovil();
$c -> marca = "Ford";
$c -> modelo = "EcoSport";
$c -> mostrar();

$d = new Automovil();
$d -> marca = "Fiat";
$d -> modelo = "Bravo";
$d -> mostrar();

$e = new Automovil();
$e -> marca = "Ferrari";
$e -> modelo = "458 Italia";
$e -> mostrar();

$f = new Automovil();
$f -> marca = "Honda";
$f -> modelo = "Jazz";
$f -> mostrar();

$g = new Automovil();
$g -> marca = "Hyundai";
$g -> modelo = "Tucson";
$g -> mostrar();

#Principios de la POO  que se cumplen en este ejemplo:

#ABSTRACCIÓN: Nuevos de datos (el que tu quieras, tu lo creas)
#ENCAPSULAMIENTO: Organizar el código en grupos lógicos
#OCULTAMIENTO: Ocultar detalles de implementación y exponer sólo los detalles que sean necesarios para el resto del sistema

?>