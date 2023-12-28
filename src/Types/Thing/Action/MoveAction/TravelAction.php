<?php

/**
* @see https://schema.org/TravelAction
 * The act of traveling from a fromLocation to a destination by a specified mode of transport, optionally with participants.
*/

namespace Vnetby\Schemaorg\Types\Thing\Action\MoveAction;

class TravelAction extends \Vnetby\Schemaorg\Types\Thing\Action\MoveAction\MoveAction
{
   const TYPE = 'TravelAction';

   /**
     * The distance travelled, e.g. exercising or travelling.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance
    */
   protected $prop_distance;

   /**
     * The distance travelled, e.g. exercising or travelling.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance $value
    * @return static
    */
   function setDistance($value)
   {
       return $this->setProp('distance', $value);
   }

   /**
     * The distance travelled, e.g. exercising or travelling.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|null
    */
   function getDistance()
   {
       return $this->getProp('distance');
   }
}
