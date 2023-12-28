<?php

/**
* @see https://schema.org/InsertAction
 * The act of adding at a specific location in an ordered collection.
*/

namespace Vnetby\Schemaorg\Types\Thing\Action\UpdateAction\AddAction\InsertAction;

class InsertAction extends \Vnetby\Schemaorg\Types\Thing\Action\UpdateAction\AddAction\AddAction
{
   const TYPE = 'InsertAction';

   /**
     * A sub property of location. The final location of the object or the agent after the action.
    * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
    */
   protected $prop_toLocation;

   /**
     * A sub property of location. The final location of the object or the agent after the action.
    * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
    * @return static
    */
   function setToLocation($value)
   {
       return $this->setProp('toLocation', $value);
   }

   /**
     * A sub property of location. The final location of the object or the agent after the action.
    * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
    */
   function getToLocation()
   {
       return $this->getProp('toLocation');
   }
}
