<?php

/**
 * @see https://schema.org/Seat
 * Used to describe a seat, such as a reserved seat in an event reservation.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class Seat extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'Seat';

    /**
     * The type/class of the seat.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $seatingType;

    /**
     * The location of the reserved seat (e.g., 27).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $seatNumber;

    /**
     * The section location of the reserved seat (e.g. Orchestra).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $seatSection;

    /**
     * The row location of the reserved seat (e.g., B).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $seatRow;

    /**
     * The type/class of the seat.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSeatingType($value)
    {
        return $this->setProp('seatingType', $value);
    }

    /**
     * The location of the reserved seat (e.g., 27).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSeatNumber($value)
    {
        return $this->setProp('seatNumber', $value);
    }

    /**
     * The section location of the reserved seat (e.g. Orchestra).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSeatSection($value)
    {
        return $this->setProp('seatSection', $value);
    }

    /**
     * The row location of the reserved seat (e.g., B).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSeatRow($value)
    {
        return $this->setProp('seatRow', $value);
    }

    /**
     * The type/class of the seat.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSeatingType()
    {
        return $this->getProp('seatingType');
    }

    /**
     * The location of the reserved seat (e.g., 27).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSeatNumber()
    {
        return $this->getProp('seatNumber');
    }

    /**
     * The section location of the reserved seat (e.g. Orchestra).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSeatSection()
    {
        return $this->getProp('seatSection');
    }

    /**
     * The row location of the reserved seat (e.g., B).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSeatRow()
    {
        return $this->getProp('seatRow');
    }
}
