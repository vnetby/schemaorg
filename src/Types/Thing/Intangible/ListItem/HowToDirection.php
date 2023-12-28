<?php

/**
* @see https://schema.org/HowToDirection
 * A direction indicating a single action to do in the instructions for how to achieve a result.
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\ListItem;

class HowToDirection extends \Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\ListItem
{
   const TYPE = 'HowToDirection';

   /**
     * A sub-property of instrument. A supply consumed when performing instructions or a direction.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToItem\HowToSupply|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_supply;

   /**
     * A media object representing the circumstances while performing this direction.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject
    */
   protected $prop_duringMedia;

   /**
     * The total time required to perform instructions or a direction (including time to prepare the supplies), in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
    */
   protected $prop_totalTime;

   /**
     * A media object representing the circumstances after performing this direction.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject|\Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_afterMedia;

   /**
     * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\ListItem\HowToItem\HowToTool|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_tool;

   /**
     * The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in [ISO
     * 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
    */
   protected $prop_performTime;

   /**
     * A media object representing the circumstances before performing this direction.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject
    */
   protected $prop_beforeMedia;

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
     * A media object representing the circumstances while performing this direction.
    * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject $value
    * @return static
    */
   function setDuringMedia($value)
   {
       return $this->setProp('duringMedia', $value);
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
     * A media object representing the circumstances after performing this direction.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject|\Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setAfterMedia($value)
   {
       return $this->setProp('afterMedia', $value);
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
     * A media object representing the circumstances before performing this direction.
    * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject $value
    * @return static
    */
   function setBeforeMedia($value)
   {
       return $this->setProp('beforeMedia', $value);
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
     * A media object representing the circumstances while performing this direction.
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject|null
    */
   function getDuringMedia()
   {
       return $this->getProp('duringMedia');
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
     * A media object representing the circumstances after performing this direction.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject|\Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getAfterMedia()
   {
       return $this->getProp('afterMedia');
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
     * The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in [ISO
     * 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
    */
   function getPerformTime()
   {
       return $this->getProp('performTime');
   }

   /**
     * A media object representing the circumstances before performing this direction.
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\MediaObject|null
    */
   function getBeforeMedia()
   {
       return $this->getProp('beforeMedia');
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
