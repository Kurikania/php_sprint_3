<?php 
require_once __DIR__."/poultry.php";
class TurkeyAdapter extends Duck {
    private $adaptee;

    public function __construct($adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function quack()
    {
        $this->adaptee->gobble();
    }

    public function gobble()
    {
        $this->adaptee->gobble();
    }

    public function fly()
    {
        for ($i=0; $i < 5; $i++) {
            $this->adaptee->fly();
        }
    }
}