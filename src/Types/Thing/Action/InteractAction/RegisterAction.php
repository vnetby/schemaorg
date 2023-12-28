<?php

/**
* @see https://schema.org/RegisterAction
 * The act of registering to be a user of a service, product or web page.\n\nRelated actions:\n\n* [[JoinAction]]: Unlike JoinAction, RegisterAction implies
 * you are registering to be a user of a service, *not* a group/team of people.\n* [[FollowAction]]: Unlike FollowAction, RegisterAction doesn't imply
 * that the agent is expecting to poll for updates from the object.\n* [[SubscribeAction]]: Unlike SubscribeAction, RegisterAction doesn't imply that the agent
 * is expecting updates from the object.
*/

namespace Vnetby\Schemaorg\Types\Thing\Action\InteractAction;

class RegisterAction extends \Vnetby\Schemaorg\Types\Thing\Action\InteractAction\InteractAction
{
   const TYPE = 'RegisterAction';
}
