<?php

/**
 * @see https://schema.org/EventRescheduled
 * The event has been rescheduled. The event's previousStartDate should be set to the old date and the startDate should be set
 * to the event's new date. (If the event has been rescheduled multiple times, the previousStartDate property may be repeated.)
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType;

class EventRescheduled extends \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType\EventStatusType
{
    const TYPE = 'EventRescheduled';
}
