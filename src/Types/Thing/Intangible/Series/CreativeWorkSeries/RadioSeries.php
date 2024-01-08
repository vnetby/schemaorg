<?php

/**
 * @see https://schema.org/RadioSeries
 * CreativeWorkSeries dedicated to radio broadcast and associated online delivery.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Series\CreativeWorkSeries;

class RadioSeries extends \Vnetby\Schemaorg\Types\Thing\Intangible\Series\CreativeWorkSeries\CreativeWorkSeries
{
    const TYPE = 'RadioSeries';

    /**
     * The composer of the soundtrack.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\PerformingGroup\MusicGroup|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $musicBy;

    /**
     * The production company or studio responsible for the item, e.g. series, video game, episode etc.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $productionCompany;

    /**
     * An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items
     * or with a series, episode, clip.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $actor;

    /**
     * An episode of a TV, radio or game media within a series or season.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Episode\Episode
     */
    public $episode;

    /**
     * A season that is part of the media series.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWorkSeason\CreativeWorkSeason
     */
    public $containsSeason;

    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual
     * items or with a series, episode, clip.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $director;

    /**
     * The trailer of a movie or TV/radio series, season, episode, etc.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\VideoObject\VideoObject
     */
    public $trailer;

    /**
     * The number of episodes in this season or series.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $numberOfEpisodes;

    /**
     * The number of seasons in this series.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $numberOfSeasons;

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
     * The production company or studio responsible for the item, e.g. series, video game, episode etc.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setProductionCompany($value)
    {
        return $this->setProp('productionCompany', $value);
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
     * An episode of a TV, radio or game media within a series or season.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Episode\Episode $value
     * @return static
     */
    function setEpisode($value)
    {
        return $this->setProp('episode', $value);
    }

    /**
     * A season that is part of the media series.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWorkSeason\CreativeWorkSeason $value
     * @return static
     */
    function setContainsSeason($value)
    {
        return $this->setProp('containsSeason', $value);
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
     * The trailer of a movie or TV/radio series, season, episode, etc.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\VideoObject\VideoObject $value
     * @return static
     */
    function setTrailer($value)
    {
        return $this->setProp('trailer', $value);
    }

    /**
     * The number of episodes in this season or series.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setNumberOfEpisodes($value)
    {
        return $this->setProp('numberOfEpisodes', $value);
    }

    /**
     * The number of seasons in this series.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setNumberOfSeasons($value)
    {
        return $this->setProp('numberOfSeasons', $value);
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
     * The production company or studio responsible for the item, e.g. series, video game, episode etc.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getProductionCompany()
    {
        return $this->getProp('productionCompany');
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
     * An episode of a TV, radio or game media within a series or season.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Episode\Episode|null
     */
    function getEpisode()
    {
        return $this->getProp('episode');
    }

    /**
     * A season that is part of the media series.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWorkSeason\CreativeWorkSeason|null
     */
    function getContainsSeason()
    {
        return $this->getProp('containsSeason');
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
     * The trailer of a movie or TV/radio series, season, episode, etc.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\VideoObject\VideoObject|null
     */
    function getTrailer()
    {
        return $this->getProp('trailer');
    }

    /**
     * The number of episodes in this season or series.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getNumberOfEpisodes()
    {
        return $this->getProp('numberOfEpisodes');
    }

    /**
     * The number of seasons in this series.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getNumberOfSeasons()
    {
        return $this->getProp('numberOfSeasons');
    }
}
