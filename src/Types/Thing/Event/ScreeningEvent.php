<?php

/**
 * @see https://schema.org/ScreeningEvent
 * A screening of a movie or other video.
 */

namespace Vnetby\Schemaorg\Types\Thing\Event;

class ScreeningEvent extends \Vnetby\Schemaorg\Types\Thing\Event\Event
{
    const TYPE = 'ScreeningEvent';

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
     * The movie presented during this event.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Movie
     */
    public $workPresented;

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
     * The movie presented during this event.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Movie $value
     * @return static
     */
    function setWorkPresented($value)
    {
        return $this->setProp('workPresented', $value);
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
     * The movie presented during this event.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Movie|null
     */
    function getWorkPresented()
    {
        return $this->getProp('workPresented');
    }
}
