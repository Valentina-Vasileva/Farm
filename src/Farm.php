<?php

namespace App;

class Farm
{
    private $store = [];
    private $animals;
    private $uniqueId = 1;

    public function __construct(array $animals = [])
    {
        $registredAnimals = array_map(function ($animalsCount) {
            $registrationNumbers = [];
            for ($i = 1; $i <= $animalsCount; $i++) {
                $registrationNumbers[] = $this->uniqueId;
                $this->uniqueId += 1;
            }
            return $registrationNumbers;
        }, $animals);

        $this->animals = $registredAnimals;
    }

    public function getAnimalsCount(): array
    {
        return array_map(fn($animal) => count($animal), $this->animals);
    }

    public function collectProducts(): void
    {
        foreach ($this->animals as $animalName => $numbers) {
            foreach ($numbers as $number) {
                $animalClass = "App\\{$animalName}";
                $animal = new $animalClass();
                $newProduction = $animal->collectProducts();
                $productType = $animal->getProductionType();

                if (array_key_exists($productType, $this->store)) {
                    $this->store[$productType] = $this->store[$productType] + $newProduction;
                } else {
                    $this->store[$productType] = $newProduction;
                }
            }
        }
    }

    public function getStoreInfo(): array
    {
        return $this->store;
    }

    public function add(AnimalInterface $animal): void
    {
        $typeOfAnimal = $animal->getType();
        $registrationNumber = $this->uniqueId;
        $this->uniqueId += 1;
        $this->animals[$typeOfAnimal][] = $registrationNumber;
    }
}
