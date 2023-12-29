<?php

/**
 * @see https://schema.org/HowToItem
 * An item used as either a tool or supply when performing the instructions for how to achieve a result.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToItem;

class HowToItem extends \Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\ListItem
{
    const TYPE = 'HowToItem';

    /**
     * The required quantity of the item(s).
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $requiredQuantity;

    /**
     * The required quantity of the item(s).
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setRequiredQuantity($value)
    {
        return $this->setProp('requiredQuantity', $value);
    }

    /**
     * The required quantity of the item(s).
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getRequiredQuantity()
    {
        return $this->getProp('requiredQuantity');
    }
}
