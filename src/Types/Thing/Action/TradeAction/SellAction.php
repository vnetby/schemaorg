<?php

/**
 * @see https://schema.org/SellAction
 * The act of taking money from a buyer in exchange for goods or services rendered. An agent sells an object, product,
 * or service to a buyer for a price. Reciprocal of BuyAction.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\TradeAction;

class SellAction extends \Vnetby\Schemaorg\Types\Thing\Action\TradeAction\TradeAction
{
    const TYPE = 'SellAction';

    /**
     * A sub property of participant. The participant/person/organization that bought the object.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_buyer;

    /**
     * A sub property of participant. The participant/person/organization that bought the object.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setBuyer($value)
    {
        return $this->setProp('buyer', $value);
    }

    /**
     * A sub property of participant. The participant/person/organization that bought the object.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getBuyer()
    {
        return $this->getProp('buyer');
    }
}
