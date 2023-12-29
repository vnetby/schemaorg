<?php

/**
 * @see https://schema.org/PlayGameAction
 * The act of playing a video game.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\ConsumeAction;

class PlayGameAction extends \Vnetby\Schemaorg\Types\Thing\Action\ConsumeAction\ConsumeAction
{
    const TYPE = 'PlayGameAction';

    /**
     * Indicates the availability type of the game content associated with this action, such as whether it is a full version or
     * a demo.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\GameAvailabilityEnumeration\GameAvailabilityEnumeration|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $gameAvailabilityType;

    /**
     * Indicates the availability type of the game content associated with this action, such as whether it is a full version or
     * a demo.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\GameAvailabilityEnumeration\GameAvailabilityEnumeration|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setGameAvailabilityType($value)
    {
        return $this->setProp('gameAvailabilityType', $value);
    }

    /**
     * Indicates the availability type of the game content associated with this action, such as whether it is a full version or
     * a demo.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\GameAvailabilityEnumeration\GameAvailabilityEnumeration|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getGameAvailabilityType()
    {
        return $this->getProp('gameAvailabilityType');
    }
}
