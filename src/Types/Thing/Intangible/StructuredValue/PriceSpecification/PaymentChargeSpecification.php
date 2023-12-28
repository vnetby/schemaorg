<?php

/**
* @see https://schema.org/PaymentChargeSpecification
 * The costs of settling the payment using a particular payment method.
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification;

class PaymentChargeSpecification extends \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification
{
   const TYPE = 'PaymentChargeSpecification';

   /**
     * The payment method(s) to which the payment charge specification applies.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PaymentMethod\PaymentMethod
    */
   protected $prop_appliesToPaymentMethod;

   /**
     * The delivery method(s) to which the delivery charge or payment charge specification applies.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod
    */
   protected $prop_appliesToDeliveryMethod;

   /**
     * The payment method(s) to which the payment charge specification applies.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PaymentMethod\PaymentMethod $value
    * @return static
    */
   function setAppliesToPaymentMethod($value)
   {
       return $this->setProp('appliesToPaymentMethod', $value);
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
     * The payment method(s) to which the payment charge specification applies.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PaymentMethod\PaymentMethod|null
    */
   function getAppliesToPaymentMethod()
   {
       return $this->getProp('appliesToPaymentMethod');
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
