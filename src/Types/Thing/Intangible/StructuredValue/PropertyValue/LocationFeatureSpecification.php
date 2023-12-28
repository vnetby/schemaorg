<?php

/**
 * @see https://schema.org/LocationFeatureSpecification
 * Specifies a location feature by providing a structured value representing a feature of an accommodation as a property-value pair of varying
 * degrees of formality.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue;

class LocationFeatureSpecification extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue
{
    const TYPE = 'LocationFeatureSpecification';

    /**
     * The date when the item becomes valid.
     * @var \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    protected $prop_validFrom;

    /**
     * The hours during which this service or contact is available.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OpeningHoursSpecification
     */
    protected $prop_hoursAvailable;

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period
     * of opening hours.
     * @var \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    protected $prop_validThrough;

    /**
     * The date when the item becomes valid.
     * @param \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setValidFrom($value)
    {
        return $this->setProp('validFrom', $value);
    }

    /**
     * The hours during which this service or contact is available.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OpeningHoursSpecification $value
     * @return static
     */
    function setHoursAvailable($value)
    {
        return $this->setProp('hoursAvailable', $value);
    }

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period
     * of opening hours.
     * @param \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setValidThrough($value)
    {
        return $this->setProp('validThrough', $value);
    }

    /**
     * The date when the item becomes valid.
     * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getValidFrom()
    {
        return $this->getProp('validFrom');
    }

    /**
     * The hours during which this service or contact is available.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OpeningHoursSpecification|null
     */
    function getHoursAvailable()
    {
        return $this->getProp('hoursAvailable');
    }

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period
     * of opening hours.
     * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getValidThrough()
    {
        return $this->getProp('validThrough');
    }
}
