<?php

#código Imperativo o espagueti

$automovil1 = (object)["marca"=>"Toyota", "modelo"=>"Corolla"];
$automovil2 = (object)["marca"=>"Hyundai", "modelo"=>"Accent Vision"];
$automovil3 = (object)["marca"=>"Ford", "modelo"=>"EcoSport"];
$automovil4 = (object)["marca"=>"Fiat", "modelo"=>"Bravo"];
$automovil5 = (object)["marca"=>"Ferrari", "modelo"=>"458 Italia"];
$automovil6 = (object)["marca"=>"Honda", "modelo"=>"Jazz"];
$automovil7 = (object)["marca"=>"Hyundai", "modelo"=>"Tucson"];

function mostrar($automovil){

    echo "<p>HOLA! soy un $automovil->marca, modelo $automovil->modelo</p>";

}

mostrar($automovil1);
mostrar($automovil2);
mostrar($automovil3);
mostrar($automovil4);
mostrar($automovil5);
mostrar($automovil6);
mostrar($automovil7);


?>