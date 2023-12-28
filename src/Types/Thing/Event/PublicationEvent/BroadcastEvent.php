<?php

/**
 * @see https://schema.org/BroadcastEvent
 * An over the air or online broadcast event.
 */

namespace Vnetby\Schemaorg\Types\Thing\Event\PublicationEvent;

class BroadcastEvent extends \Vnetby\Schemaorg\Types\Thing\Event\PublicationEvent\PublicationEvent
{
    const TYPE = 'BroadcastEvent';

    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_videoFormat;

    /**
     * The event being broadcast such as a sporting event or awards ceremony.
     * @var \Vnetby\Schemaorg\Types\Thing\Event\Event
     */
    protected $prop_broadcastOfEvent;

    /**
     * True if the broadcast is of a live event.
     * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    protected $prop_isLiveBroadcast;

    /**
     * Languages in which subtitles/captions are available, in [IETF BCP 47 standard format](http://tools.ietf.org/html/bcp47).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Language|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_subtitleLanguage;

    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setVideoFormat($value)
    {
        return $this->setProp('videoFormat', $value);
    }

    /**
     * The event being broadcast such as a sporting event or awards ceremony.
     * @param \Vnetby\Schemaorg\Types\Thing\Event\Event $value
     * @return static
     */
    function setBroadcastOfEvent($value)
    {
        return $this->setProp('broadcastOfEvent', $value);
    }

    /**
     * True if the broadcast is of a live event.
     * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setIsLiveBroadcast($value)
    {
        return $this->setProp('isLiveBroadcast', $value);
    }

    /**
     * Languages in which subtitles/captions are available, in [IETF BCP 47 standard format](http://tools.ietf.org/html/bcp47).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Language|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSubtitleLanguage($value)
    {
        return $this->setProp('subtitleLanguage', $value);
    }

    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getVideoFormat()
    {
        return $this->getProp('videoFormat');
    }

    /**
     * The event being broadcast such as a sporting event or awards ceremony.
     * @return \Vnetby\Schemaorg\Types\Thing\Event\Event|null
     */
    function getBroadcastOfEvent()
    {
        return $this->getProp('broadcastOfEvent');
    }

    /**
     * True if the broadcast is of a live event.
     * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getIsLiveBroadcast()
    {
        return $this->getProp('isLiveBroadcast');
    }

    /**
     * Languages in which subtitles/captions are available, in [IETF BCP 47 standard format](http://tools.ietf.org/html/bcp47).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Language|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSubtitleLanguage()
    {
        return $this->getProp('subtitleLanguage');
    }
}
