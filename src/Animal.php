<?php

namespace App;

abstract class Animal implements AnimalInterface
{
    protected $productMinPerDay;
    protected $productMaxPerDay;
    protected $productionType;

    public function collectProducts(): int
    {
        return rand($this->productMinPerDay, $this->productMaxPerDay);
    }

    public function getType(): string
    {
        $reflect = new \ReflectionClass($this);
        return $reflect->getShortName();
    }

    public function getTypeOfProducts(): string
    {
        return $this->productionType;
    }
}
