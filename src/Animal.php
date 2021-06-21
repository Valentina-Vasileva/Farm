<?php

namespace App;

abstract class Animal implements AnimalInterface
{
    protected $productMinPerDay;
    protected $productMaxPerDay;
    protected $productionType;

    public function collectProducts()
    {
        return rand($this->productMinPerDay, $this->productMaxPerDay);
    }

    public function getType()
    {
        $reflect = new \ReflectionClass($this);
        return $reflect->getShortName();
    }

    public function getTypeOfProducts()
    {
        return $this->productionType;
    }
}
