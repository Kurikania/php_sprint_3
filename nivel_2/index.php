<?php 
require_once __DIR__."/TurkeyAdapter.php";
require_once __DIR__."/poultry.php";
/*
Adaptador
El siguiente problema fue adaptado de [FREEMAN] págs. 238-240.

Supone que tienes las siguientes dos clases de PHP.

Archivo: poultry.php

¿Quieres que sus pavos se comporten como patos, por lo que tienes que aplicar el adaptador pattern. En el mismo archivo, escribe una clase llamada TurkeyAdapter y asegúrate de que tenga en cuenta lo siguiente:

La traducción del quack entre clases es fácil: simplemente llama al método Gobble cuando sea apropiado.

Aunque ambas clases tienen un método fly, los pavos sólo pueden volar a rachas cortas, no pueden volar largas distancias como los patos. Para mapear entre el método fly de un pato y el método del pavo, debe llamarse al método fly del pavo cinco veces para compensarlo.

Output
The expected output is as follows:
The Turkey says...
Gobble gobble
I'm flying a short distance
The Duck says...
Quack
I'm flying
The TurkeyAdapter says...
Gobble gobble
I'm flying a short distance
I'm flying a short distance
I'm flying a short distance
I'm flying a short distance
I'm flying a short distance
 */

 function duck_interaction($duck) {
    $duck->quack();
    $duck->fly();
}

$duck = new Duck;
$turkey = new Turkey;
$turkey_adapter = new TurkeyAdapter($turkey);
echo "The Turkey says...\n";
$turkey->gobble();
$turkey->fly();
echo "The Duck says...\n";
duck_interaction($duck);
echo "The TurkeyAdapter says...\n";
duck_interaction($turkey_adapter);