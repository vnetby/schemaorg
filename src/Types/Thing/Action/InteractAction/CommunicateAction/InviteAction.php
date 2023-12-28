<?php

/**
* @see https://schema.org/InviteAction
 * The act of asking someone to attend an event. Reciprocal of RsvpAction.
*/

namespace Vnetby\Schemaorg\Types\Thing\Action\InteractAction\CommunicateAction;

class InviteAction extends \Vnetby\Schemaorg\Types\Thing\Action\InteractAction\CommunicateAction\CommunicateAction
{
   const TYPE = 'InviteAction';

   /**
     * Upcoming or past event associated with this place, organization, or action.
    * @var \Vnetby\Schemaorg\Types\Thing\Event\Event
    */
   protected $prop_event;

   /**
     * Upcoming or past event associated with this place, organization, or action.
    * @param \Vnetby\Schemaorg\Types\Thing\Event\Event $value
    * @return static
    */
   function setEvent($value)
   {
       return $this->setProp('event', $value);
   }

   /**
     * Upcoming or past event associated with this place, organization, or action.
    * @return \Vnetby\Schemaorg\Types\Thing\Event\Event|null
    */
   function getEvent()
   {
       return $this->getProp('event');
   }
}
