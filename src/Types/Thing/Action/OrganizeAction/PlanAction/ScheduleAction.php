<?php

/**
 * @see https://schema.org/ScheduleAction
 * Scheduling future actions, events, or tasks.\n\nRelated actions:\n\n* [[ReserveAction]]: Unlike ReserveAction, ScheduleAction allocates future actions (e.g. an event, a task, etc) towards
 * a time slot / spatial allocation.
 */

namespace Vnetby\Schemaorg\Types\Thing\Action\OrganizeAction\PlanAction;

class ScheduleAction extends \Vnetby\Schemaorg\Types\Thing\Action\OrganizeAction\PlanAction\PlanAction
{
    const TYPE = 'ScheduleAction';
}
