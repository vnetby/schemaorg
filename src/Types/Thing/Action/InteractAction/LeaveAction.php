<?php

/**
 * @see https://schema.org/LeaveAction
 * An agent leaves an event / group with participants/friends at a location.\n\nRelated actions:\n\n* [[JoinAction]]: The antonym of LeaveAction.\n* [[UnRegisterAction]]: Unlike UnRegisterAction,
 * LeaveAction implies leaving a group/team of people rather than a service.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\InteractAction;

class LeaveAction extends \Vnetby\Schemaorg\Types\Thing\Action\InteractAction\InteractAction
{
    const TYPE = 'LeaveAction';

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
