<?php

namespace App;

use App\Animal;

class Cow extends Animal
{
    public function __construct($milkMin = 8, $milkMax = 12, $productionType = 'litres of cow milk')
    {
        $this->productMinPerDay = $milkMin;
        $this->productMaxPerDay = $milkMax;
        $this->productionType = $productionType;
    }
}
