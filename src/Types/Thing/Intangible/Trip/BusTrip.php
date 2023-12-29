<?php

/**
 * @see https://schema.org/BusTrip
 * A trip on a commercial bus line.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Trip;

class BusTrip extends \Vnetby\Schemaorg\Types\Thing\Intangible\Trip\Trip
{
    const TYPE = 'BusTrip';

    /**
     * The stop or station from which the bus arrives.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\BusStation|\Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\BusStop
     */
    public $arrivalBusStop;

    /**
     * The unique identifier for the bus.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $busNumber;

    /**
     * The stop or station from which the bus departs.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\BusStop|\Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\BusStation
     */
    public $departureBusStop;

    /**
     * The name of the bus (e.g. Bolt Express).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $busName;

    /**
     * The stop or station from which the bus arrives.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\BusStation|\Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\BusStop $value
     * @return static
     */
    function setArrivalBusStop($value)
    {
        return $this->setProp('arrivalBusStop', $value);
    }

    /**
     * The unique identifier for the bus.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setBusNumber($value)
    {
        return $this->setProp('busNumber', $value);
    }

    /**
     * The stop or station from which the bus departs.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\BusStop|\Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\BusStation $value
     * @return static
     */
    function setDepartureBusStop($value)
    {
        return $this->setProp('departureBusStop', $value);
    }

    /**
     * The name of the bus (e.g. Bolt Express).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setBusName($value)
    {
        return $this->setProp('busName', $value);
    }

    /**
     * The stop or station from which the bus arrives.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\BusStation|\Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\BusStop|null
     */
    function getArrivalBusStop()
    {
        return $this->getProp('arrivalBusStop');
    }

    /**
     * The unique identifier for the bus.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getBusNumber()
    {
        return $this->getProp('busNumber');
    }

    /**
     * The stop or station from which the bus departs.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\BusStop|\Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\BusStation|null
     */
    function getDepartureBusStop()
    {
        return $this->getProp('departureBusStop');
    }

    /**
     * The name of the bus (e.g. Bolt Express).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getBusName()
    {
        return $this->getProp('busName');
    }
}
