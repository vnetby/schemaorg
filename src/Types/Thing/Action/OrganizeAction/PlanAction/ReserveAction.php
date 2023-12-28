<?php

/**
* @see https://schema.org/ReserveAction
 * Reserving a concrete object.\n\nRelated actions:\n\n* [[ScheduleAction]]: Unlike ScheduleAction, ReserveAction reserves concrete objects (e.g. a table, a hotel) towards a time slot
 * / spatial allocation.
*/

namespace Vnetby\Schemaorg\Types\Thing\Action\OrganizeAction\PlanAction;

class ReserveAction extends \Vnetby\Schemaorg\Types\Thing\Action\OrganizeAction\PlanAction\PlanAction
{
   const TYPE = 'ReserveAction';
}
