<?php

/**
 * @see https://schema.org/ReceiveAction
 * The act of physically/electronically taking delivery of an object that has been transferred from an origin to a destination. Reciprocal of
 * SendAction.\n\nRelated actions:\n\n* [[SendAction]]: The reciprocal of ReceiveAction.\n* [[TakeAction]]: Unlike TakeAction, ReceiveAction does not imply that the ownership has been transferred (e.g.
 * I can receive a package, but it does not mean the package is now mine).
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\TransferAction;

class ReceiveAction extends \Vnetby\Schemaorg\Types\Thing\Action\TransferAction\TransferAction
{
    const TYPE = 'ReceiveAction';

    /**
     * A sub property of participant. The participant who is at the sending end of the action.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience
     */
    public $sender;

    /**
     * A sub property of instrument. The method of delivery.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DeliveryMethod\DeliveryMethod
     */
    public $deliveryMethod;

    /**
     * A sub property of participant. The participant who is at the sending end of the action.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience $value
     * @return static
     */
    function setSender($value)
    {
        return $this->setProp('sender', $value);
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
     * A sub property of participant. The participant who is at the sending end of the action.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Intangible\Audience\Audience|null
     */
    function getSender()
    {
        return $this->getProp('sender');
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
