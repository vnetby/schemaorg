# PHP Schema.org

A small library for working with schema.org markup. Enables the generation of JSON-LD markup.

Schema.org documentation: https://schema.org/docs/full.html

## Installation

You can install the library via Composer. Add the following line to your composer.json file:

```json
{
    "require": {
        "vnetby/schemaorg": "#PACKAGE_VERSION#"
    }
}
```

Then run the following command:

```bash
composer install
```

You can install the latest version by running the command

```bash
composer require vnetby/schemaorg
```

## Usage

Create an instance of the class type you want to use for markup, pass an array of properties to it according to the schema.org documentation:

```php
use Vnet\Schemaorg\Types\Thing\Intangible\Trip\TouristTrip;
use Vnet\Schemaorg\Types\Thing\Place\AdministrativeArea\City;

$type = TouristTrip::fromArray([
    'name' => 'Trip name',
    'description' => 'Trip description',
    'itinerary' => [
        City::fromArray(['name' => 'City 1']),
        City::fromArray(['name' => 'City 2']),
        City::fromArray(['name' => 'City 3']),
        City::fromArray(['name' => 'City 4']),
        City::fromArray(['name' => 'City 5']),
    ]
]);
```

You can also set properties using the `setProp` method

```php
$type->setProp('name', 'Trip name')->setProp('description', 'Trip description');
```

After filling in the object of the specified type, pass it to the `Jsonld` class

```php
use Vnet\Schemaorg\Types\Thing\Intangible\Trip\TouristTrip;
use Vnet\Schemaorg\Types\Thing\Place\AdministrativeArea\City;

$type = TouristTrip::fromArray([
    'name' => 'Trip name',
    'description' => 'Trip description',
    'itinerary' => [
        City::fromArray(['name' => 'City 1']),
        City::fromArray(['name' => 'City 2']),
        City::fromArray(['name' => 'City 3']),
        City::fromArray(['name' => 'City 4']),
        City::fromArray(['name' => 'City 5']),
    ]
]);

$jsonld = Jsonld::create($type);
```

In the Jsonld class object, the following methods are available

```php
$jsonld->toArray(); // returns an array of json-ld markup
$jsonld->generate(); // generates a string with json-ld markup
$jsonld->render(); // outputs the json-ld markup
```
