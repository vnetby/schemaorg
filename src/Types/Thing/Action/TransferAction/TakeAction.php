<?php

/**
 * @see https://schema.org/TakeAction
 * The act of gaining ownership of an object from an origin. Reciprocal of GiveAction.\n\nRelated actions:\n\n* [[GiveAction]]: The reciprocal of TakeAction.\n* [[ReceiveAction]]:
 * Unlike ReceiveAction, TakeAction implies that ownership has been transferred.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\TransferAction;

class TakeAction extends \Vnetby\Schemaorg\Types\Thing\Action\TransferAction\TransferAction
{
    const TYPE = 'TakeAction';
}
