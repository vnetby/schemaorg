<?php

/**
 * @see https://schema.org/OfferShippingDetails
 * OfferShippingDetails represents information about shipping destinations. Multiple of these entities can be used to represent different shipping rates for different destinations:
 * One entity for Alaska/Hawaii. A different one for continental US. A different one for all France. Multiple of these entities can
 * be used to represent different shipping costs and delivery times. Two entities that are identical but differ in rate and time:
 * E.g. Cheaper and slower: $5 in 5-7 days or Fast and expensive: $15 in 1-2 days.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue;

class OfferShippingDetails extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
    const TYPE = 'OfferShippingDetails';

    /**
     * Link to a page containing [[ShippingRateSettings]] and [[DeliveryTimeSettings]] details.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $shippingSettingsLink;

    /**
     * The depth of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance
     */
    public $depth;

    /**
     * The total delay between the receipt of the order and the goods reaching the final customer.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ShippingDeliveryTime
     */
    public $deliveryTime;

    /**
     * The height of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance
     */
    public $height;

    /**
     * Label to match an [[OfferShippingDetails]] with a [[DeliveryTimeSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $transitTimeLabel;

    /**
     * The weight of the product or person.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $weight;

    /**
     * The shipping rate is the cost of shipping to the specified destination. Typically, the maxValue and currency values (of the [[MonetaryAmount]])
     * are most appropriate.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount
     */
    public $shippingRate;

    /**
     * Label to match an [[OfferShippingDetails]] with a [[ShippingRateSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $shippingLabel;

    /**
     * indicates (possibly multiple) shipping destinations. These can be defined in several ways, e.g. postalCode ranges.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\DefinedRegion
     */
    public $shippingDestination;

    /**
     * Indicates the origin of a shipment, i.e. where it should be coming from.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\DefinedRegion
     */
    public $shippingOrigin;

    /**
     * The width of the item.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $width;

    /**
     * Indicates when shipping to a particular [[shippingDestination]] is not available.
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    public $doesNotShip;

    /**
     * Link to a page containing [[ShippingRateSettings]] and [[DeliveryTimeSettings]] details.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setShippingSettingsLink($value)
    {
        return $this->setProp('shippingSettingsLink', $value);
    }

    /**
     * The depth of the item.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance $value
     * @return static
     */
    function setDepth($value)
    {
        return $this->setProp('depth', $value);
    }

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
     * The height of the item.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance $value
     * @return static
     */
    function setHeight($value)
    {
        return $this->setProp('height', $value);
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
     * The weight of the product or person.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setWeight($value)
    {
        return $this->setProp('weight', $value);
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
     * Label to match an [[OfferShippingDetails]] with a [[ShippingRateSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setShippingLabel($value)
    {
        return $this->setProp('shippingLabel', $value);
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
     * Indicates the origin of a shipment, i.e. where it should be coming from.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\DefinedRegion $value
     * @return static
     */
    function setShippingOrigin($value)
    {
        return $this->setProp('shippingOrigin', $value);
    }

    /**
     * The width of the item.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setWidth($value)
    {
        return $this->setProp('width', $value);
    }

    /**
     * Indicates when shipping to a particular [[shippingDestination]] is not available.
     * @param bool|\Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setDoesNotShip($value)
    {
        return $this->setProp('doesNotShip', $value);
    }

    /**
     * Link to a page containing [[ShippingRateSettings]] and [[DeliveryTimeSettings]] details.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getShippingSettingsLink()
    {
        return $this->getProp('shippingSettingsLink');
    }

    /**
     * The depth of the item.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|null
     */
    function getDepth()
    {
        return $this->getProp('depth');
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
     * The height of the item.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|null
     */
    function getHeight()
    {
        return $this->getProp('height');
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
     * The weight of the product or person.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getWeight()
    {
        return $this->getProp('weight');
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
     * Label to match an [[OfferShippingDetails]] with a [[ShippingRateSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getShippingLabel()
    {
        return $this->getProp('shippingLabel');
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
     * Indicates the origin of a shipment, i.e. where it should be coming from.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\DefinedRegion|null
     */
    function getShippingOrigin()
    {
        return $this->getProp('shippingOrigin');
    }

    /**
     * The width of the item.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getWidth()
    {
        return $this->getProp('width');
    }

    /**
     * Indicates when shipping to a particular [[shippingDestination]] is not available.
     * @return bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getDoesNotShip()
    {
        return $this->getProp('doesNotShip');
    }
}
