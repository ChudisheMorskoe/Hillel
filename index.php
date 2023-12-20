<?php

use App\DeliveryCalculator;

require __DIR__.'/vendor/autoload.php';

$weight = new DeliveryCalculator(100, 10, 10, 10, 10);
$valueWeightPrice = new DeliveryCalculator(10, 100, 100, 100, 10);
$highSellerPrice = new DeliveryCalculator(10, 10, 10, 10, 10000);

var_dump($weight->calculate());
var_dump($valueWeightPrice->calculate());
var_dump($highSellerPrice->calculate());