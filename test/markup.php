<?php

/**
 * - Testing markup
 */

use Vnetby\Schemaorg\Types\Thing\CreativeWork\Movie;
use Vnetby\Schemaorg\Types\Thing\Person\Person;

require __DIR__ . '/../vendor/autoload.php';

?>

<div <?= Movie::itemscope(); ?>>
    <h1 <?= Movie::itemprop('name', Person::class); ?>>Avatar</h1>
</div>