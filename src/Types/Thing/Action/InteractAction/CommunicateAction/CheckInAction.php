<?php

/**
* @see https://schema.org/CheckInAction
 * The act of an agent communicating (service provider, social media, etc) their arrival by registering/confirming for a previously reserved service (e.g.
 * flight check-in) or at a place (e.g. hotel), possibly resulting in a result (boarding pass, etc).\n\nRelated actions:\n\n* [[CheckOutAction]]: The antonym of
 * CheckInAction.\n* [[ArriveAction]]: Unlike ArriveAction, CheckInAction implies that the agent is informing/confirming the start of a previously reserved service.\n* [[ConfirmAction]]: Unlike ConfirmAction,
 * CheckInAction implies that the agent is informing/confirming the *start* of a previously reserved service rather than its validity/existence.
*/

namespace Vnetby\Schemaorg\Types\Thing\Action\InteractAction\CommunicateAction;

class CheckInAction extends \Vnetby\Schemaorg\Types\Thing\Action\InteractAction\CommunicateAction\CommunicateAction
{
   const TYPE = 'CheckInAction';
}
