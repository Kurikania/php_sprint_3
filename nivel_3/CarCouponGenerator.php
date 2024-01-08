<?php 
interface CarCouponGenerator {
  public function addSeasonDiscount(): void;
  public function addStockDiscount(): void;
  public function getDiscount() :int;
}