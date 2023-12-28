<?php

/**
 * @see https://schema.org/ShippingRateSettings
 * A ShippingRateSettings represents re-usable pieces of shipping information. It is designed for publication on an URL that may be referenced via
 * the [[shippingSettingsLink]] property of an [[OfferShippingDetails]]. Several occurrences can be published, distinguished and matched (i.e. identified/referenced) by their different values for
 * [[shippingLabel]].
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue;

class ShippingRateSettings extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
    const TYPE = 'ShippingRateSettings';

    /**
     * indicates (possibly multiple) shipping destinations. These can be defined in several ways, e.g. postalCode ranges.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\DefinedRegion
     */
    protected $prop_shippingDestination;

    /**
     * Indicates when shipping to a particular [[shippingDestination]] is not available.
     * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    protected $prop_doesNotShip;

    /**
     * A monetary value above (or at) which the shipping rate becomes free. Intended to be used via an [[OfferShippingDetails]] with [[shippingSettingsLink]]
     * matching this [[ShippingRateSettings]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\DeliveryChargeSpecification
     */
    protected $prop_freeShippingThreshold;

    /**
     * Label to match an [[OfferShippingDetails]] with a [[ShippingRateSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_shippingLabel;

    /**
     * The shipping rate is the cost of shipping to the specified destination. Typically, the maxValue and currency values (of the [[MonetaryAmount]])
     * are most appropriate.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount
     */
    protected $prop_shippingRate;

    /**
     * This can be marked 'true' to indicate that some published [[DeliveryTimeSettings]] or [[ShippingRateSettings]] are intended to apply to all [[OfferShippingDetails]] published
     * by the same merchant, when referenced by a [[shippingSettingsLink]] in those settings. It is not meaningful to use a 'true' value
     * for this property alongside a transitTimeLabel (for [[DeliveryTimeSettings]]) or shippingLabel (for [[ShippingRateSettings]]), since this property is for use with unlabelled settings.
     * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    protected $prop_isUnlabelledFallback;

    /**
     * indicates (possibly multiple) shipping destinations. These can be defined in several ways, e.g. postalCode ranges.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\DefinedRegion $value
     * @return static
     */
    function setShippingDestination($value)
    {
        return $this->setProp('shippingDestination', $value);
    }

    /**
     * Indicates when shipping to a particular [[shippingDestination]] is not available.
     * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setDoesNotShip($value)
    {
        return $this->setProp('doesNotShip', $value);
    }

    /**
     * A monetary value above (or at) which the shipping rate becomes free. Intended to be used via an [[OfferShippingDetails]] with [[shippingSettingsLink]]
     * matching this [[ShippingRateSettings]].
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\DeliveryChargeSpecification $value
     * @return static
     */
    function setFreeShippingThreshold($value)
    {
        return $this->setProp('freeShippingThreshold', $value);
    }

    /**
     * Label to match an [[OfferShippingDetails]] with a [[ShippingRateSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setShippingLabel($value)
    {
        return $this->setProp('shippingLabel', $value);
    }

    /**
     * The shipping rate is the cost of shipping to the specified destination. Typically, the maxValue and currency values (of the [[MonetaryAmount]])
     * are most appropriate.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount $value
     * @return static
     */
    function setShippingRate($value)
    {
        return $this->setProp('shippingRate', $value);
    }

    /**
     * This can be marked 'true' to indicate that some published [[DeliveryTimeSettings]] or [[ShippingRateSettings]] are intended to apply to all [[OfferShippingDetails]] published
     * by the same merchant, when referenced by a [[shippingSettingsLink]] in those settings. It is not meaningful to use a 'true' value
     * for this property alongside a transitTimeLabel (for [[DeliveryTimeSettings]]) or shippingLabel (for [[ShippingRateSettings]]), since this property is for use with unlabelled settings.
     * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setIsUnlabelledFallback($value)
    {
        return $this->setProp('isUnlabelledFallback', $value);
    }

    /**
     * indicates (possibly multiple) shipping destinations. These can be defined in several ways, e.g. postalCode ranges.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\DefinedRegion|null
     */
    function getShippingDestination()
    {
        return $this->getProp('shippingDestination');
    }

    /**
     * Indicates when shipping to a particular [[shippingDestination]] is not available.
     * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getDoesNotShip()
    {
        return $this->getProp('doesNotShip');
    }

    /**
     * A monetary value above (or at) which the shipping rate becomes free. Intended to be used via an [[OfferShippingDetails]] with [[shippingSettingsLink]]
     * matching this [[ShippingRateSettings]].
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\DeliveryChargeSpecification|null
     */
    function getFreeShippingThreshold()
    {
        return $this->getProp('freeShippingThreshold');
    }

    /**
     * Label to match an [[OfferShippingDetails]] with a [[ShippingRateSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getShippingLabel()
    {
        return $this->getProp('shippingLabel');
    }

    /**
     * The shipping rate is the cost of shipping to the specified destination. Typically, the maxValue and currency values (of the [[MonetaryAmount]])
     * are most appropriate.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|null
     */
    function getShippingRate()
    {
        return $this->getProp('shippingRate');
    }

    /**
     * This can be marked 'true' to indicate that some published [[DeliveryTimeSettings]] or [[ShippingRateSettings]] are intended to apply to all [[OfferShippingDetails]] published
     * by the same merchant, when referenced by a [[shippingSettingsLink]] in those settings. It is not meaningful to use a 'true' value
     * for this property alongside a transitTimeLabel (for [[DeliveryTimeSettings]]) or shippingLabel (for [[ShippingRateSettings]]), since this property is for use with unlabelled settings.
     * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getIsUnlabelledFallback()
    {
        return $this->getProp('isUnlabelledFallback');
    }
}
