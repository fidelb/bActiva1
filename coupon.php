<?php

//Implementar patrón Strategy

class descuentos {

    private $strategy;
    // se podrían crear métodos setIsHighSeason y setBigStock, de momento
    // he probado los casos manualmente
    private $discount = 0;
    public $isHighSeason = false;
    public $bigStock = true;

    public function __construct(carCouponGenerator $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(carCouponGenerator $strategy)
    {
        $this->strategy = $strategy;
    }

    public function generarCupon() {
        if ($this->isHighSeason) {
            $this->discount += $this->strategy->addSeasonDiscount();
        }
        if ($this->bigStock) {
            $this->discount += $this->strategy->addStockDiscount();
        }
        return $coupon = "Get {$this->discount}% off the price of your new car.";
    }
    
}

interface carCouponGenerator {
    public function addSeasonDiscount();
    public function addStockDiscount();
}

class bmwCouponGenerator implements carCouponGenerator {
    public function addSeasonDiscount(){
        return 5;
    }
    
    public function addStockDiscount(){
        return 7;  
    }
}

class mercedesCouponGenerator implements carCouponGenerator {
    public function addSeasonDiscount(){
        return 4;
    }
    
    public function addStockDiscount(){
        return 10;  
    }
}

//Ejemplo de utilización

$coupon1 = new descuentos(new bmwCouponGenerator());
$coupon2 = new descuentos(new mercedesCouponGenerator());

echo $coupon1->generarCupon()."<br>";
echo $coupon2->generarCupon()."<br>";
