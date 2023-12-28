<?php

/**
* @see https://schema.org/TouristTrip
 * A tourist trip. A created itinerary of visits to one or more places of interest ([[TouristAttraction]]/[[TouristDestination]]) often linked by a similar
 * theme, geographic area, or interest to a particular [[touristType]]. The [UNWTO](http://www2.unwto.org/) defines tourism trip as the Trip taken by visitors. (See
 * examples below.)
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Trip;

class TouristTrip extends \Vnetby\Schemaorg\Types\Thing\Intangible\Trip\Trip
{
   const TYPE = 'TouristTrip';

   /**
     * Attraction suitable for type(s) of tourist. E.g. children, visitors from a particular country, etc. 
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_touristType;

   /**
     * Attraction suitable for type(s) of tourist. E.g. children, visitors from a particular country, etc. 
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setTouristType($value)
   {
       return $this->setProp('touristType', $value);
   }

   /**
     * Attraction suitable for type(s) of tourist. E.g. children, visitors from a particular country, etc. 
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getTouristType()
   {
       return $this->getProp('touristType');
   }
}
