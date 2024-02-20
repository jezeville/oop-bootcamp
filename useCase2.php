<?php
declare(strict_types=1);

class course {
    const BANANE = 1 ;
    const POMME = 1.5 ;
    const VIN = 10 ;
    const TAXE_FRUIT = 0.06;
    const TAXE_VIN = 0.21;
    const REDUCTION = 0.5;

    public int $nombreBanane;
    public int $nombrePomme;
    public int $nombreVin;

    public function __construct ($nombreBanane , $nombrePomme , $nombreVin)
    {
        $this->banane = $nombreBanane;
        $this->pomme =  $nombrePomme;
        $this->vin = $nombreVin;
    }

    public function reduction($fruit)
    {
        return $fruit * self::REDUCTION;
    }

    public function price ()
    {
        $price = (($this->reduction(self::BANANE) * $this->banane) + (($this->reduction(self::POMME)) * $this->pomme))*self::REDUCTION + (self::VIN * $this->vin);
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