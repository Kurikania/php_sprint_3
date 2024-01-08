<?php 
require_once __DIR__."/CarCouponGenerator.php";

/**
 * The Context defines the interface of interest to clients.
 */
class CarSale {
    private CarCouponGenerator $coupon;
    public function __construct(CarCouponGenerator $coupon)
    {
      $this->coupon = $coupon;
    }

    public function setCoupon(CarCouponGenerator $coupon) {
        $this->coupon = $coupon;
    }
     
    public function getCoupon() : string
    {
      $discount = $this->coupon->getDiscount();
      return "Get {$discount}% off the price of your new car." . PHP_EOL;
    }
  }