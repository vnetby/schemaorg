<?php

/**
 * @see https://schema.org/BoatTrip
 * A trip on a commercial ferry line.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Trip;

class BoatTrip extends \Vnetby\Schemaorg\Types\Thing\Intangible\Trip\Trip
{
    const TYPE = 'BoatTrip';

    /**
     * The terminal or port from which the boat departs.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\BoatTerminal
     */
    public $departureBoatTerminal;

    /**
     * The terminal or port from which the boat arrives.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\BoatTerminal
     */
    public $arrivalBoatTerminal;

    /**
     * The terminal or port from which the boat departs.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\BoatTerminal $value
     * @return static
     */
    function setDepartureBoatTerminal($value)
    {
        return $this->setProp('departureBoatTerminal', $value);
    }

    /**
     * The terminal or port from which the boat arrives.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\BoatTerminal $value
     * @return static
     */
    function setArrivalBoatTerminal($value)
    {
        return $this->setProp('arrivalBoatTerminal', $value);
    }

    /**
     * The terminal or port from which the boat departs.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\BoatTerminal|null
     */
    function getDepartureBoatTerminal()
    {
        return $this->getProp('departureBoatTerminal');
    }

    /**
     * The terminal or port from which the boat arrives.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\BoatTerminal|null
     */
    function getArrivalBoatTerminal()
    {
        return $this->getProp('arrivalBoatTerminal');
    }
}
