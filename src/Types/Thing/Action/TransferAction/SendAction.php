<?php

/**
 * @see https://schema.org/SendAction
 * The act of physically/electronically dispatching an object for transfer from an origin to a destination. Related actions:\n\n* [[ReceiveAction]]: The reciprocal of
 * SendAction.\n* [[GiveAction]]: Unlike GiveAction, SendAction does not imply the transfer of ownership (e.g. I can send you my laptop, but I'm
 * not necessarily giving it to you).
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\TransferAction;

class SendAction extends \Vnetby\Schemaorg\Types\Thing\Action\TransferAction\TransferAction
{
    const TYPE = 'SendAction';

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint
     */
    public $recipient;

    /**
     * A sub property of instrument. The method of delivery.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod
     */
    public $deliveryMethod;

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
     * A sub property of instrument. The method of delivery.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod $value
     * @return static
     */
    function setDeliveryMethod($value)
    {
        return $this->setProp('deliveryMethod', $value);
    }

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|null
     */
    function getRecipient()
    {
        return $this->getProp('recipient');
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
