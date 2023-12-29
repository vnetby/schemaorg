<?php

/**
 * @see https://schema.org/PublicationEvent
 * A PublicationEvent corresponds indifferently to the event of publication for a CreativeWork of any type, e.g. a broadcast event, an on-demand
 * event, a book/journal publication via a variety of delivery media.
 */

namespace Vnetby\Schemaorg\Types\Thing\Event\PublicationEvent;

class PublicationEvent extends \Vnetby\Schemaorg\Types\Thing\Event\Event
{
    const TYPE = 'PublicationEvent';

    /**
     * A broadcast service associated with the publication event.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Service\BroadcastService\BroadcastService
     */
    public $publishedOn;

    /**
     * An agent associated with the publication event.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $publishedBy;

    /**
     * A broadcast service associated with the publication event.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Service\BroadcastService\BroadcastService $value
     * @return static
     */
    function setPublishedOn($value)
    {
        return $this->setProp('publishedOn', $value);
    }

    /**
     * An agent associated with the publication event.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setPublishedBy($value)
    {
        return $this->setProp('publishedBy', $value);
    }

    /**
     * A broadcast service associated with the publication event.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Service\BroadcastService\BroadcastService|null
     */
    function getPublishedOn()
    {
        return $this->getProp('publishedOn');
    }

    /**
     * An agent associated with the publication event.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getPublishedBy()
    {
        return $this->getProp('publishedBy');
    }
}
