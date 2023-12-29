<?php

/**
 * @see https://schema.org/JoinAction
 * An agent joins an event/group with participants/friends at a location.\n\nRelated actions:\n\n* [[RegisterAction]]: Unlike RegisterAction, JoinAction refers to joining a group/team of
 * people.\n* [[SubscribeAction]]: Unlike SubscribeAction, JoinAction does not imply that you'll be receiving updates.\n* [[FollowAction]]: Unlike FollowAction, JoinAction does not imply that
 * you'll be polling for updates.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\InteractAction;

class JoinAction extends \Vnetby\Schemaorg\Types\Thing\Action\InteractAction\InteractAction
{
    const TYPE = 'JoinAction';

    /**
     * Upcoming or past event associated with this place, organization, or action.
     * @var \Vnetby\Schemaorg\Types\Thing\Event\Event
     */
    public $event;

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
