<?php

/**
 * @see https://schema.org/GameServer
 * Server that provides game interaction in a multiplayer game.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class GameServer extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'GameServer';

    /**
     * Status of a game server.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\GameServerStatus\GameServerStatus
     */
    public $serverStatus;

    /**
     * Number of players on the server.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $playersOnline;

    /**
     * Video game which is played on this server.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Game\VideoGame
     */
    public $game;

    /**
     * Status of a game server.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\GameServerStatus\GameServerStatus $value
     * @return static
     */
    function setServerStatus($value)
    {
        return $this->setProp('serverStatus', $value);
    }

    /**
     * Number of players on the server.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setPlayersOnline($value)
    {
        return $this->setProp('playersOnline', $value);
    }

    /**
     * Video game which is played on this server.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Game\VideoGame $value
     * @return static
     */
    function setGame($value)
    {
        return $this->setProp('game', $value);
    }

    /**
     * Status of a game server.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\GameServerStatus\GameServerStatus|null
     */
    function getServerStatus()
    {
        return $this->getProp('serverStatus');
    }

    /**
     * Number of players on the server.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getPlayersOnline()
    {
        return $this->getProp('playersOnline');
    }

    /**
     * Video game which is played on this server.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Game\VideoGame|null
     */
    function getGame()
    {
        return $this->getProp('game');
    }
}
