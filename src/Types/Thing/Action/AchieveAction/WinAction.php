<?php

/**
 * @see https://schema.org/WinAction
 * The act of achieving victory in a competitive activity.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\AchieveAction;

class WinAction extends \Vnetby\Schemaorg\Types\Thing\Action\AchieveAction\AchieveAction
{
    const TYPE = 'WinAction';

    /**
     * A sub property of participant. The loser of the action.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $loser;

    /**
     * A sub property of participant. The loser of the action.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setLoser($value)
    {
        return $this->setProp('loser', $value);
    }

    /**
     * A sub property of participant. The loser of the action.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getLoser()
    {
        return $this->getProp('loser');
    }
}
