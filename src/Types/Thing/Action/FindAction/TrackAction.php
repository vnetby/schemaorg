<?php

/**
* @see https://schema.org/TrackAction
 * An agent tracks an object for updates.\n\nRelated actions:\n\n* [[FollowAction]]: Unlike FollowAction, TrackAction refers to the interest on the location of innanimates
 * objects.\n* [[SubscribeAction]]: Unlike SubscribeAction, TrackAction refers to the interest on the location of innanimate objects.
*/

namespace Vnetby\Schemaorg\Types\Thing\Action\FindAction;

class TrackAction extends \Vnetby\Schemaorg\Types\Thing\Action\FindAction\FindAction
{
   const TYPE = 'TrackAction';

   /**
     * A sub property of instrument. The method of delivery.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod
    */
   protected $prop_deliveryMethod;

   /**
     * A sub property of instrument. The method of delivery.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod $value
    * @return static
    */
   function setDeliveryMethod($value)
   {
       return $this->setProp('deliveryMethod', $value);
   }

   /**
     * A sub property of instrument. The method of delivery.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod|null
    */
   function getDeliveryMethod()
   {
       return $this->getProp('deliveryMethod');
   }
}
