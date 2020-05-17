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

        echo "<p>HOLA! soy un $this->marca,modelo $this->modelo</p>";

    }

}

#OBJETO :
#Una entidad provista de métodos o mensajes a los cuales corresponden propiedades con valores concretos.

$a = new Automovil();
$a -> marca = "Toyota";
$a -> modelo = "Corolla";
$a -> mostrar();


?>