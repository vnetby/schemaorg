<?php

/**
 * @see https://schema.org/DeliveryTimeSettings
 * A DeliveryTimeSettings represents re-usable pieces of shipping information, relating to timing. It is designed for publication on an URL that may
 * be referenced via the [[shippingSettingsLink]] property of an [[OfferShippingDetails]]. Several occurrences can be published, distinguished (and identified/referenced) by their different values
 * for [[transitTimeLabel]].
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue;

class DeliveryTimeSettings extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
    const TYPE = 'DeliveryTimeSettings';

    /**
     * The total delay between the receipt of the order and the goods reaching the final customer.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ShippingDeliveryTime
     */
    public $deliveryTime;

    /**
     * This can be marked 'true' to indicate that some published [[DeliveryTimeSettings]] or [[ShippingRateSettings]] are intended to apply to all [[OfferShippingDetails]] published
     * by the same merchant, when referenced by a [[shippingSettingsLink]] in those settings. It is not meaningful to use a 'true' value
     * for this property alongside a transitTimeLabel (for [[DeliveryTimeSettings]]) or shippingLabel (for [[ShippingRateSettings]]), since this property is for use with unlabelled settings.
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    public $isUnlabelledFallback;

    /**
     * Label to match an [[OfferShippingDetails]] with a [[DeliveryTimeSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $transitTimeLabel;

    /**
     * indicates (possibly multiple) shipping destinations. These can be defined in several ways, e.g. postalCode ranges.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\DefinedRegion
     */
    public $shippingDestination;

    /**
     * The total delay between the receipt of the order and the goods reaching the final customer.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ShippingDeliveryTime $value
     * @return static
     */
    function setDeliveryTime($value)
    {
        return $this->setProp('deliveryTime', $value);
    }

    /**
     * This can be marked 'true' to indicate that some published [[DeliveryTimeSettings]] or [[ShippingRateSettings]] are intended to apply to all [[OfferShippingDetails]] published
     * by the same merchant, when referenced by a [[shippingSettingsLink]] in those settings. It is not meaningful to use a 'true' value
     * for this property alongside a transitTimeLabel (for [[DeliveryTimeSettings]]) or shippingLabel (for [[ShippingRateSettings]]), since this property is for use with unlabelled settings.
     * @param bool|\Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setIsUnlabelledFallback($value)
    {
        return $this->setProp('isUnlabelledFallback', $value);
    }

    /**
     * Label to match an [[OfferShippingDetails]] with a [[DeliveryTimeSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTransitTimeLabel($value)
    {
        return $this->setProp('transitTimeLabel', $value);
    }

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
     * The total delay between the receipt of the order and the goods reaching the final customer.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ShippingDeliveryTime|null
     */
    function getDeliveryTime()
    {
        return $this->getProp('deliveryTime');
    }

    /**
     * This can be marked 'true' to indicate that some published [[DeliveryTimeSettings]] or [[ShippingRateSettings]] are intended to apply to all [[OfferShippingDetails]] published
     * by the same merchant, when referenced by a [[shippingSettingsLink]] in those settings. It is not meaningful to use a 'true' value
     * for this property alongside a transitTimeLabel (for [[DeliveryTimeSettings]]) or shippingLabel (for [[ShippingRateSettings]]), since this property is for use with unlabelled settings.
     * @return bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getIsUnlabelledFallback()
    {
        return $this->getProp('isUnlabelledFallback');
    }

    /**
     * Label to match an [[OfferShippingDetails]] with a [[DeliveryTimeSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTransitTimeLabel()
    {
        return $this->getProp('transitTimeLabel');
    }

    /**
     * indicates (possibly multiple) shipping destinations. These can be defined in several ways, e.g. postalCode ranges.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\DefinedRegion|null
     */
    function getShippingDestination()
    {
        return $this->getProp('shippingDestination');
    }
}
