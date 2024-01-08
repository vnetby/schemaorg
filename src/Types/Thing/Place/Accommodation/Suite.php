<?php

/**
 * @see https://schema.org/Suite
 * A suite in a hotel or other public accommodation, denotes a class of luxury accommodations, the key feature of which is
 * multiple rooms (source: Wikipedia, the free encyclopedia, see <a href="http://en.wikipedia.org/wiki/Suite_(hotel)">http://en.wikipedia.org/wiki/Suite_(hotel)</a>). <br /><br /> See also the <a href="/docs/hotels.html">dedicated document on the
 * use of schema.org for marking up hotels and other forms of accommodations</a>. 
 */

namespace Vnetby\Schemaorg\Types\Thing\Place\Accommodation;

class Suite extends \Vnetby\Schemaorg\Types\Thing\Place\Accommodation\Accommodation
{
    const TYPE = 'Suite';

    /**
     * The type of bed or beds included in the accommodation. For the single case of just one bed of a certain
     * type, you use bed directly with a text. If you want to indicate the quantity of a certain kind of bed,
     * use an instance of BedDetails. For more detailed information, use the amenityFeature property.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\BedType|\Vnetby\Schemaorg\Types\Thing\Intangible\BedDetails
     */
    public $bed;

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
     * The type of bed or beds included in the accommodation. For the single case of just one bed of a certain
     * type, you use bed directly with a text. If you want to indicate the quantity of a certain kind of bed,
     * use an instance of BedDetails. For more detailed information, use the amenityFeature property.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\BedType|\Vnetby\Schemaorg\Types\Thing\Intangible\BedDetails $value
     * @return static
     */
    function setBed($value)
    {
        return $this->setProp('bed', $value);
    }

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
     * The type of bed or beds included in the accommodation. For the single case of just one bed of a certain
     * type, you use bed directly with a text. If you want to indicate the quantity of a certain kind of bed,
     * use an instance of BedDetails. For more detailed information, use the amenityFeature property.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\BedType|\Vnetby\Schemaorg\Types\Thing\Intangible\BedDetails|null
     */
    function getBed()
    {
        return $this->getProp('bed');
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
