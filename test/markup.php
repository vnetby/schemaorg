<?php

/**
 * - Testing markup
 */

use Vnetby\Schemaorg\Types\Thing\CreativeWork\Movie;
use Vnetby\Schemaorg\Types\Thing\Person\Person;

require __DIR__ . '/../vendor/autoload.php';

?>

<div <?= Movie::scope(); ?>>
    <h1 <?= Movie::prop('name'); ?>>Avatar</h1>
    <?= Movie::meta('poster', 'https://path-to-poster.jpg'); ?>
    <div <?= Movie::prop('author', '', Person::class); ?>>
        <?= Movie::link('https://authorurl.com/'); ?>
    </div>
</div>