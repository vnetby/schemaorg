<?php

/**
 * @see https://schema.org/UpdateAction
 * The act of managing by changing/editing the state of the object.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\UpdateAction;

class UpdateAction extends \Vnetby\Schemaorg\Types\Thing\Action\Action
{
    const TYPE = 'UpdateAction';

    /**
     * A sub property of object. The collection target of the action.
     * @var \Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $targetCollection;

    /**
     * A sub property of object. The collection target of the action.
     * @param \Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setTargetCollection($value)
    {
        return $this->setProp('targetCollection', $value);
    }

    /**
     * A sub property of object. The collection target of the action.
     * @return \Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getTargetCollection()
    {
        return $this->getProp('targetCollection');
    }
}
