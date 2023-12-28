<?php

/**
* @see https://schema.org/HowTo
 * Instructions that explain how to achieve a result by performing a sequence of steps.
*/

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\HowTo;

class HowTo extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
   const TYPE = 'HowTo';

   /**
     * A sub-property of instrument. A supply consumed when performing instructions or a direction.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToItem\HowToSupply|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_supply;

   /**
     * The total time required to perform instructions or a direction (including time to prepare the supplies), in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
    */
   protected $prop_totalTime;

   /**
     * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToItem\HowToTool|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_tool;

   /**
     * The quantity that results by performing instructions. For example, a paper airplane, 10 personalized candles.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_yield;

   /**
     * The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in [ISO
     * 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
    */
   protected $prop_performTime;

   /**
     * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToSection|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToStep|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_step;

   /**
     * The estimated cost of the supply or supplies consumed when performing instructions.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount
    */
   protected $prop_estimatedCost;

   /**
     * The length of time it takes to prepare the items to be used in instructions or a direction, in [ISO 8601
     * duration format](http://en.wikipedia.org/wiki/ISO_8601).
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
    */
   protected $prop_prepTime;

   /**
     * A sub-property of instrument. A supply consumed when performing instructions or a direction.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToItem\HowToSupply|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setSupply($value)
   {
       return $this->setProp('supply', $value);
   }

   /**
     * The total time required to perform instructions or a direction (including time to prepare the supplies), in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
    * @return static
    */
   function setTotalTime($value)
   {
       return $this->setProp('totalTime', $value);
   }

   /**
     * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToItem\HowToTool|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setTool($value)
   {
       return $this->setProp('tool', $value);
   }

   /**
     * The quantity that results by performing instructions. For example, a paper airplane, 10 personalized candles.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setYield($value)
   {
       return $this->setProp('yield', $value);
   }

   /**
     * The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in [ISO
     * 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
    * @return static
    */
   function setPerformTime($value)
   {
       return $this->setProp('performTime', $value);
   }

   /**
     * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToSection|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToStep|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setStep($value)
   {
       return $this->setProp('step', $value);
   }

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
     * The length of time it takes to prepare the items to be used in instructions or a direction, in [ISO 8601
     * duration format](http://en.wikipedia.org/wiki/ISO_8601).
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
    * @return static
    */
   function setPrepTime($value)
   {
       return $this->setProp('prepTime', $value);
   }

   /**
     * A sub-property of instrument. A supply consumed when performing instructions or a direction.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToItem\HowToSupply|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getSupply()
   {
       return $this->getProp('supply');
   }

   /**
     * The total time required to perform instructions or a direction (including time to prepare the supplies), in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
    */
   function getTotalTime()
   {
       return $this->getProp('totalTime');
   }

   /**
     * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToItem\HowToTool|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getTool()
   {
       return $this->getProp('tool');
   }

   /**
     * The quantity that results by performing instructions. For example, a paper airplane, 10 personalized candles.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getYield()
   {
       return $this->getProp('yield');
   }

   /**
     * The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in [ISO
     * 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
    */
   function getPerformTime()
   {
       return $this->getProp('performTime');
   }

   /**
     * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToSection|\Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToStep|\Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getStep()
   {
       return $this->getProp('step');
   }

   /**
     * The estimated cost of the supply or supplies consumed when performing instructions.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|null
    */
   function getEstimatedCost()
   {
       return $this->getProp('estimatedCost');
   }

   /**
     * The length of time it takes to prepare the items to be used in instructions or a direction, in [ISO 8601
     * duration format](http://en.wikipedia.org/wiki/ISO_8601).
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
    */
   function getPrepTime()
   {
       return $this->getProp('prepTime');
   }
}
