<?php

use App\Farm;
use App\Cow;
use App\Chicken;

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadPath1)) {
    include_once $autoloadPath1;
} else {
    include_once $autoloadPath2;
}

$farm = new Farm(['Cow' => 10, 'Chicken' => 20]);

print_r($farm->getAnimalsCount());

$farm->collectProducts();
$farm->collectProducts();
$farm->collectProducts();
$farm->collectProducts();
$farm->collectProducts();
$farm->collectProducts();
$farm->collectProducts();

print_r($farm->getStoreInfo());

$farm->add(new Chicken());
$farm->add(new Chicken());
$farm->add(new Chicken());
$farm->add(new Chicken());
$farm->add(new Chicken());
$farm->add(new Cow());

print_r($farm->getAnimalsCount());

$farm->collectProducts();
$farm->collectProducts();
$farm->collectProducts();
$farm->collectProducts();
$farm->collectProducts();
$farm->collectProducts();
$farm->collectProducts();

print_r($farm->getStoreInfo());
