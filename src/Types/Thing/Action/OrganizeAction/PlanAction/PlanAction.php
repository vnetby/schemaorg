<?php

/**
* @see https://schema.org/PlanAction
 * The act of planning the execution of an event/task/action/reservation/plan to a future date.
*/

namespace Vnetby\Schemaorg\Types\Thing\Action\OrganizeAction\PlanAction;

class PlanAction extends \Vnetby\Schemaorg\Types\Thing\Action\OrganizeAction\OrganizeAction
{
   const TYPE = 'PlanAction';

   /**
     * The time the object is scheduled to.
    * @var \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime
    */
   protected $prop_scheduledTime;

   /**
     * The time the object is scheduled to.
    * @param \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
    * @return static
    */
   function setScheduledTime($value)
   {
       return $this->setProp('scheduledTime', $value);
   }

   /**
     * The time the object is scheduled to.
    * @return \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
    */
   function getScheduledTime()
   {
       return $this->getProp('scheduledTime');
   }
}
