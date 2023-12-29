<?php

/**
 * @see https://schema.org/VoteAction
 * The act of expressing a preference from a fixed/finite/structured set of choices/options.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\AssessAction\ChooseAction;

class VoteAction extends \Vnetby\Schemaorg\Types\Thing\Action\AssessAction\ChooseAction\ChooseAction
{
    const TYPE = 'VoteAction';

    /**
     * A sub property of object. The candidate subject of this action.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $candidate;

    /**
     * A sub property of object. The candidate subject of this action.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setCandidate($value)
    {
        return $this->setProp('candidate', $value);
    }

    /**
     * A sub property of object. The candidate subject of this action.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getCandidate()
    {
        return $this->getProp('candidate');
    }
}
