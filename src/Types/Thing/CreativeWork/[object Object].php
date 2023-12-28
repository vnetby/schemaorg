<?php

/**
* @see https://schema.org/[object Object]
 * An intangible type to be applied to any archive content, carrying with it a set of properties required to describe archival
 * items and collections.
*/

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class [object Object] extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
   const TYPE = '[object Object]';

   /**
     * Current location of the item.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\Types\Thing\Place\Place
    */
   protected $prop_[object Object];

   /**
     * [[ArchiveOrganization]] that holds, keeps or maintains the [[ArchiveComponent]].
    * @var \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\[object Object]
    */
   protected $prop_[object Object];

   /**
     * Current location of the item.
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\Types\Thing\Place\Place $value
    * @return static
    */
   function setItemLocation($value)
   {
       return $this->setProp('[object Object]', $value);
   }

   /**
     * [[ArchiveOrganization]] that holds, keeps or maintains the [[ArchiveComponent]].
    * @param \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\[object Object] $value
    * @return static
    */
   function setHoldingArchive($value)
   {
       return $this->setProp('[object Object]', $value);
   }

   /**
     * Current location of the item.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\Types\Thing\Place\Place|null
    */
   function getItemLocation()
   {
       return $this->getProp('[object Object]');
   }

   /**
     * [[ArchiveOrganization]] that holds, keeps or maintains the [[ArchiveComponent]].
    * @return \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\[object Object]|null
    */
   function getHoldingArchive()
   {
       return $this->getProp('[object Object]');
   }
}
