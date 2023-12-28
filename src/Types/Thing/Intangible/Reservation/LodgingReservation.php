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
     * The earliest someone may check into a lodging establishment.
     * @var \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    protected $prop_checkinTime;

    /**
     * The latest someone may check out of a lodging establishment.
     * @var \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    protected $prop_checkoutTime;

    /**
     * The number of children staying in the unit.
     * @var \Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    protected $prop_numChildren;

    /**
     * The number of adults staying in the unit.
     * @var \Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    protected $prop_numAdults;

    /**
     * A full description of the lodging unit.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_lodgingUnitDescription;

    /**
     * Textual description of the unit type (including suite vs. room, size of bed, etc.).
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue
     */
    protected $prop_lodgingUnitType;

    /**
     * The earliest someone may check into a lodging establishment.
     * @param \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setCheckinTime($value)
    {
        return $this->setProp('checkinTime', $value);
    }

    /**
     * The latest someone may check out of a lodging establishment.
     * @param \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setCheckoutTime($value)
    {
        return $this->setProp('checkoutTime', $value);
    }

    /**
     * The number of children staying in the unit.
     * @param \Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setNumChildren($value)
    {
        return $this->setProp('numChildren', $value);
    }

    /**
     * The number of adults staying in the unit.
     * @param \Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setNumAdults($value)
    {
        return $this->setProp('numAdults', $value);
    }

    /**
     * A full description of the lodging unit.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setLodgingUnitDescription($value)
    {
        return $this->setProp('lodgingUnitDescription', $value);
    }

    /**
     * Textual description of the unit type (including suite vs. room, size of bed, etc.).
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue $value
     * @return static
     */
    function setLodgingUnitType($value)
    {
        return $this->setProp('lodgingUnitType', $value);
    }

    /**
     * The earliest someone may check into a lodging establishment.
     * @return \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getCheckinTime()
    {
        return $this->getProp('checkinTime');
    }

    /**
     * The latest someone may check out of a lodging establishment.
     * @return \Vnetby\Schemaorg\DataTypes\DataTime|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getCheckoutTime()
    {
        return $this->getProp('checkoutTime');
    }

    /**
     * The number of children staying in the unit.
     * @return \Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getNumChildren()
    {
        return $this->getProp('numChildren');
    }

    /**
     * The number of adults staying in the unit.
     * @return \Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getNumAdults()
    {
        return $this->getProp('numAdults');
    }

    /**
     * A full description of the lodging unit.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getLodgingUnitDescription()
    {
        return $this->getProp('lodgingUnitDescription');
    }

    /**
     * Textual description of the unit type (including suite vs. room, size of bed, etc.).
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|null
     */
    function getLodgingUnitType()
    {
        return $this->getProp('lodgingUnitType');
    }
}
