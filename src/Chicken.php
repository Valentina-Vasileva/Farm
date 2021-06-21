<?php

namespace App;

use App\Animal;

class Chicken extends Animal
{
    public function __construct(int $eggsMin = 0, int $eggsMax = 1, string $productionType = 'chicken eggs')
    {
        $this->productMinPerDay = $eggsMin;
        $this->productMaxPerDay = $eggsMax;
        $this->productionType = $productionType;
    }
}
