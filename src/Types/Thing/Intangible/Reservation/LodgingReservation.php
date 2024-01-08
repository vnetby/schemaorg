<?php

/**
 * @see https://schema.org/LodgingReservation
 * A reservation for lodging at a hotel, motel, inn, etc.\n\nNote: This type is for information about actual reservations, e.g. in confirmation
 * emails or HTML pages with individual confirmations of reservations.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Reservation;

class LodgingReservation extends \Vnetby\Schemaorg\Types\Thing\Intangible\Reservation\Reservation
{
    const TYPE = 'LodgingReservation';

    /**
     * Textual description of the unit type (including suite vs. room, size of bed, etc.).
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $lodgingUnitType;

    /**
     * The latest someone may check out of a lodging establishment.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime
     */
    public $checkoutTime;

    /**
     * The number of adults staying in the unit.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $numAdults;

    /**
     * A full description of the lodging unit.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $lodgingUnitDescription;

    /**
     * The number of children staying in the unit.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $numChildren;

    /**
     * The earliest someone may check into a lodging establishment.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime
     */
    public $checkinTime;

    /**
     * Textual description of the unit type (including suite vs. room, size of bed, etc.).
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setLodgingUnitType($value)
    {
        return $this->setProp('lodgingUnitType', $value);
    }

    /**
     * The latest someone may check out of a lodging establishment.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime $value
     * @return static
     */
    function setCheckoutTime($value)
    {
        return $this->setProp('checkoutTime', $value);
    }

    /**
     * The number of adults staying in the unit.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setNumAdults($value)
    {
        return $this->setProp('numAdults', $value);
    }

    /**
     * A full description of the lodging unit.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setLodgingUnitDescription($value)
    {
        return $this->setProp('lodgingUnitDescription', $value);
    }

    /**
     * The number of children staying in the unit.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setNumChildren($value)
    {
        return $this->setProp('numChildren', $value);
    }

    /**
     * The earliest someone may check into a lodging establishment.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime $value
     * @return static
     */
    function setCheckinTime($value)
    {
        return $this->setProp('checkinTime', $value);
    }

    /**
     * Textual description of the unit type (including suite vs. room, size of bed, etc.).
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getLodgingUnitType()
    {
        return $this->getProp('lodgingUnitType');
    }

    /**
     * The latest someone may check out of a lodging establishment.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime|null
     */
    function getCheckoutTime()
    {
        return $this->getProp('checkoutTime');
    }

    /**
     * The number of adults staying in the unit.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getNumAdults()
    {
        return $this->getProp('numAdults');
    }

    /**
     * A full description of the lodging unit.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getLodgingUnitDescription()
    {
        return $this->getProp('lodgingUnitDescription');
    }

    /**
     * The number of children staying in the unit.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getNumChildren()
    {
        return $this->getProp('numChildren');
    }

    /**
     * The earliest someone may check into a lodging establishment.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataTime|null
     */
    function getCheckinTime()
    {
        return $this->getProp('checkinTime');
    }
}
