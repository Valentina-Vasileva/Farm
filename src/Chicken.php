<?php

namespace App;

use App\Animal;

class Chicken extends Animal
{
    public function __construct($eggsMin = 0, $eggsMax = 1, $productionType = 'chicken eggs')
    {
        $this->productMinPerDay = $eggsMin;
        $this->productMaxPerDay = $eggsMax;
        $this->productionType = $productionType;
    }
}
