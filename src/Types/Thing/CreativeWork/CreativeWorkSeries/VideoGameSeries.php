<?php

/**
 * @see https://schema.org/VideoGameSeries
 * A video game series.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWorkSeries;

class VideoGameSeries extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWorkSeries\CreativeWorkSeries
{
    const TYPE = 'VideoGameSeries';

    /**
     * A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
     * @var \Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $characterAttribute;

    /**
     * The composer of the soundtrack.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\PerformingGroup\MusicGroup|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $musicBy;

    /**
     * Real or fictional location of the game (or part of game).
     * @var string|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $gameLocation;

    /**
     * The production company or studio responsible for the item, e.g. series, video game, episode etc.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $productionCompany;

    /**
     * Cheat codes to the game.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $cheatCode;

    /**
     * An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items
     * or with a series, episode, clip.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $actor;

    /**
     * An item is an object within the game world that can be collected by a player or, occasionally, a non-player character.
     * @var \Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $gameItem;

    /**
     * The task that a player-controlled character, or group of characters may complete in order to gain a reward.
     * @var \Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $quest;

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
     * Indicates whether this game is multi-player, co-op or single-player. The game can be marked as multi-player, co-op and single-player at the
     * same time.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\GamePlayMode\GamePlayMode
     */
    public $playMode;

    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual
     * items or with a series, episode, clip.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $director;

    /**
     * The electronic systems used to play <a href="http://en.wikipedia.org/wiki/Category:Video_game_platforms">video games</a>.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $gamePlatform;

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
     * Indicate how many people can play this game (minimum, maximum, or range).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $numberOfPlayers;

    /**
     * The number of seasons in this series.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $numberOfSeasons;

    /**
     * A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
     * @param \Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setCharacterAttribute($value)
    {
        return $this->setProp('characterAttribute', $value);
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
     * Real or fictional location of the game (or part of game).
     * @param string|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setGameLocation($value)
    {
        return $this->setProp('gameLocation', $value);
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
     * Cheat codes to the game.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setCheatCode($value)
    {
        return $this->setProp('cheatCode', $value);
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
     * An item is an object within the game world that can be collected by a player or, occasionally, a non-player character.
     * @param \Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setGameItem($value)
    {
        return $this->setProp('gameItem', $value);
    }

    /**
     * The task that a player-controlled character, or group of characters may complete in order to gain a reward.
     * @param \Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setQuest($value)
    {
        return $this->setProp('quest', $value);
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
     * Indicates whether this game is multi-player, co-op or single-player. The game can be marked as multi-player, co-op and single-player at the
     * same time.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\GamePlayMode\GamePlayMode $value
     * @return static
     */
    function setPlayMode($value)
    {
        return $this->setProp('playMode', $value);
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
     * The electronic systems used to play <a href="http://en.wikipedia.org/wiki/Category:Video_game_platforms">video games</a>.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setGamePlatform($value)
    {
        return $this->setProp('gamePlatform', $value);
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
     * Indicate how many people can play this game (minimum, maximum, or range).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setNumberOfPlayers($value)
    {
        return $this->setProp('numberOfPlayers', $value);
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
     * A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
     * @return \Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getCharacterAttribute()
    {
        return $this->getProp('characterAttribute');
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
     * Real or fictional location of the game (or part of game).
     * @return string|\Vnetby\Schemaorg\Types\Thing\Place\Place|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getGameLocation()
    {
        return $this->getProp('gameLocation');
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
     * Cheat codes to the game.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getCheatCode()
    {
        return $this->getProp('cheatCode');
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
     * An item is an object within the game world that can be collected by a player or, occasionally, a non-player character.
     * @return \Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getGameItem()
    {
        return $this->getProp('gameItem');
    }

    /**
     * The task that a player-controlled character, or group of characters may complete in order to gain a reward.
     * @return \Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getQuest()
    {
        return $this->getProp('quest');
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
     * Indicates whether this game is multi-player, co-op or single-player. The game can be marked as multi-player, co-op and single-player at the
     * same time.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\GamePlayMode\GamePlayMode|null
     */
    function getPlayMode()
    {
        return $this->getProp('playMode');
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
     * The electronic systems used to play <a href="http://en.wikipedia.org/wiki/Category:Video_game_platforms">video games</a>.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getGamePlatform()
    {
        return $this->getProp('gamePlatform');
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
     * Indicate how many people can play this game (minimum, maximum, or range).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getNumberOfPlayers()
    {
        return $this->getProp('numberOfPlayers');
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
