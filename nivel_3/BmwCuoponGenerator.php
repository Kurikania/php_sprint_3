<?php
require_once __DIR__ . "/CarCouponGenerator.php";
/*Me*/
class BmwCouponGenerator implements CarCouponGenerator
{
    private int $discount = 0;
    private bool $isHighSeason = false;
    private bool $bigStock = true;

    public function __construct($isHighSeason, $bigStock)
    {
        $this->isHighSeason = $isHighSeason;
        $this->bigStock = $bigStock;
    }
    public function addSeasonDiscount() : void
    {
        if (!$this->isHighSeason) $this->discount += 5;
    }

    public function addStockDiscount(): void
    {
        if ($this->bigStock)  $this->discount += 7;
    }

    public function getDiscount() :int
    {
        $this->addStockDiscount();
        $this->addSeasonDiscount();
        return $this->discount;
    }
}
