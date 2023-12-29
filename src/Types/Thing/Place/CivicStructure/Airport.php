<?php

/**
 * @see https://schema.org/Airport
 * An airport.
 */

namespace Vnetby\Schemaorg\Types\Thing\Place\CivicStructure;

class Airport extends \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\CivicStructure
{
    const TYPE = 'Airport';

    /**
     * IATA identifier for an airline or airport.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $iataCode;

    /**
     * ICAO identifier for an airport.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $icaoCode;

    /**
     * IATA identifier for an airline or airport.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setIataCode($value)
    {
        return $this->setProp('iataCode', $value);
    }

    /**
     * ICAO identifier for an airport.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setIcaoCode($value)
    {
        return $this->setProp('icaoCode', $value);
    }

    /**
     * IATA identifier for an airline or airport.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getIataCode()
    {
        return $this->getProp('iataCode');
    }

    /**
     * ICAO identifier for an airport.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getIcaoCode()
    {
        return $this->getProp('icaoCode');
    }
}
