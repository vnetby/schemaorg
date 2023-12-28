<?php

/**
 * @see https://schema.org/ReservationPackage
 * A group of multiple reservations with common values for all sub-reservations.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Reservation;

class ReservationPackage extends \Vnetby\Schemaorg\Types\Thing\Intangible\Reservation\Reservation
{
    const TYPE = 'ReservationPackage';

    /**
     * The individual reservations included in the package. Typically a repeated property.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Reservation\Reservation
     */
    protected $prop_subReservation;

    /**
     * The individual reservations included in the package. Typically a repeated property.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Reservation\Reservation $value
     * @return static
     */
    function setSubReservation($value)
    {
        return $this->setProp('subReservation', $value);
    }

    /**
     * The individual reservations included in the package. Typically a repeated property.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Reservation\Reservation|null
     */
    function getSubReservation()
    {
        return $this->getProp('subReservation');
    }
}
