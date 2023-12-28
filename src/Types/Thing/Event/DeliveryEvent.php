<?php

/**
* @see https://schema.org/DeliveryEvent
 * An event involving the delivery of an item.
*/

namespace Vnetby\Schemaorg\Types\Thing\Event;

class DeliveryEvent extends \Vnetby\Schemaorg\Types\Thing\Event\Event
{
   const TYPE = 'DeliveryEvent';

   /**
     * After this date, the item will no longer be available for pickup.
    * @var \Vnetby\Schemaorg\DataTypes\DataDateTime
    */
   protected $prop_availableThrough;

   /**
     * Method used for delivery or shipping.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod
    */
   protected $prop_hasDeliveryMethod;

   /**
     * When the item is available for pickup from the store, locker, etc.
    * @var \Vnetby\Schemaorg\DataTypes\DataDateTime
    */
   protected $prop_availableFrom;

   /**
     * Password, PIN, or access code needed for delivery (e.g. from a locker).
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_accessCode;

   /**
     * After this date, the item will no longer be available for pickup.
    * @param \Vnetby\Schemaorg\DataTypes\DataDateTime $value
    * @return static
    */
   function setAvailableThrough($value)
   {
       return $this->setProp('availableThrough', $value);
   }

   /**
     * Method used for delivery or shipping.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod $value
    * @return static
    */
   function setHasDeliveryMethod($value)
   {
       return $this->setProp('hasDeliveryMethod', $value);
   }

   /**
     * When the item is available for pickup from the store, locker, etc.
    * @param \Vnetby\Schemaorg\DataTypes\DataDateTime $value
    * @return static
    */
   function setAvailableFrom($value)
   {
       return $this->setProp('availableFrom', $value);
   }

   /**
     * Password, PIN, or access code needed for delivery (e.g. from a locker).
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setAccessCode($value)
   {
       return $this->setProp('accessCode', $value);
   }

   /**
     * After this date, the item will no longer be available for pickup.
    * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|null
    */
   function getAvailableThrough()
   {
       return $this->getProp('availableThrough');
   }

   /**
     * Method used for delivery or shipping.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod|null
    */
   function getHasDeliveryMethod()
   {
       return $this->getProp('hasDeliveryMethod');
   }

   /**
     * When the item is available for pickup from the store, locker, etc.
    * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|null
    */
   function getAvailableFrom()
   {
       return $this->getProp('availableFrom');
   }

   /**
     * Password, PIN, or access code needed for delivery (e.g. from a locker).
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getAccessCode()
   {
       return $this->getProp('accessCode');
   }
}
