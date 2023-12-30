<?php

require_once __DIR__."/Tiger.php";
/*Tienes la siguiente definición de clase que pretende modelar al famoso personaje de Tigger de los libros "Winnie The Pooh" de A A. Milne:
class Tigger {

       private function __construct() {
               echo "Building character..." . PHP_EOL;
       }

       public function roar() {
               echo "Grrr!" . PHP_EOL;
       }

}
Parece razonable esperar que sólo haya un objeto Tigger (después de todo, ¡él es el único!), pero la implementación actual permite tener múltiples objetos Tigger diferentes:

Refactorizar la clase Tigger en un Singleton considerando los siguientes puntos:

Define el método getInstance ()que carezca de argumentos. 
Esta función es responsable de crear una instancia de la clase Tigger sólo una vez y devolver esta única instancia cada vez que se llama.
Imprime en pantalla múltiples veces el rugido de Tigger.
Añade un método getCounter ()que devuelva el número de veces que Tigger ha realizado rugidos.
 */

 $s1 = Tiger::getInstance();
 $s2 = Tiger::getInstance();

 if ($s1 === $s2) {
     echo "Singleton works, both variables contain the same instance.". PHP_EOL;;
 } else {
     echo "Singleton failed, variables contain different instances.". PHP_EOL;
 }
 $s1->roar();
 $s2->roar();
 $s2->roar();
 echo $s1->getCounter();