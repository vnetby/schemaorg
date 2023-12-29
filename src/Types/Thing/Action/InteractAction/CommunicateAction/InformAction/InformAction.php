<?php

/**
 * @see https://schema.org/InformAction
 * The act of notifying someone of information pertinent to them, with no expectation of a response.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\InteractAction\CommunicateAction\InformAction;

class InformAction extends \Vnetby\Schemaorg\Types\Thing\Action\InteractAction\CommunicateAction\CommunicateAction
{
    const TYPE = 'InformAction';

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
