<?php

/**
* @see https://schema.org/Audience
 * Intended audience for an item, i.e. the group for whom the item was created.
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Audience;

class Audience extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
   const TYPE = 'Audience';

   /**
     * The target group associated with a given audience (e.g. veterans, car owners, musicians, etc.).
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_audienceType;

   /**
     * The geographic area associated with the audience.
    * @var \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea
    */
   protected $prop_geographicArea;

   /**
     * The target group associated with a given audience (e.g. veterans, car owners, musicians, etc.).
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setAudienceType($value)
   {
       return $this->setProp('audienceType', $value);
   }

   /**
     * The geographic area associated with the audience.
    * @param \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea $value
    * @return static
    */
   function setGeographicArea($value)
   {
       return $this->setProp('geographicArea', $value);
   }

   /**
     * The target group associated with a given audience (e.g. veterans, car owners, musicians, etc.).
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getAudienceType()
   {
       return $this->getProp('audienceType');
   }

   /**
     * The geographic area associated with the audience.
    * @return \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|null
    */
   function getGeographicArea()
   {
       return $this->getProp('geographicArea');
   }
}
