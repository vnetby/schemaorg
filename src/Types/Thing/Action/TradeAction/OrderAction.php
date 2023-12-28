<?php

/**
 * @see https://schema.org/OrderAction
 * An agent orders an object/product/service to be delivered/sent.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\TradeAction;

class OrderAction extends \Vnetby\Schemaorg\Types\Thing\Action\TradeAction\TradeAction
{
    const TYPE = 'OrderAction';

    /**
     * A sub property of instrument. The method of delivery.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod
     */
    protected $prop_deliveryMethod;

    /**
     * A sub property of instrument. The method of delivery.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod $value
     * @return static
     */
    function setDeliveryMethod($value)
    {
        return $this->setProp('deliveryMethod', $value);
    }

    /**
     * A sub property of instrument. The method of delivery.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod|null
     */
    function getDeliveryMethod()
    {
        return $this->getProp('deliveryMethod');
    }
}
