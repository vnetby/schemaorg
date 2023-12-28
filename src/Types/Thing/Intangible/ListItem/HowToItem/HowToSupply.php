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
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount
    */
   protected $prop_estimatedCost;

   /**
     * The estimated cost of the supply or supplies consumed when performing instructions.
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount $value
    * @return static
    */
   function setEstimatedCost($value)
   {
       return $this->setProp('estimatedCost', $value);
   }

   /**
     * The estimated cost of the supply or supplies consumed when performing instructions.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|null
    */
   function getEstimatedCost()
   {
       return $this->getProp('estimatedCost');
   }
}
