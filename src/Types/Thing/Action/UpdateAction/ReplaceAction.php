<?php

/**
 * @see https://schema.org/ReplaceAction
 * The act of editing a recipient by replacing an old object with a new object.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\UpdateAction;

class ReplaceAction extends \Vnetby\Schemaorg\Types\Thing\Action\UpdateAction\UpdateAction
{
    const TYPE = 'ReplaceAction';

    /**
     * A sub property of object. The object that is being replaced.
     * @var \Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $replacee;

    /**
     * A sub property of object. The object that replaces.
     * @var \Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $replacer;

    /**
     * A sub property of object. The object that is being replaced.
     * @param \Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setReplacee($value)
    {
        return $this->setProp('replacee', $value);
    }

    /**
     * A sub property of object. The object that replaces.
     * @param \Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setReplacer($value)
    {
        return $this->setProp('replacer', $value);
    }

    /**
     * A sub property of object. The object that is being replaced.
     * @return \Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getReplacee()
    {
        return $this->getProp('replacee');
    }

    /**
     * A sub property of object. The object that replaces.
     * @return \Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getReplacer()
    {
        return $this->getProp('replacer');
    }
}
