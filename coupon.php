<?php

//Implementar patrón Strategy

class carCoupon {
    // se podrían crear métodos setIsHighSeason y setBigStock, de momento
    // he probado los casos manualmente
    private $discount = 0;
    public $isHighSeason = false;
    public $bigStock = true;

    public function coupon() {
        if ($this->isHighSeason) {
            $this->discount += $this->addSeasonDiscount();
        }
        if ($this->bigStock) {
            $this->discount += $this->addStockDiscount();
        }
        return $coupon = "Get {$this->discount}% off the price of your new car.";
    }
}

interface carCouponGenerator {
    public function addSeasonDiscount();
    public function addStockDiscount();
}

class bmwCouponGenerator extends carCoupon implements carCouponGenerator {
    public function addSeasonDiscount(){
        return 5;
    }
    
    public function addStockDiscount(){
        return 7;  
    }
}

class mercedesCouponGenerator extends carCoupon implements carCouponGenerator {
    public function addSeasonDiscount(){
        return 4;
    }
    
    public function addStockDiscount(){
        return 10;  
    }
}

//Ejemplo de utilización

$coupon1 = new bmwCouponGenerator();
$coupon2 = new mercedesCouponGenerator();

echo $coupon1->coupon()."<br>";
echo $coupon2->coupon()."<br>";
