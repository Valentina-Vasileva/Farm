<?php

namespace App;

class Farm
{
    private $store = [];
    private $animals = [];

    public function __construct(array $animals = [])
    {
        foreach ($animals as $class => $count) {
            for ($i = 1; $i <= $count; $i++) {
                $animal = new $class();
                $this->animals[spl_object_id($animal)] = $animal;
            }
        }
    }

    public function getAnimalsCount(): array
    {   
        return array_reduce($this->animals, function ($acc, $animal) {
            $type = $animal->getType();
            if (array_key_exists($type, $acc)) {
                $acc[$type] = $acc[$type] + 1;
            } else {
                $acc[$type] = 1;
            }
            return $acc;
        }, []);
    }

    public function collectProducts(): void
    {
        foreach ($this->animals as $animal) {
            $newProduction = $animal->collectProducts();
            $productType = $animal->getProductionType();

            if (array_key_exists($productType, $this->store)) {
                $this->store[$productType] = $this->store[$productType] + $newProduction;
            } else {
                $this->store[$productType] = $newProduction;
            }
        }
    }

    public function getStoreInfo(): array
    {
        return $this->store;
    }

    public function add(AnimalInterface $animal): void
    {
        $this->animals[spl_object_id($animal)] = $animal;
    }
}
