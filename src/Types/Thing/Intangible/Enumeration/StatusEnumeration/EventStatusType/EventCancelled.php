<?php

/**
* @see https://schema.org/EventCancelled
 * The event has been cancelled. If the event has multiple startDate values, all are assumed to be cancelled. Either startDate or
 * previousStartDate may be used to specify the event's cancelled date(s).
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType;

class EventCancelled extends \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType\EventStatusType
{
   const TYPE = 'EventCancelled';
}
