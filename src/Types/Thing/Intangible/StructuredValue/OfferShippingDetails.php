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
     * indicates (possibly multiple) shipping destinations. These can be defined in several ways, e.g. postalCode ranges.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\DefinedRegion
    */
   protected $prop_shippingDestination;

   /**
     * The height of the item.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance
    */
   protected $prop_height;

   /**
     * Indicates the origin of a shipment, i.e. where it should be coming from.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\DefinedRegion
    */
   protected $prop_shippingOrigin;

   /**
     * Indicates when shipping to a particular [[shippingDestination]] is not available.
    * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
    */
   protected $prop_doesNotShip;

   /**
     * The weight of the product or person.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
    */
   protected $prop_weight;

   /**
     * The width of the item.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
    */
   protected $prop_width;

   /**
     * Label to match an [[OfferShippingDetails]] with a [[DeliveryTimeSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_transitTimeLabel;

   /**
     * Link to a page containing [[ShippingRateSettings]] and [[DeliveryTimeSettings]] details.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_shippingSettingsLink;

   /**
     * The total delay between the receipt of the order and the goods reaching the final customer.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ShippingDeliveryTime
    */
   protected $prop_deliveryTime;

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
     * The depth of the item.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance
    */
   protected $prop_depth;

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
     * The height of the item.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance $value
    * @return static
    */
   function setHeight($value)
   {
       return $this->setProp('height', $value);
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
     * Indicates when shipping to a particular [[shippingDestination]] is not available.
    * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
    * @return static
    */
   function setDoesNotShip($value)
   {
       return $this->setProp('doesNotShip', $value);
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
     * The width of the item.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
    * @return static
    */
   function setWidth($value)
   {
       return $this->setProp('width', $value);
   }

   /**
     * Label to match an [[OfferShippingDetails]] with a [[DeliveryTimeSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setTransitTimeLabel($value)
   {
       return $this->setProp('transitTimeLabel', $value);
   }

   /**
     * Link to a page containing [[ShippingRateSettings]] and [[DeliveryTimeSettings]] details.
    * @param \Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setShippingSettingsLink($value)
   {
       return $this->setProp('shippingSettingsLink', $value);
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
     * The depth of the item.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance $value
    * @return static
    */
   function setDepth($value)
   {
       return $this->setProp('depth', $value);
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
     * The height of the item.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|null
    */
   function getHeight()
   {
       return $this->getProp('height');
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
     * Indicates when shipping to a particular [[shippingDestination]] is not available.
    * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
    */
   function getDoesNotShip()
   {
       return $this->getProp('doesNotShip');
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
     * The width of the item.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
    */
   function getWidth()
   {
       return $this->getProp('width');
   }

   /**
     * Label to match an [[OfferShippingDetails]] with a [[DeliveryTimeSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getTransitTimeLabel()
   {
       return $this->getProp('transitTimeLabel');
   }

   /**
     * Link to a page containing [[ShippingRateSettings]] and [[DeliveryTimeSettings]] details.
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getShippingSettingsLink()
   {
       return $this->getProp('shippingSettingsLink');
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
     * The depth of the item.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|null
    */
   function getDepth()
   {
       return $this->getProp('depth');
   }
}
