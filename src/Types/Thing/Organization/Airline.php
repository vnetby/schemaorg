<?php

/**
 * @see https://schema.org/Airline
 * An organization that provides flights for passengers.
 */

namespace Vnetby\Schemaorg\Types\Thing\Organization;

class Airline extends \Vnetby\Schemaorg\Types\Thing\Organization\Organization
{
    const TYPE = 'Airline';

    /**
     * IATA identifier for an airline or airport.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $iataCode;

    /**
     * The type of boarding policy used by the airline (e.g. zone-based or group-based).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\BoardingPolicyType\BoardingPolicyType
     */
    public $boardingPolicy;

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
     * The type of boarding policy used by the airline (e.g. zone-based or group-based).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\BoardingPolicyType\BoardingPolicyType $value
     * @return static
     */
    function setBoardingPolicy($value)
    {
        return $this->setProp('boardingPolicy', $value);
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
     * The type of boarding policy used by the airline (e.g. zone-based or group-based).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\BoardingPolicyType\BoardingPolicyType|null
     */
    function getBoardingPolicy()
    {
        return $this->getProp('boardingPolicy');
    }
}
