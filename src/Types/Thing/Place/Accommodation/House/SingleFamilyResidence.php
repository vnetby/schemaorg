<?php

/**
 * @see https://schema.org/SingleFamilyResidence
 * Residence type: Single-family home.
 */

namespace Vnetby\Schemaorg\Types\Thing\Place\Accommodation\House;

class SingleFamilyResidence extends \Vnetby\Schemaorg\Types\Thing\Place\Accommodation\House\House
{
    const TYPE = 'SingleFamilyResidence';

    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business. Typical unit code(s): ROM for room or
     * C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $numberOfRooms;

    /**
     * The allowed total occupancy for the accommodation in persons (including infants etc). For individual accommodations, this is not necessarily the legal
     * maximum but defines the permitted usage as per the contractual agreement (e.g. a double room used by a single person). Typical
     * unit code(s): C62 for person.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    public $occupancy;

    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business. Typical unit code(s): ROM for room or
     * C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setNumberOfRooms($value)
    {
        return $this->setProp('numberOfRooms', $value);
    }

    /**
     * The allowed total occupancy for the accommodation in persons (including infants etc). For individual accommodations, this is not necessarily the legal
     * maximum but defines the permitted usage as per the contractual agreement (e.g. a double room used by a single person). Typical
     * unit code(s): C62 for person.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
     * @return static
     */
    function setOccupancy($value)
    {
        return $this->setProp('occupancy', $value);
    }

    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business. Typical unit code(s): ROM for room or
     * C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getNumberOfRooms()
    {
        return $this->getProp('numberOfRooms');
    }

    /**
     * The allowed total occupancy for the accommodation in persons (including infants etc). For individual accommodations, this is not necessarily the legal
     * maximum but defines the permitted usage as per the contractual agreement (e.g. a double room used by a single person). Typical
     * unit code(s): C62 for person.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
     */
    function getOccupancy()
    {
        return $this->getProp('occupancy');
    }
}
