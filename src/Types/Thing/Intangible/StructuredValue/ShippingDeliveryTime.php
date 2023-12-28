<?php

/**
* @see https://schema.org/ShippingDeliveryTime
 * ShippingDeliveryTime provides various pieces of information about delivery times for shipping.
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue;

class ShippingDeliveryTime extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
{
   const TYPE = 'ShippingDeliveryTime';

   /**
     * Days of the week when the merchant typically operates, indicated via opening hours markup.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OpeningHoursSpecification
    */
   protected $prop_businessDays;

   /**
     * Order cutoff time allows merchants to describe the time after which they will no longer process orders received on that day.
     * For orders processed after cutoff time, one day gets added to the delivery time estimate. This property is expected to be
     * most typically used via the [[ShippingRateSettings]] publication pattern. The time is indicated using the ISO-8601 Time format, e.g. "23:30:00-05:00" would represent
     * 6:30 pm Eastern Standard Time (EST) which is 5 hours behind Coordinated Universal Time (UTC).
    * @var \Vnetby\Schemaorg\DataTypes\DataTime
    */
   protected $prop_cutoffTime;

   /**
     * The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup,
     * in case the delivery method is on site pickup. Typical properties: minValue, maxValue, unitCode (d for DAY). This is by common
     * convention assumed to mean business days (if a unitCode is used, coded as "d"), i.e. only counting days when the business
     * normally operates.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
    */
   protected $prop_handlingTime;

   /**
     * The typical delay the order has been sent for delivery and the goods reach the final customer. Typical properties: minValue, maxValue,
     * unitCode (d for DAY).
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
    */
   protected $prop_transitTime;

   /**
     * Days of the week when the merchant typically operates, indicated via opening hours markup.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OpeningHoursSpecification $value
    * @return static
    */
   function setBusinessDays($value)
   {
       return $this->setProp('businessDays', $value);
   }

   /**
     * Order cutoff time allows merchants to describe the time after which they will no longer process orders received on that day.
     * For orders processed after cutoff time, one day gets added to the delivery time estimate. This property is expected to be
     * most typically used via the [[ShippingRateSettings]] publication pattern. The time is indicated using the ISO-8601 Time format, e.g. "23:30:00-05:00" would represent
     * 6:30 pm Eastern Standard Time (EST) which is 5 hours behind Coordinated Universal Time (UTC).
    * @param \Vnetby\Schemaorg\DataTypes\DataTime $value
    * @return static
    */
   function setCutoffTime($value)
   {
       return $this->setProp('cutoffTime', $value);
   }

   /**
     * The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup,
     * in case the delivery method is on site pickup. Typical properties: minValue, maxValue, unitCode (d for DAY). This is by common
     * convention assumed to mean business days (if a unitCode is used, coded as "d"), i.e. only counting days when the business
     * normally operates.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
    * @return static
    */
   function setHandlingTime($value)
   {
       return $this->setProp('handlingTime', $value);
   }

   /**
     * The typical delay the order has been sent for delivery and the goods reach the final customer. Typical properties: minValue, maxValue,
     * unitCode (d for DAY).
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
    * @return static
    */
   function setTransitTime($value)
   {
       return $this->setProp('transitTime', $value);
   }

   /**
     * Days of the week when the merchant typically operates, indicated via opening hours markup.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\OpeningHoursSpecification|null
    */
   function getBusinessDays()
   {
       return $this->getProp('businessDays');
   }

   /**
     * Order cutoff time allows merchants to describe the time after which they will no longer process orders received on that day.
     * For orders processed after cutoff time, one day gets added to the delivery time estimate. This property is expected to be
     * most typically used via the [[ShippingRateSettings]] publication pattern. The time is indicated using the ISO-8601 Time format, e.g. "23:30:00-05:00" would represent
     * 6:30 pm Eastern Standard Time (EST) which is 5 hours behind Coordinated Universal Time (UTC).
    * @return \Vnetby\Schemaorg\DataTypes\DataTime|null
    */
   function getCutoffTime()
   {
       return $this->getProp('cutoffTime');
   }

   /**
     * The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup,
     * in case the delivery method is on site pickup. Typical properties: minValue, maxValue, unitCode (d for DAY). This is by common
     * convention assumed to mean business days (if a unitCode is used, coded as "d"), i.e. only counting days when the business
     * normally operates.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
    */
   function getHandlingTime()
   {
       return $this->getProp('handlingTime');
   }

   /**
     * The typical delay the order has been sent for delivery and the goods reach the final customer. Typical properties: minValue, maxValue,
     * unitCode (d for DAY).
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
    */
   function getTransitTime()
   {
       return $this->getProp('transitTime');
   }
}
