<?php

/**
* @see https://schema.org/OwnershipInfo
 * A structured value providing information about when a certain organization or person owned a certain product.
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue;

class OwnershipInfo extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
   const TYPE = 'OwnershipInfo';

   /**
     * The date and time of obtaining the product.
    * @var \Vnetby\Schemaorg\DataTypes\DataDateTime
    */
   protected $prop_ownedFrom;

   /**
     * The date and time of giving up ownership on the product.
    * @var \Vnetby\Schemaorg\DataTypes\DataDateTime
    */
   protected $prop_ownedThrough;

   /**
     * The organization or person from which the product was acquired.
    * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
    */
   protected $prop_acquiredFrom;

   /**
     * The product that this structured value is referring to.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service|\Vnetby\Schemaorg\Types\Thing\Product\Product
    */
   protected $prop_typeOfGood;

   /**
     * The date and time of obtaining the product.
    * @param \Vnetby\Schemaorg\DataTypes\DataDateTime $value
    * @return static
    */
   function setOwnedFrom($value)
   {
       return $this->setProp('ownedFrom', $value);
   }

   /**
     * The date and time of giving up ownership on the product.
    * @param \Vnetby\Schemaorg\DataTypes\DataDateTime $value
    * @return static
    */
   function setOwnedThrough($value)
   {
       return $this->setProp('ownedThrough', $value);
   }

   /**
     * The organization or person from which the product was acquired.
    * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
    * @return static
    */
   function setAcquiredFrom($value)
   {
       return $this->setProp('acquiredFrom', $value);
   }

   /**
     * The product that this structured value is referring to.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service|\Vnetby\Schemaorg\Types\Thing\Product\Product $value
    * @return static
    */
   function setTypeOfGood($value)
   {
       return $this->setProp('typeOfGood', $value);
   }

   /**
     * The date and time of obtaining the product.
    * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|null
    */
   function getOwnedFrom()
   {
       return $this->getProp('ownedFrom');
   }

   /**
     * The date and time of giving up ownership on the product.
    * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|null
    */
   function getOwnedThrough()
   {
       return $this->getProp('ownedThrough');
   }

   /**
     * The organization or person from which the product was acquired.
    * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
    */
   function getAcquiredFrom()
   {
       return $this->getProp('acquiredFrom');
   }

   /**
     * The product that this structured value is referring to.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service|\Vnetby\Schemaorg\Types\Thing\Product\Product|null
    */
   function getTypeOfGood()
   {
       return $this->getProp('typeOfGood');
   }
}
