<?php

/**
 * @see https://schema.org/MusicAlbum
 * A collection of music tracks.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicPlaylist;

class MusicAlbum extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicPlaylist\MusicPlaylist
{
    const TYPE = 'MusicAlbum';

    /**
     * The kind of release which this album is: single, EP or album.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MusicAlbumReleaseType\MusicAlbumReleaseType
     */
    public $albumReleaseType;

    /**
     * The artist that performed this album or recording.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\PerformingGroup\MusicGroup
     */
    public $byArtist;

    /**
     * Classification of the album by its type of content: soundtrack, live album, studio album, etc.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MusicAlbumProductionType\MusicAlbumProductionType
     */
    public $albumProductionType;

    /**
     * A release of this album.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicPlaylist\MusicRelease
     */
    public $albumRelease;

    /**
     * The kind of release which this album is: single, EP or album.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MusicAlbumReleaseType\MusicAlbumReleaseType $value
     * @return static
     */
    function setAlbumReleaseType($value)
    {
        return $this->setProp('albumReleaseType', $value);
    }

    /**
     * The artist that performed this album or recording.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\PerformingGroup\MusicGroup $value
     * @return static
     */
    function setByArtist($value)
    {
        return $this->setProp('byArtist', $value);
    }

    /**
     * Classification of the album by its type of content: soundtrack, live album, studio album, etc.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MusicAlbumProductionType\MusicAlbumProductionType $value
     * @return static
     */
    function setAlbumProductionType($value)
    {
        return $this->setProp('albumProductionType', $value);
    }

    /**
     * A release of this album.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicPlaylist\MusicRelease $value
     * @return static
     */
    function setAlbumRelease($value)
    {
        return $this->setProp('albumRelease', $value);
    }

    /**
     * The kind of release which this album is: single, EP or album.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MusicAlbumReleaseType\MusicAlbumReleaseType|null
     */
    function getAlbumReleaseType()
    {
        return $this->getProp('albumReleaseType');
    }

    /**
     * The artist that performed this album or recording.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\PerformingGroup\MusicGroup|null
     */
    function getByArtist()
    {
        return $this->getProp('byArtist');
    }

    /**
     * Classification of the album by its type of content: soundtrack, live album, studio album, etc.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MusicAlbumProductionType\MusicAlbumProductionType|null
     */
    function getAlbumProductionType()
    {
        return $this->getProp('albumProductionType');
    }

    /**
     * A release of this album.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicPlaylist\MusicRelease|null
     */
    function getAlbumRelease()
    {
        return $this->getProp('albumRelease');
    }
}
