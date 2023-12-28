<?php

/**
 * @see https://schema.org/SubscribeAction
 * The act of forming a personal connection with someone/something (object) unidirectionally/asymmetrically to get updates pushed to.\n\nRelated actions:\n\n* [[FollowAction]]: Unlike FollowAction, SubscribeAction
 * implies that the subscriber acts as a passive agent being constantly/actively pushed for updates.\n* [[RegisterAction]]: Unlike RegisterAction, SubscribeAction implies that the
 * agent is interested in continuing receiving updates from the object.\n* [[JoinAction]]: Unlike JoinAction, SubscribeAction implies that the agent is interested in
 * continuing receiving updates from the object.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\InteractAction;

class SubscribeAction extends \Vnetby\Schemaorg\Types\Thing\Action\InteractAction\InteractAction
{
    const TYPE = 'SubscribeAction';
}
