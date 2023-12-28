<?php

/**
 * @see https://schema.org/TaxiReservation
 * A reservation for a taxi.\n\nNote: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with
 * individual confirmations of reservations. For offers of tickets, use [[Offer]].
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Reservation;

class TaxiReservation extends \Vnetby\Schemaorg\Types\Thing\Intangible\Reservation\Reservation
{
    const TYPE = 'TaxiReservation';

    /**
     * Number of people the reservation should accommodate.
     * @var \Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    protected $prop_partySize;

    /**
     * Where a taxi will pick up a passenger or a rental car can be picked up.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    protected $prop_pickupLocation;

    /**
     * When a taxi will pick up a passenger or a rental car can be picked up.
     * @var \Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    protected $prop_pickupTime;

    /**
     * Number of people the reservation should accommodate.
     * @param \Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setPartySize($value)
    {
        return $this->setProp('partySize', $value);
    }

    /**
     * Where a taxi will pick up a passenger or a rental car can be picked up.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
     * @return static
     */
    function setPickupLocation($value)
    {
        return $this->setProp('pickupLocation', $value);
    }

    /**
     * When a taxi will pick up a passenger or a rental car can be picked up.
     * @param \Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setPickupTime($value)
    {
        return $this->setProp('pickupTime', $value);
    }

    /**
     * Number of people the reservation should accommodate.
     * @return \Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getPartySize()
    {
        return $this->getProp('partySize');
    }

    /**
     * Where a taxi will pick up a passenger or a rental car can be picked up.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
     */
    function getPickupLocation()
    {
        return $this->getProp('pickupLocation');
    }

    /**
     * When a taxi will pick up a passenger or a rental car can be picked up.
     * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getPickupTime()
    {
        return $this->getProp('pickupTime');
    }
}
