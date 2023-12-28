<?php

/**
 * @see https://schema.org/TouristAttraction
 * A tourist attraction. In principle any Thing can be a [[TouristAttraction]], from a [[Mountain]] and [[LandmarksOrHistoricalBuildings]] to a [[LocalBusiness]]. This Type
 * can be used on its own to describe a general [[TouristAttraction]], or be used as an [[additionalType]] to add tourist attraction
 * properties to any other type. (See examples below)
 */

namespace Vnetby\Schemaorg\Types\Thing\Place;

class TouristAttraction extends \Vnetby\Schemaorg\Types\Thing\Place\Place
{
    const TYPE = 'TouristAttraction';

    /**
     * Attraction suitable for type(s) of tourist. E.g. children, visitors from a particular country, etc. 
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_touristType;

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from
     * the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language
     */
    protected $prop_availableLanguage;

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
     * A language someone may use with or at the item, service or place. Please use one of the language codes from
     * the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language $value
     * @return static
     */
    function setAvailableLanguage($value)
    {
        return $this->setProp('availableLanguage', $value);
    }

    /**
     * Attraction suitable for type(s) of tourist. E.g. children, visitors from a particular country, etc. 
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTouristType()
    {
        return $this->getProp('touristType');
    }

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from
     * the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|null
     */
    function getAvailableLanguage()
    {
        return $this->getProp('availableLanguage');
    }
}
