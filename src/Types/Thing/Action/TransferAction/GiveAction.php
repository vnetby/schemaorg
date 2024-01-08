<?php

/**
 * @see https://schema.org/GiveAction
 * The act of transferring ownership of an object to a destination. Reciprocal of TakeAction.\n\nRelated actions:\n\n* [[TakeAction]]: Reciprocal of GiveAction.\n* [[SendAction]]: Unlike
 * SendAction, GiveAction implies that ownership is being transferred (e.g. I may send my laptop to you, but that doesn't mean I'm
 * giving it to you).
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\TransferAction;

class GiveAction extends \Vnetby\Schemaorg\Types\Thing\Action\TransferAction\TransferAction
{
    const TYPE = 'GiveAction';

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
