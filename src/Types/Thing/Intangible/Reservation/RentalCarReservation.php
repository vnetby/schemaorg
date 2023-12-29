<?php

/**
 * @see https://schema.org/RentalCarReservation
 * A reservation for a rental car.\n\nNote: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages
 * with individual confirmations of reservations.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Reservation;

class RentalCarReservation extends \Vnetby\Schemaorg\Types\Thing\Intangible\Reservation\Reservation
{
    const TYPE = 'RentalCarReservation';

    /**
     * When a rental car can be dropped off.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $dropoffTime;

    /**
     * Where a rental car can be dropped off.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    public $dropoffLocation;

    /**
     * Where a taxi will pick up a passenger or a rental car can be picked up.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
     */
    public $pickupLocation;

    /**
     * When a taxi will pick up a passenger or a rental car can be picked up.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $pickupTime;

    /**
     * When a rental car can be dropped off.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setDropoffTime($value)
    {
        return $this->setProp('dropoffTime', $value);
    }

    /**
     * Where a rental car can be dropped off.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
     * @return static
     */
    function setDropoffLocation($value)
    {
        return $this->setProp('dropoffLocation', $value);
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
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setPickupTime($value)
    {
        return $this->setProp('pickupTime', $value);
    }

    /**
     * When a rental car can be dropped off.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getDropoffTime()
    {
        return $this->getProp('dropoffTime');
    }

    /**
     * Where a rental car can be dropped off.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
     */
    function getDropoffLocation()
    {
        return $this->getProp('dropoffLocation');
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
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getPickupTime()
    {
        return $this->getProp('pickupTime');
    }
}
