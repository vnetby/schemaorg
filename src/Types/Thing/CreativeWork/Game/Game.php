<?php

/**
 * @see https://schema.org/Game
 * The Game type represents things which are games. These are typically rule-governed recreational activities, e.g. role-playing games in which players assume
 * the role of characters in a fictional setting.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\Game;

class Game extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'Game';

    /**
     * Indicate how many people can play this game (minimum, maximum, or range).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $numberOfPlayers;

    /**
     * The task that a player-controlled character, or group of characters may complete in order to gain a reward.
     * @var \Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $quest;

    /**
     * An item is an object within the game world that can be collected by a player or, occasionally, a non-player character.
     * @var \Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $gameItem;

    /**
     * A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
     * @var \Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $characterAttribute;

    /**
     * Real or fictional location of the game (or part of game).
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    public $gameLocation;

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
     * The task that a player-controlled character, or group of characters may complete in order to gain a reward.
     * @param \Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setQuest($value)
    {
        return $this->setProp('quest', $value);
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
     * A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
     * @param \Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setCharacterAttribute($value)
    {
        return $this->setProp('characterAttribute', $value);
    }

    /**
     * Real or fictional location of the game (or part of game).
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Place\Place $value
     * @return static
     */
    function setGameLocation($value)
    {
        return $this->setProp('gameLocation', $value);
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
     * The task that a player-controlled character, or group of characters may complete in order to gain a reward.
     * @return \Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getQuest()
    {
        return $this->getProp('quest');
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
     * A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
     * @return \Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getCharacterAttribute()
    {
        return $this->getProp('characterAttribute');
    }

    /**
     * Real or fictional location of the game (or part of game).
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Place\Place|null
     */
    function getGameLocation()
    {
        return $this->getProp('gameLocation');
    }
}
