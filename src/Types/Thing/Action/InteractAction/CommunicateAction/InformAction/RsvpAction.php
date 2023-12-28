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
     * If responding yes, the number of guests who will attend in addition to the invitee.
     * @var \Vnetby\Schemaorg\DataTypes\DataNumber
     */
    protected $prop_additionalNumberOfGuests;

    /**
     * The response (yes, no, maybe) to the RSVP.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\RsvpResponseType\RsvpResponseType
     */
    protected $prop_rsvpResponse;

    /**
     * Comments, typically from users.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment
     */
    protected $prop_comment;

    /**
     * If responding yes, the number of guests who will attend in addition to the invitee.
     * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setAdditionalNumberOfGuests($value)
    {
        return $this->setProp('additionalNumberOfGuests', $value);
    }

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
     * Comments, typically from users.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment $value
     * @return static
     */
    function setComment($value)
    {
        return $this->setProp('comment', $value);
    }

    /**
     * If responding yes, the number of guests who will attend in addition to the invitee.
     * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getAdditionalNumberOfGuests()
    {
        return $this->getProp('additionalNumberOfGuests');
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
     * Comments, typically from users.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Comment\Comment|null
     */
    function getComment()
    {
        return $this->getProp('comment');
    }
}
