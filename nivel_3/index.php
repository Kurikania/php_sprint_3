<?php 

require_once __DIR__ . "/BmwCuoponGenerator.php";
require_once __DIR__ . "/MercedesCuoponGenerator.php";
require_once __DIR__ . "/CarSale.php";

$carSale = new CarSale(new MercedesCouponGenerator(false, true));

echo $carSale->getCoupon();
  
$carSale->setCoupon(new BmwCouponGenerator(false, true));
echo $carSale->getCoupon();