<?php

/**
 * @see https://schema.org/LoseAction
 * The act of being defeated in a competitive activity.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\AchieveAction;

class LoseAction extends \Vnetby\Schemaorg\Types\Thing\Action\AchieveAction\AchieveAction
{
    const TYPE = 'LoseAction';

    /**
     * A sub property of participant. The winner of the action.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $winner;

    /**
     * A sub property of participant. The winner of the action.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setWinner($value)
    {
        return $this->setProp('winner', $value);
    }

    /**
     * A sub property of participant. The winner of the action.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getWinner()
    {
        return $this->getProp('winner');
    }
}
