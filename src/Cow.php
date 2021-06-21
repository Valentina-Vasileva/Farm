<?php

namespace App;

use App\Animal;

class Cow extends Animal
{
    public function __construct(int $milkMin = 8, int $milkMax = 12, string $productionType = 'litres of cow milk')
    {
        $this->productMinPerDay = $milkMin;
        $this->productMaxPerDay = $milkMax;
        $this->productionType = $productionType;
    }
}
