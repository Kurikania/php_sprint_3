<?php
class Tiger
{

    private static ?Tiger $_object;
    private int $rugidos = 0;

    private function __construct()
    {
        echo "Building character..." . PHP_EOL;
    }

    private function __clone() {}

    public function roar() : void
    {
        $this->rugidos++;
        echo "Grrr!" . PHP_EOL;
    }

    /* No tenemos subclases y por eso lo hago algo mas sencillo */
    public static function getInstance() : Tiger
    {
        self::$_object ??= new self();
        return self::$_object;
    }

    public function getCounter(): int
    {
        return $this->rugidos;
    }

}
