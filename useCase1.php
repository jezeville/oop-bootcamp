<?php
declare(strict_types=1);
// Banana's (6 pieces, costing €1 each)
// Apples (3 pieces, costing €1.5 each)
// Bottles of wine (2 bottles, costing €10 each)


//Without class
    $totalPrice = (6*1) + (3*1.5) + (2*10);
    $taxe = (((6*1) + (3*1.5))/100*6)+((2*10)/100*21);

    echo $totalPrice ."<br>";
    echo $taxe."<br>";


//With class

    class course {
        const BANANE = 1 ;
        const POMME = 1.5 ;
        const VIN = 10 ;
        const TAXE_FRUIT = 0.06;
        const TAXE_VIN = 0.21;

        public int $nombreBanane;
        public int $nombrePomme;
        public int $nombreVin;

        public function __construct ($nombreBanane , $nombrePomme , $nombreVin)
        {
            $this->banane = $nombreBanane;
            $this->pomme =  $nombrePomme;
            $this->vin = $nombreVin;
        }

        public function price ()
        {
            $price = (self::BANANE * $this->banane) + (self::POMME * $this->pomme) + (self::VIN * $this->vin);
            return $price ; 
        }

        public function taxe ()
        {
            $taxeFruit = ((self::BANANE * $this->banane) + (self::POMME * $this->pomme))*self::TAXE_FRUIT;
            $taxeVin =  (self::VIN * $this->vin) * self::TAXE_VIN;
            return  $taxeFruit + $taxeVin;
        }
    }


    $panier1 = new course (6,3,2);
    echo $panier1->price()."<br>";
    echo $panier1->taxe()."<br>";
?>