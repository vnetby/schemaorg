<?php

/**
 * @see https://schema.org/MoveAction
 * The act of an agent relocating to a place.\n\nRelated actions:\n\n* [[TransferAction]]: Unlike TransferAction, the subject of the move is a living
 * Person or Organization rather than an inanimate object.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\MoveAction;

class MoveAction extends \Vnetby\Schemaorg\Types\Thing\Action\Action
{
    const TYPE = 'MoveAction';

    /**
     * A sub property of location. The final location of the object or the agent after the action.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    protected $prop_toLocation;

    /**
     * A sub property of location. The original location of the object or the agent before the action.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    protected $prop_fromLocation;

    /**
     * A sub property of location. The final location of the object or the agent after the action.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
     * @return static
     */
    function setToLocation($value)
    {
        return $this->setProp('toLocation', $value);
    }

    /**
     * A sub property of location. The original location of the object or the agent before the action.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
     * @return static
     */
    function setFromLocation($value)
    {
        return $this->setProp('fromLocation', $value);
    }

    /**
     * A sub property of location. The final location of the object or the agent after the action.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
     */
    function getToLocation()
    {
        return $this->getProp('toLocation');
    }

    /**
     * A sub property of location. The original location of the object or the agent before the action.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
     */
    function getFromLocation()
    {
        return $this->getProp('fromLocation');
    }
}
