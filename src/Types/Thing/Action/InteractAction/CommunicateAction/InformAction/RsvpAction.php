<?php

/**
 * @see https://schema.org/RsvpAction
 * The act of notifying an event organizer as to whether you expect to attend the event.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\InteractAction\CommunicateAction\InformAction;

class RsvpAction extends \Vnetby\Schemaorg\Types\Thing\Action\InteractAction\CommunicateAction\InformAction\InformAction
{
    const TYPE = 'RsvpAction';

    /**
     * The response (yes, no, maybe) to the RSVP.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\RsvpResponseType\RsvpResponseType
     */
    public $rsvpResponse;

    /**
     * If responding yes, the number of guests who will attend in addition to the invitee.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $additionalNumberOfGuests;

    /**
     * Comments, typically from users.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment
     */
    public $comment;

    /**
     * The response (yes, no, maybe) to the RSVP.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\RsvpResponseType\RsvpResponseType $value
     * @return static
     */
    function setRsvpResponse($value)
    {
        return $this->setProp('rsvpResponse', $value);
    }

    /**
     * If responding yes, the number of guests who will attend in addition to the invitee.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setAdditionalNumberOfGuests($value)
    {
        return $this->setProp('additionalNumberOfGuests', $value);
    }

    /**
     * Comments, typically from users.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment $value
     * @return static
     */
    function setComment($value)
    {
        return $this->setProp('comment', $value);
    }

    /**
     * The response (yes, no, maybe) to the RSVP.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\RsvpResponseType\RsvpResponseType|null
     */
    function getRsvpResponse()
    {
        return $this->getProp('rsvpResponse');
    }

    /**
     * If responding yes, the number of guests who will attend in addition to the invitee.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getAdditionalNumberOfGuests()
    {
        return $this->getProp('additionalNumberOfGuests');
    }

    /**
     * Comments, typically from users.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment|null
     */
    function getComment()
    {
        return $this->getProp('comment');
    }
}
