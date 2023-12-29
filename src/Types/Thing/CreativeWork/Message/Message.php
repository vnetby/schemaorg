<?php

/**
 * @see https://schema.org/Message
 * A single message from a sender to one or more organizations or people.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\Message;

class Message extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'Message';

    /**
     * The date/time at which the message was sent.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $dateSent;

    /**
     * The date/time the message was received if a single recipient exists.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $dateReceived;

    /**
     * A sub property of recipient. The recipient copied on a message.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $ccRecipient;

    /**
     * A sub property of recipient. The recipient who was directly sent the message.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience
     */
    public $toRecipient;

    /**
     * A sub property of participant. The participant who is at the sending end of the action.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience
     */
    public $sender;

    /**
     * A CreativeWork attached to the message.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $messageAttachment;

    /**
     * The date/time at which the message has been read by the recipient if a single recipient exists.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $dateRead;

    /**
     * A sub property of recipient. The recipient blind copied on a message.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $bccRecipient;

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience
     */
    public $recipient;

    /**
     * The date/time at which the message was sent.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setDateSent($value)
    {
        return $this->setProp('dateSent', $value);
    }

    /**
     * The date/time the message was received if a single recipient exists.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setDateReceived($value)
    {
        return $this->setProp('dateReceived', $value);
    }

    /**
     * A sub property of recipient. The recipient copied on a message.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setCcRecipient($value)
    {
        return $this->setProp('ccRecipient', $value);
    }

    /**
     * A sub property of recipient. The recipient who was directly sent the message.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience $value
     * @return static
     */
    function setToRecipient($value)
    {
        return $this->setProp('toRecipient', $value);
    }

    /**
     * A sub property of participant. The participant who is at the sending end of the action.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience $value
     * @return static
     */
    function setSender($value)
    {
        return $this->setProp('sender', $value);
    }

    /**
     * A CreativeWork attached to the message.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setMessageAttachment($value)
    {
        return $this->setProp('messageAttachment', $value);
    }

    /**
     * The date/time at which the message has been read by the recipient if a single recipient exists.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setDateRead($value)
    {
        return $this->setProp('dateRead', $value);
    }

    /**
     * A sub property of recipient. The recipient blind copied on a message.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setBccRecipient($value)
    {
        return $this->setProp('bccRecipient', $value);
    }

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience $value
     * @return static
     */
    function setRecipient($value)
    {
        return $this->setProp('recipient', $value);
    }

    /**
     * The date/time at which the message was sent.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getDateSent()
    {
        return $this->getProp('dateSent');
    }

    /**
     * The date/time the message was received if a single recipient exists.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getDateReceived()
    {
        return $this->getProp('dateReceived');
    }

    /**
     * A sub property of recipient. The recipient copied on a message.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getCcRecipient()
    {
        return $this->getProp('ccRecipient');
    }

    /**
     * A sub property of recipient. The recipient who was directly sent the message.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|null
     */
    function getToRecipient()
    {
        return $this->getProp('toRecipient');
    }

    /**
     * A sub property of participant. The participant who is at the sending end of the action.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|null
     */
    function getSender()
    {
        return $this->getProp('sender');
    }

    /**
     * A CreativeWork attached to the message.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getMessageAttachment()
    {
        return $this->getProp('messageAttachment');
    }

    /**
     * The date/time at which the message has been read by the recipient if a single recipient exists.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getDateRead()
    {
        return $this->getProp('dateRead');
    }

    /**
     * A sub property of recipient. The recipient blind copied on a message.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getBccRecipient()
    {
        return $this->getProp('bccRecipient');
    }

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|null
     */
    function getRecipient()
    {
        return $this->getProp('recipient');
    }
}
