<?php

/**
 * @see https://schema.org/SomeProducts
 * A placeholder for multiple similar products of the same kind.
 */

namespace Vnetby\Schemaorg\Types\Thing\Product;

class SomeProducts extends \Vnetby\Schemaorg\Types\Thing\Product\Product
{
    const TYPE = 'SomeProducts';

    /**
     * The current approximate inventory level for the item or items.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    protected $prop_inventoryLevel;

    /**
     * The current approximate inventory level for the item or items.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setInventoryLevel($value)
    {
        return $this->setProp('inventoryLevel', $value);
    }

    /**
     * The current approximate inventory level for the item or items.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getInventoryLevel()
    {
        return $this->getProp('inventoryLevel');
    }
}
