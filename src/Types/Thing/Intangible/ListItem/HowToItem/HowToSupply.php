<?php

/**
 * @see https://schema.org/HowToSupply
 * A supply consumed when performing the instructions for how to achieve a result.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToItem;

class HowToSupply extends \Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToItem\HowToItem
{
    const TYPE = 'HowToSupply';

    /**
     * The estimated cost of the supply or supplies consumed when performing instructions.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount
     */
    public $estimatedCost;

    /**
     * The estimated cost of the supply or supplies consumed when performing instructions.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount $value
     * @return static
     */
    function setEstimatedCost($value)
    {
        return $this->setProp('estimatedCost', $value);
    }

    /**
     * The estimated cost of the supply or supplies consumed when performing instructions.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|null
     */
    function getEstimatedCost()
    {
        return $this->getProp('estimatedCost');
    }
}
