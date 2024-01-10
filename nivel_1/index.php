<?php

require_once __DIR__."/Tiger.php";

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