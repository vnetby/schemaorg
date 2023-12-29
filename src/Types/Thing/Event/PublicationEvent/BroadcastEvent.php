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
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $videoFormat;

    /**
     * The event being broadcast such as a sporting event or awards ceremony.
     * @var \Vnetby\Schemaorg\Types\Thing\Event\Event
     */
    public $broadcastOfEvent;

    /**
     * True if the broadcast is of a live event.
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    public $isLiveBroadcast;

    /**
     * Languages in which subtitles/captions are available, in [IETF BCP 47 standard format](http://tools.ietf.org/html/bcp47).
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $subtitleLanguage;

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
     * @param bool|\Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setIsLiveBroadcast($value)
    {
        return $this->setProp('isLiveBroadcast', $value);
    }

    /**
     * Languages in which subtitles/captions are available, in [IETF BCP 47 standard format](http://tools.ietf.org/html/bcp47).
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSubtitleLanguage($value)
    {
        return $this->setProp('subtitleLanguage', $value);
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
     * The event being broadcast such as a sporting event or awards ceremony.
     * @return \Vnetby\Schemaorg\Types\Thing\Event\Event|null
     */
    function getBroadcastOfEvent()
    {
        return $this->getProp('broadcastOfEvent');
    }

    /**
     * True if the broadcast is of a live event.
     * @return bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getIsLiveBroadcast()
    {
        return $this->getProp('isLiveBroadcast');
    }

    /**
     * Languages in which subtitles/captions are available, in [IETF BCP 47 standard format](http://tools.ietf.org/html/bcp47).
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSubtitleLanguage()
    {
        return $this->getProp('subtitleLanguage');
    }
}
