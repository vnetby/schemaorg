<?php

/**
 * @see https://schema.org/BroadcastService
 * A delivery service through which content is provided via broadcast over the air or online.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Service\BroadcastService;

class BroadcastService extends \Vnetby\Schemaorg\Types\Thing\Intangible\Service\Service
{
    const TYPE = 'BroadcastService';

    /**
     * The timezone in [ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601) for which the service bases its broadcasts.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $broadcastTimezone;

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the
     * [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $inLanguage;

    /**
     * The organization owning or operating the broadcast service.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $broadcaster;

    /**
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $callSign;

    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $videoFormat;

    /**
     * The frequency used for over-the-air broadcasts. Numeric values or simple ranges, e.g. 87-99. In addition a shortcut idiom is supported for
     * frequences of AM and FM radio channels, e.g. "87 FM".
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\BroadcastFrequencySpecification|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $broadcastFrequency;

    /**
     * A broadcast channel of a broadcast service.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\BroadcastChannel\BroadcastChannel
     */
    public $hasBroadcastChannel;

    /**
     * A broadcast service to which the broadcast service may belong to such as regional variations of a national channel.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Service\BroadcastService\BroadcastService
     */
    public $parentService;

    /**
     * The name displayed in the channel guide. For many US affiliates, it is the network name.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $broadcastDisplayName;

    /**
     * The media network(s) whose content is broadcast on this station.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $broadcastAffiliateOf;

    /**
     * The timezone in [ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601) for which the service bases its broadcasts.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setBroadcastTimezone($value)
    {
        return $this->setProp('broadcastTimezone', $value);
    }

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the
     * [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setInLanguage($value)
    {
        return $this->setProp('inLanguage', $value);
    }

    /**
     * The organization owning or operating the broadcast service.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setBroadcaster($value)
    {
        return $this->setProp('broadcaster', $value);
    }

    /**
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCallSign($value)
    {
        return $this->setProp('callSign', $value);
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
     * The frequency used for over-the-air broadcasts. Numeric values or simple ranges, e.g. 87-99. In addition a shortcut idiom is supported for
     * frequences of AM and FM radio channels, e.g. "87 FM".
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\BroadcastFrequencySpecification|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setBroadcastFrequency($value)
    {
        return $this->setProp('broadcastFrequency', $value);
    }

    /**
     * A broadcast channel of a broadcast service.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\BroadcastChannel\BroadcastChannel $value
     * @return static
     */
    function setHasBroadcastChannel($value)
    {
        return $this->setProp('hasBroadcastChannel', $value);
    }

    /**
     * A broadcast service to which the broadcast service may belong to such as regional variations of a national channel.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Service\BroadcastService\BroadcastService $value
     * @return static
     */
    function setParentService($value)
    {
        return $this->setProp('parentService', $value);
    }

    /**
     * The name displayed in the channel guide. For many US affiliates, it is the network name.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setBroadcastDisplayName($value)
    {
        return $this->setProp('broadcastDisplayName', $value);
    }

    /**
     * The media network(s) whose content is broadcast on this station.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setBroadcastAffiliateOf($value)
    {
        return $this->setProp('broadcastAffiliateOf', $value);
    }

    /**
     * The timezone in [ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601) for which the service bases its broadcasts.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getBroadcastTimezone()
    {
        return $this->getProp('broadcastTimezone');
    }

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the
     * [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getInLanguage()
    {
        return $this->getProp('inLanguage');
    }

    /**
     * The organization owning or operating the broadcast service.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getBroadcaster()
    {
        return $this->getProp('broadcaster');
    }

    /**
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCallSign()
    {
        return $this->getProp('callSign');
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
     * The frequency used for over-the-air broadcasts. Numeric values or simple ranges, e.g. 87-99. In addition a shortcut idiom is supported for
     * frequences of AM and FM radio channels, e.g. "87 FM".
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\BroadcastFrequencySpecification|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getBroadcastFrequency()
    {
        return $this->getProp('broadcastFrequency');
    }

    /**
     * A broadcast channel of a broadcast service.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\BroadcastChannel\BroadcastChannel|null
     */
    function getHasBroadcastChannel()
    {
        return $this->getProp('hasBroadcastChannel');
    }

    /**
     * A broadcast service to which the broadcast service may belong to such as regional variations of a national channel.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Service\BroadcastService\BroadcastService|null
     */
    function getParentService()
    {
        return $this->getProp('parentService');
    }

    /**
     * The name displayed in the channel guide. For many US affiliates, it is the network name.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getBroadcastDisplayName()
    {
        return $this->getProp('broadcastDisplayName');
    }

    /**
     * The media network(s) whose content is broadcast on this station.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getBroadcastAffiliateOf()
    {
        return $this->getProp('broadcastAffiliateOf');
    }
}
