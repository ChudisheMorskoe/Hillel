<?php

use App\Context;
use App\Strategy\FirstFormatStrategy;
use App\Strategy\SecondFormatStrategy;

require __DIR__ . '/vendor/autoload.php';

$object = [
    (object)
    [
    'brandName' => 'Ford',
    'model' => 'Mustang',
    'modelDetails' => 'GT rest 2',
    'modelYear' => 2014,
    'productionYear' => 2013,
    'color' => 'Oxford White'
],
    (object)
    [
        'brandName' => 'BMW',
        'model' => '520i',
        'modelDetails' => 'rest',
        'modelYear' => 2001,
        'productionYear' => 2001,
        'color' => 'Green'
    ]
];

$context = new Context($object);

$firstStrategy = new FirstFormatStrategy();
$resultFirst = $context->applyStrategy($firstStrategy);


$secondStrategy = new SecondFormatStrategy();
$resultSecond = $context->applyStrategy($secondStrategy);

dd($resultFirst,$resultSecond);
