<?php

/**
 * @see https://schema.org/Audiobook
 * An audiobook.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\AudioObject;

class Audiobook extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\AudioObject\AudioObject
{
    const TYPE = 'Audiobook';

    /**
     * A person who reads (performs) the audiobook.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    protected $prop_readBy;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    protected $prop_duration;

    /**
     * A person who reads (performs) the audiobook.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setReadBy($value)
    {
        return $this->setProp('readBy', $value);
    }

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
     * @return static
     */
    function setDuration($value)
    {
        return $this->setProp('duration', $value);
    }

    /**
     * A person who reads (performs) the audiobook.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getReadBy()
    {
        return $this->getProp('readBy');
    }

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
     */
    function getDuration()
    {
        return $this->getProp('duration');
    }
}
