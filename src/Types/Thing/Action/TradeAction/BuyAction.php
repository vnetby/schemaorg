<?php

/**
 * @see https://schema.org/BuyAction
 * The act of giving money to a seller in exchange for goods or services rendered. An agent buys an object, product,
 * or service from a seller for a price. Reciprocal of SellAction.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\TradeAction;

class BuyAction extends \Vnetby\Schemaorg\Types\Thing\Action\TradeAction\TradeAction
{
    const TYPE = 'BuyAction';

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods. A seller may also be a
     * provider.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_seller;

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods. A seller may also be a
     * provider.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setSeller($value)
    {
        return $this->setProp('seller', $value);
    }

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods. A seller may also be a
     * provider.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getSeller()
    {
        return $this->getProp('seller');
    }
}
