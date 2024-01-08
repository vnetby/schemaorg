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
     * The event being broadcast such as a sporting event or awards ceremony.
     * @var \Vnetby\Schemaorg\Types\Thing\Event\Event
     */
    public $broadcastOfEvent;

    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $videoFormat;

    /**
     * Languages in which subtitles/captions are available, in [IETF BCP 47 standard format](http://tools.ietf.org/html/bcp47).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language
     */
    public $subtitleLanguage;

    /**
     * True if the broadcast is of a live event.
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    public $isLiveBroadcast;

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
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setVideoFormat($value)
    {
        return $this->setProp('videoFormat', $value);
    }

    /**
     * Languages in which subtitles/captions are available, in [IETF BCP 47 standard format](http://tools.ietf.org/html/bcp47).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language $value
     * @return static
     */
    function setSubtitleLanguage($value)
    {
        return $this->setProp('subtitleLanguage', $value);
    }

    /**
     * True if the broadcast is of a live event.
     * @param bool|\Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setIsLiveBroadcast($value)
    {
        return $this->setProp('isLiveBroadcast', $value);
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
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getVideoFormat()
    {
        return $this->getProp('videoFormat');
    }

    /**
     * Languages in which subtitles/captions are available, in [IETF BCP 47 standard format](http://tools.ietf.org/html/bcp47).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|null
     */
    function getSubtitleLanguage()
    {
        return $this->getProp('subtitleLanguage');
    }

    /**
     * True if the broadcast is of a live event.
     * @return bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getIsLiveBroadcast()
    {
        return $this->getProp('isLiveBroadcast');
    }
}
