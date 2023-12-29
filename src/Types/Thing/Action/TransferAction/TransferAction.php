<?php

/**
 * @see https://schema.org/TransferAction
 * The act of transferring/moving (abstract or concrete) animate or inanimate objects from one place to another.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\TransferAction;

class TransferAction extends \Vnetby\Schemaorg\Types\Thing\Action\Action
{
    const TYPE = 'TransferAction';

    /**
     * A sub property of location. The final location of the object or the agent after the action.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    public $toLocation;

    /**
     * A sub property of location. The original location of the object or the agent before the action.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    public $fromLocation;

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
