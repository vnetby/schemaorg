<?php

/**
 * @see https://schema.org/MusicRecording
 * A music recording (track), usually a single song.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class MusicRecording extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'MusicRecording';

    /**
     * The artist that performed this album or recording.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\PerformingGroup\MusicGroup
     */
    public $byArtist;

    /**
     * The playlist to which this recording belongs.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicPlaylist\MusicPlaylist
     */
    public $inPlaylist;

    /**
     * The composition this track is a recording of.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicComposition
     */
    public $recordingOf;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    public $duration;

    /**
     * The International Standard Recording Code for the recording.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $isrcCode;

    /**
     * The album to which this recording belongs.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicPlaylist\MusicAlbum
     */
    public $inAlbum;

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
     * The playlist to which this recording belongs.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicPlaylist\MusicPlaylist $value
     * @return static
     */
    function setInPlaylist($value)
    {
        return $this->setProp('inPlaylist', $value);
    }

    /**
     * The composition this track is a recording of.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicComposition $value
     * @return static
     */
    function setRecordingOf($value)
    {
        return $this->setProp('recordingOf', $value);
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
     * The International Standard Recording Code for the recording.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setIsrcCode($value)
    {
        return $this->setProp('isrcCode', $value);
    }

    /**
     * The album to which this recording belongs.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicPlaylist\MusicAlbum $value
     * @return static
     */
    function setInAlbum($value)
    {
        return $this->setProp('inAlbum', $value);
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
     * The playlist to which this recording belongs.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicPlaylist\MusicPlaylist|null
     */
    function getInPlaylist()
    {
        return $this->getProp('inPlaylist');
    }

    /**
     * The composition this track is a recording of.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicComposition|null
     */
    function getRecordingOf()
    {
        return $this->getProp('recordingOf');
    }

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
     */
    function getDuration()
    {
        return $this->getProp('duration');
    }

    /**
     * The International Standard Recording Code for the recording.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getIsrcCode()
    {
        return $this->getProp('isrcCode');
    }

    /**
     * The album to which this recording belongs.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MusicPlaylist\MusicAlbum|null
     */
    function getInAlbum()
    {
        return $this->getProp('inAlbum');
    }
}
