<?php

/**
 * @see https://schema.org/FoodEstablishmentReservation
 * A reservation to dine at a food-related business.\n\nNote: This type is for information about actual reservations, e.g. in confirmation emails or
 * HTML pages with individual confirmations of reservations.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Reservation;

class FoodEstablishmentReservation extends \Vnetby\Schemaorg\Types\Thing\Intangible\Reservation\Reservation
{
    const TYPE = 'FoodEstablishmentReservation';

    /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December.
     * For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime
     */
    public $startTime;

    /**
     * Number of people the reservation should accommodate.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $partySize;

    /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*.
     * For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime
     */
    public $endTime;

    /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December.
     * For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime $value
     * @return static
     */
    function setStartTime($value)
    {
        return $this->setProp('startTime', $value);
    }

    /**
     * Number of people the reservation should accommodate.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setPartySize($value)
    {
        return $this->setProp('partySize', $value);
    }

    /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*.
     * For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime $value
     * @return static
     */
    function setEndTime($value)
    {
        return $this->setProp('endTime', $value);
    }

    /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December.
     * For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime|null
     */
    function getStartTime()
    {
        return $this->getProp('startTime');
    }

    /**
     * Number of people the reservation should accommodate.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getPartySize()
    {
        return $this->getProp('partySize');
    }

    /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*.
     * For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that
     * Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime|null
     */
    function getEndTime()
    {
        return $this->getProp('endTime');
    }
}
