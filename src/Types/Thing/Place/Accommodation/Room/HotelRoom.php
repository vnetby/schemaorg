<?php

/**
 * @see https://schema.org/HotelRoom
 * A hotel room is a single room in a hotel. <br /><br /> See also the <a href="/docs/hotels.html">dedicated document on the
 * use of schema.org for marking up hotels and other forms of accommodations</a>. 
 */

namespace Vnetby\Schemaorg\Types\Thing\Place\Accommodation\Room;

class HotelRoom extends \Vnetby\Schemaorg\Types\Thing\Place\Accommodation\Room\Room
{
    const TYPE = 'HotelRoom';

    /**
     * The type of bed or beds included in the accommodation. For the single case of just one bed of a certain
     * type, you use bed directly with a text. If you want to indicate the quantity of a certain kind of bed,
     * use an instance of BedDetails. For more detailed information, use the amenityFeature property.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\BedType|\Vnetby\Schemaorg\Types\Thing\Intangible\BedDetails
     */
    protected $prop_bed;

    /**
     * The allowed total occupancy for the accommodation in persons (including infants etc). For individual accommodations, this is not necessarily the legal
     * maximum but defines the permitted usage as per the contractual agreement (e.g. a double room used by a single person). Typical
     * unit code(s): C62 for person.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
     */
    protected $prop_occupancy;

    /**
     * The type of bed or beds included in the accommodation. For the single case of just one bed of a certain
     * type, you use bed directly with a text. If you want to indicate the quantity of a certain kind of bed,
     * use an instance of BedDetails. For more detailed information, use the amenityFeature property.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\BedType|\Vnetby\Schemaorg\Types\Thing\Intangible\BedDetails $value
     * @return static
     */
    function setBed($value)
    {
        return $this->setProp('bed', $value);
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
     * The type of bed or beds included in the accommodation. For the single case of just one bed of a certain
     * type, you use bed directly with a text. If you want to indicate the quantity of a certain kind of bed,
     * use an instance of BedDetails. For more detailed information, use the amenityFeature property.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\BedType|\Vnetby\Schemaorg\Types\Thing\Intangible\BedDetails|null
     */
    function getBed()
    {
        return $this->getProp('bed');
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
