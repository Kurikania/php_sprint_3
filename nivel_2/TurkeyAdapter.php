<?php 
require_once __DIR__."/poultry.php";
class TurkeyAdapter extends Duck {
    private $adaptee;

    public function __construct($adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function quack() : void
    {
        return $this->adaptee->gobble();
    }

    public function gobble() : void
    {
        return $this->adaptee->gobble();
    }

    public function fly() : void
    {
        return $this->adaptee->fly();
    }
}