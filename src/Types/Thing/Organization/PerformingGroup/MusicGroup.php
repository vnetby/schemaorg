<?php

/**
 * @see https://schema.org/MusicGroup
 * A musical group, such as a band, an orchestra, or a choir. Can also be a solo musician.
 */

namespace Vnetby\Schemaorg\Types\Thing\Organization\PerformingGroup;

class MusicGroup extends \Vnetby\Schemaorg\Types\Thing\Organization\PerformingGroup\PerformingGroup
{
    const TYPE = 'MusicGroup';

    /**
     * A music album.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicPlaylist\MusicAlbum
     */
    public $album;

    /**
     * Genre of the creative work, broadcast channel or group.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $genre;

    /**
     * A music recording (track)&#x2014;usually a single song. If an ItemList is given, the list should contain items of type MusicRecording.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicRecording
     */
    public $track;

    /**
     * A music album.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicPlaylist\MusicAlbum $value
     * @return static
     */
    function setAlbum($value)
    {
        return $this->setProp('album', $value);
    }

    /**
     * Genre of the creative work, broadcast channel or group.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setGenre($value)
    {
        return $this->setProp('genre', $value);
    }

    /**
     * A music recording (track)&#x2014;usually a single song. If an ItemList is given, the list should contain items of type MusicRecording.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicRecording $value
     * @return static
     */
    function setTrack($value)
    {
        return $this->setProp('track', $value);
    }

    /**
     * A music album.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicPlaylist\MusicAlbum|null
     */
    function getAlbum()
    {
        return $this->getProp('album');
    }

    /**
     * Genre of the creative work, broadcast channel or group.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getGenre()
    {
        return $this->getProp('genre');
    }

    /**
     * A music recording (track)&#x2014;usually a single song. If an ItemList is given, the list should contain items of type MusicRecording.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\ItemList\ItemList|\Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicRecording|null
     */
    function getTrack()
    {
        return $this->getProp('track');
    }
}
