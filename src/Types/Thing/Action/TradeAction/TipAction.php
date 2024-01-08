<?php

/**
 * @see https://schema.org/TipAction
 * The act of giving money voluntarily to a beneficiary in recognition of services rendered.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\TradeAction;

class TipAction extends \Vnetby\Schemaorg\Types\Thing\Action\TradeAction\TradeAction
{
    const TYPE = 'TipAction';

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint
     */
    public $recipient;

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint $value
     * @return static
     */
    function setRecipient($value)
    {
        return $this->setProp('recipient', $value);
    }

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|null
     */
    function getRecipient()
    {
        return $this->getProp('recipient');
    }
}
