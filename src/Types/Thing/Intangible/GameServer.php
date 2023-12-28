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
   protected $prop_serverStatus;

   /**
     * Video game which is played on this server.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\VideoGame
    */
   protected $prop_game;

   /**
     * Number of players on the server.
    * @var \Vnetby\Schemaorg\DataTypes\DataInteger
    */
   protected $prop_playersOnline;

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
     * Video game which is played on this server.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\VideoGame $value
    * @return static
    */
   function setGame($value)
   {
       return $this->setProp('game', $value);
   }

   /**
     * Number of players on the server.
    * @param \Vnetby\Schemaorg\DataTypes\DataInteger $value
    * @return static
    */
   function setPlayersOnline($value)
   {
       return $this->setProp('playersOnline', $value);
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
     * Video game which is played on this server.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\SoftwareApplication\VideoGame|null
    */
   function getGame()
   {
       return $this->getProp('game');
   }

   /**
     * Number of players on the server.
    * @return \Vnetby\Schemaorg\DataTypes\DataInteger|null
    */
   function getPlayersOnline()
   {
       return $this->getProp('playersOnline');
   }
}
