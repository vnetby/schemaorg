<?php

/**
 * @see https://schema.org/Clip
 * A short TV or radio program or a segment/part of a program.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\Clip;

class Clip extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'Clip';

    /**
     * The start time of the clip expressed as the number of seconds from the beginning of the work.
     * @var string|int|float|\Vnetby\Schemaorg\Types\Thing\CreativeWork\HyperTocEntry|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $startOffset;

    /**
     * The composer of the soundtrack.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\PerformingGroup\MusicGroup|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $musicBy;

    /**
     * The episode to which this clip belongs.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Episode\Episode
     */
    public $partOfEpisode;

    /**
     * The series to which this episode or season belongs.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWorkSeries\CreativeWorkSeries
     */
    public $partOfSeries;

    /**
     * An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items
     * or with a series, episode, clip.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $actor;

    /**
     * The season to which this episode belongs.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWorkSeason\CreativeWorkSeason
     */
    public $partOfSeason;

    /**
     * Position of the clip within an ordered group of clips.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $clipNumber;

    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual
     * items or with a series, episode, clip.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $director;

    /**
     * The end time of the clip expressed as the number of seconds from the beginning of the work.
     * @var string|int|float|\Vnetby\Schemaorg\Types\Thing\CreativeWork\HyperTocEntry|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $endOffset;

    /**
     * The start time of the clip expressed as the number of seconds from the beginning of the work.
     * @param string|int|float|\Vnetby\Schemaorg\Types\Thing\CreativeWork\HyperTocEntry|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setStartOffset($value)
    {
        return $this->setProp('startOffset', $value);
    }

    /**
     * The composer of the soundtrack.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\PerformingGroup\MusicGroup|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setMusicBy($value)
    {
        return $this->setProp('musicBy', $value);
    }

    /**
     * The episode to which this clip belongs.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Episode\Episode $value
     * @return static
     */
    function setPartOfEpisode($value)
    {
        return $this->setProp('partOfEpisode', $value);
    }

    /**
     * The series to which this episode or season belongs.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWorkSeries\CreativeWorkSeries $value
     * @return static
     */
    function setPartOfSeries($value)
    {
        return $this->setProp('partOfSeries', $value);
    }

    /**
     * An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items
     * or with a series, episode, clip.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setActor($value)
    {
        return $this->setProp('actor', $value);
    }

    /**
     * The season to which this episode belongs.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWorkSeason\CreativeWorkSeason $value
     * @return static
     */
    function setPartOfSeason($value)
    {
        return $this->setProp('partOfSeason', $value);
    }

    /**
     * Position of the clip within an ordered group of clips.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setClipNumber($value)
    {
        return $this->setProp('clipNumber', $value);
    }

    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual
     * items or with a series, episode, clip.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setDirector($value)
    {
        return $this->setProp('director', $value);
    }

    /**
     * The end time of the clip expressed as the number of seconds from the beginning of the work.
     * @param string|int|float|\Vnetby\Schemaorg\Types\Thing\CreativeWork\HyperTocEntry|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setEndOffset($value)
    {
        return $this->setProp('endOffset', $value);
    }

    /**
     * The start time of the clip expressed as the number of seconds from the beginning of the work.
     * @return string|int|float|\Vnetby\Schemaorg\Types\Thing\CreativeWork\HyperTocEntry|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getStartOffset()
    {
        return $this->getProp('startOffset');
    }

    /**
     * The composer of the soundtrack.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\PerformingGroup\MusicGroup|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getMusicBy()
    {
        return $this->getProp('musicBy');
    }

    /**
     * The episode to which this clip belongs.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Episode\Episode|null
     */
    function getPartOfEpisode()
    {
        return $this->getProp('partOfEpisode');
    }

    /**
     * The series to which this episode or season belongs.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWorkSeries\CreativeWorkSeries|null
     */
    function getPartOfSeries()
    {
        return $this->getProp('partOfSeries');
    }

    /**
     * An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items
     * or with a series, episode, clip.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getActor()
    {
        return $this->getProp('actor');
    }

    /**
     * The season to which this episode belongs.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWorkSeason\CreativeWorkSeason|null
     */
    function getPartOfSeason()
    {
        return $this->getProp('partOfSeason');
    }

    /**
     * Position of the clip within an ordered group of clips.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getClipNumber()
    {
        return $this->getProp('clipNumber');
    }

    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual
     * items or with a series, episode, clip.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getDirector()
    {
        return $this->getProp('director');
    }

    /**
     * The end time of the clip expressed as the number of seconds from the beginning of the work.
     * @return string|int|float|\Vnetby\Schemaorg\Types\Thing\CreativeWork\HyperTocEntry|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getEndOffset()
    {
        return $this->getProp('endOffset');
    }
}
