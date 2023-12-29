<?php

/**
 * @see https://schema.org/BorrowAction
 * The act of obtaining an object under an agreement to return it at a later date. Reciprocal of LendAction.\n\nRelated actions:\n\n* [[LendAction]]:
 * Reciprocal of BorrowAction.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\TransferAction;

class BorrowAction extends \Vnetby\Schemaorg\Types\Thing\Action\TransferAction\TransferAction
{
    const TYPE = 'BorrowAction';

    /**
     * A sub property of participant. The person that lends the object being borrowed.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $lender;

    /**
     * A sub property of participant. The person that lends the object being borrowed.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setLender($value)
    {
        return $this->setProp('lender', $value);
    }

    /**
     * A sub property of participant. The person that lends the object being borrowed.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getLender()
    {
        return $this->getProp('lender');
    }
}
