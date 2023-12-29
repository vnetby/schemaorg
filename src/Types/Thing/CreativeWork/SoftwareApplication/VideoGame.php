<?php

/**
 * @see https://schema.org/VideoGame
 * A video game is an electronic game that involves human interaction with a user interface to generate visual feedback on a
 * video device.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication;

class VideoGame extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\SoftwareApplication
{
    const TYPE = 'VideoGame';

    /**
     * The composer of the soundtrack.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\PerformingGroup\MusicGroup|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $musicBy;

    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual
     * items or with a series, episode, clip.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $director;

    /**
     * The electronic systems used to play <a href="http://en.wikipedia.org/wiki/Category:Video_game_platforms">video games</a>.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Thing|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $gamePlatform;

    /**
     * The trailer of a movie or TV/radio series, season, episode, etc.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\VideoObject\VideoObject
     */
    public $trailer;

    /**
     * Links to tips, tactics, etc.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $gameTip;

    /**
     * The server on which it is possible to play the game.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\GameServer
     */
    public $gameServer;

    /**
     * An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items
     * or with a series, episode, clip.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $actor;

    /**
     * The edition of a video game.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $gameEdition;

    /**
     * Indicates whether this game is multi-player, co-op or single-player. The game can be marked as multi-player, co-op and single-player at the
     * same time.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\GamePlayMode\GamePlayMode
     */
    public $playMode;

    /**
     * Cheat codes to the game.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
     */
    public $cheatCode;

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
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Thing|\Vnetby\Schemaorg\DataTypes\DataText $value
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
     * Links to tips, tactics, etc.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setGameTip($value)
    {
        return $this->setProp('gameTip', $value);
    }

    /**
     * The server on which it is possible to play the game.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\GameServer $value
     * @return static
     */
    function setGameServer($value)
    {
        return $this->setProp('gameServer', $value);
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
     * The edition of a video game.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setGameEdition($value)
    {
        return $this->setProp('gameEdition', $value);
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
     * Cheat codes to the game.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork $value
     * @return static
     */
    function setCheatCode($value)
    {
        return $this->setProp('cheatCode', $value);
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
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Thing|\Vnetby\Schemaorg\DataTypes\DataText|null
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
     * Links to tips, tactics, etc.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getGameTip()
    {
        return $this->getProp('gameTip');
    }

    /**
     * The server on which it is possible to play the game.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\GameServer|null
     */
    function getGameServer()
    {
        return $this->getProp('gameServer');
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
     * The edition of a video game.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getGameEdition()
    {
        return $this->getProp('gameEdition');
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
     * Cheat codes to the game.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork|null
     */
    function getCheatCode()
    {
        return $this->getProp('cheatCode');
    }
}
