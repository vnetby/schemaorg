<?php

/**
 * @see https://schema.org/EndorseAction
 * An agent approves/certifies/likes/supports/sanctions an object.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\AssessAction\ReactAction;

class EndorseAction extends \Vnetby\Schemaorg\Types\Thing\Action\AssessAction\ReactAction\ReactAction
{
    const TYPE = 'EndorseAction';

    /**
     * A sub property of participant. The person/organization being supported.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $endorsee;

    /**
     * A sub property of participant. The person/organization being supported.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setEndorsee($value)
    {
        return $this->setProp('endorsee', $value);
    }

    /**
     * A sub property of participant. The person/organization being supported.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getEndorsee()
    {
        return $this->getProp('endorsee');
    }
}
