<?php

/**
 * @see https://schema.org/TouristDestination
 * A tourist destination. In principle any [[Place]] can be a [[TouristDestination]] from a [[City]], Region or [[Country]] to an [[AmusementPark]] or
 * [[Hotel]]. This Type can be used on its own to describe a general [[TouristDestination]], or be used as an [[additionalType]] to
 * add tourist relevant properties to any other [[Place]]. A [[TouristDestination]] is defined as a [[Place]] that contains, or is colocated with,
 * one or more [[TouristAttraction]]s, often linked by a similar theme or interest to a particular [[touristType]]. The [UNWTO](http://www2.unwto.org/) defines Destination (main
 * destination of a tourism trip) as the place visited that is central to the decision to take the trip. (See examples
 * below.)
 */

namespace Vnetby\Schemaorg\Types\Thing\Place;

class TouristDestination extends \Vnetby\Schemaorg\Types\Thing\Place\Place
{
    const TYPE = 'TouristDestination';

    /**
     * Attraction suitable for type(s) of tourist. E.g. children, visitors from a particular country, etc. 
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $touristType;

    /**
     * Attraction located at destination.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\TouristAttraction
     */
    public $includesAttraction;

    /**
     * Attraction suitable for type(s) of tourist. E.g. children, visitors from a particular country, etc. 
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTouristType($value)
    {
        return $this->setProp('touristType', $value);
    }

    /**
     * Attraction located at destination.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\TouristAttraction $value
     * @return static
     */
    function setIncludesAttraction($value)
    {
        return $this->setProp('includesAttraction', $value);
    }

    /**
     * Attraction suitable for type(s) of tourist. E.g. children, visitors from a particular country, etc. 
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTouristType()
    {
        return $this->getProp('touristType');
    }

    /**
     * Attraction located at destination.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\TouristAttraction|null
     */
    function getIncludesAttraction()
    {
        return $this->getProp('includesAttraction');
    }
}
