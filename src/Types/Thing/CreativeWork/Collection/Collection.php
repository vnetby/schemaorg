<?php

/**
* @see https://schema.org/Collection
 * A collection of items, e.g. creative works or products.
*/

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\Collection;

class Collection extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
   const TYPE = 'Collection';

   /**
     * The number of items in the [[Collection]].
    * @var \Vnetby\Schemaorg\DataTypes\DataInteger
    */
   protected $prop_[object Object];

   /**
     * The number of items in the [[Collection]].
    * @param \Vnetby\Schemaorg\DataTypes\DataInteger $value
    * @return static
    */
   function setCollectionSize($value)
   {
       return $this->setProp('[object Object]', $value);
   }

   /**
     * The number of items in the [[Collection]].
    * @return \Vnetby\Schemaorg\DataTypes\DataInteger|null
    */
   function getCollectionSize()
   {
       return $this->getProp('[object Object]');
   }
}
