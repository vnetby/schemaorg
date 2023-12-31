<?php

/**
 * @see https://schema.org/EventReservation
 * A reservation for an event like a concert, sporting event, or lecture.\n\nNote: This type is for information about actual reservations, e.g.
 * in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, use [[Offer]].
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Reservation;

class EventReservation extends \Vnetby\Schemaorg\Types\Thing\Intangible\Reservation\Reservation
{
    const TYPE = 'EventReservation';
}
