<?php

/**
 * @see https://schema.org/BroadcastChannel
 * A unique instance of a BroadcastService on a CableOrSatelliteService lineup.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\BroadcastChannel;

class BroadcastChannel extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'BroadcastChannel';

    /**
     * The CableOrSatelliteService offering the channel.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Service\CableOrSatelliteService
     */
    public $inBroadcastLineup;

    /**
     * The unique address by which the BroadcastService can be identified in a provider lineup. In US, this is typically a number.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $broadcastChannelId;

    /**
     * Genre of the creative work, broadcast channel or group.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $genre;

    /**
     * The type of service required to have access to the channel (e.g. Standard or Premium).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $broadcastServiceTier;

    /**
     * The BroadcastService offered on this channel.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Service\BroadcastService\BroadcastService
     */
    public $providesBroadcastService;

    /**
     * The frequency used for over-the-air broadcasts. Numeric values or simple ranges, e.g. 87-99. In addition a shortcut idiom is supported for
     * frequences of AM and FM radio channels, e.g. "87 FM".
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\BroadcastFrequencySpecification|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $broadcastFrequency;

    /**
     * The CableOrSatelliteService offering the channel.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Service\CableOrSatelliteService $value
     * @return static
     */
    function setInBroadcastLineup($value)
    {
        return $this->setProp('inBroadcastLineup', $value);
    }

    /**
     * The unique address by which the BroadcastService can be identified in a provider lineup. In US, this is typically a number.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setBroadcastChannelId($value)
    {
        return $this->setProp('broadcastChannelId', $value);
    }

    /**
     * Genre of the creative work, broadcast channel or group.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setGenre($value)
    {
        return $this->setProp('genre', $value);
    }

    /**
     * The type of service required to have access to the channel (e.g. Standard or Premium).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setBroadcastServiceTier($value)
    {
        return $this->setProp('broadcastServiceTier', $value);
    }

    /**
     * The BroadcastService offered on this channel.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Service\BroadcastService\BroadcastService $value
     * @return static
     */
    function setProvidesBroadcastService($value)
    {
        return $this->setProp('providesBroadcastService', $value);
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
     * The CableOrSatelliteService offering the channel.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Service\CableOrSatelliteService|null
     */
    function getInBroadcastLineup()
    {
        return $this->getProp('inBroadcastLineup');
    }

    /**
     * The unique address by which the BroadcastService can be identified in a provider lineup. In US, this is typically a number.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getBroadcastChannelId()
    {
        return $this->getProp('broadcastChannelId');
    }

    /**
     * Genre of the creative work, broadcast channel or group.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getGenre()
    {
        return $this->getProp('genre');
    }

    /**
     * The type of service required to have access to the channel (e.g. Standard or Premium).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getBroadcastServiceTier()
    {
        return $this->getProp('broadcastServiceTier');
    }

    /**
     * The BroadcastService offered on this channel.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Service\BroadcastService\BroadcastService|null
     */
    function getProvidesBroadcastService()
    {
        return $this->getProp('providesBroadcastService');
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
}
