<?php

/**
 * @see https://schema.org/DeliveryChargeSpecification
 * The price for the delivery of an offer using a particular delivery method.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification;

class DeliveryChargeSpecification extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification
{
    const TYPE = 'DeliveryChargeSpecification';

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which
     * the offer or delivery charge specification is valid.\n\nSee also [[ineligibleRegion]]. 
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape
     */
    protected $prop_eligibleRegion;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which
     * the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]]. 
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_ineligibleRegion;

    /**
     * The geographic area where a service or offered item is provided.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_areaServed;

    /**
     * The delivery method(s) to which the delivery charge or payment charge specification applies.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod
     */
    protected $prop_appliesToDeliveryMethod;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which
     * the offer or delivery charge specification is valid.\n\nSee also [[ineligibleRegion]]. 
     * @param \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape $value
     * @return static
     */
    function setEligibleRegion($value)
    {
        return $this->setProp('eligibleRegion', $value);
    }

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which
     * the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]]. 
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setIneligibleRegion($value)
    {
        return $this->setProp('ineligibleRegion', $value);
    }

    /**
     * The geographic area where a service or offered item is provided.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAreaServed($value)
    {
        return $this->setProp('areaServed', $value);
    }

    /**
     * The delivery method(s) to which the delivery charge or payment charge specification applies.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod $value
     * @return static
     */
    function setAppliesToDeliveryMethod($value)
    {
        return $this->setProp('appliesToDeliveryMethod', $value);
    }

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which
     * the offer or delivery charge specification is valid.\n\nSee also [[ineligibleRegion]]. 
     * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|null
     */
    function getEligibleRegion()
    {
        return $this->getProp('eligibleRegion');
    }

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which
     * the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]]. 
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getIneligibleRegion()
    {
        return $this->getProp('ineligibleRegion');
    }

    /**
     * The geographic area where a service or offered item is provided.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\GeoShape\GeoShape|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAreaServed()
    {
        return $this->getProp('areaServed');
    }

    /**
     * The delivery method(s) to which the delivery charge or payment charge specification applies.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod|null
     */
    function getAppliesToDeliveryMethod()
    {
        return $this->getProp('appliesToDeliveryMethod');
    }
}
