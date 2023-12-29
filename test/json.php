<?php

use Vnetby\Schemaorg\DataTypes\DataDate;
use Vnetby\Schemaorg\Jsonld;
use Vnetby\Schemaorg\Types\Thing\Event\Event;

require __DIR__ . '/../vendor/autoload.php';

$event = (new Event)
    ->setEndDate('23-03-1995')
    ->setStartDate(new DataDate('23-03-1995'));


$jsonld = Jsonld::create($event)->toArray();

echo '<pre>';
print_r($jsonld);
echo '</pre>';
