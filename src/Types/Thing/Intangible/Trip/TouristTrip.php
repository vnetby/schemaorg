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
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience
     */
    public $touristType;

    /**
     * Attraction suitable for type(s) of tourist. E.g. children, visitors from a particular country, etc. 
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience $value
     * @return static
     */
    function setTouristType($value)
    {
        return $this->setProp('touristType', $value);
    }

    /**
     * Attraction suitable for type(s) of tourist. E.g. children, visitors from a particular country, etc. 
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|null
     */
    function getTouristType()
    {
        return $this->getProp('touristType');
    }
}
