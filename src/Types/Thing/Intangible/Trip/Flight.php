<?php

/**
 * @see https://schema.org/Flight
 * An airline flight.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Trip;

class Flight extends \Vnetby\Schemaorg\Types\Thing\Intangible\Trip\Trip
{
    const TYPE = 'Flight';

    /**
     * The airport where the flight originates.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\Airport
     */
    public $departureAirport;

    /**
     * The estimated time the flight will take.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    public $estimatedFlightDuration;

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods. A seller may also be a
     * provider.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $seller;

    /**
     * Identifier of the flight's departure gate.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $departureGate;

    /**
     * The distance of the flight.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance
     */
    public $flightDistance;

    /**
     * Description of the meals that will be provided or available for purchase.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $mealService;

    /**
     * Identifier of the flight's arrival gate.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $arrivalGate;

    /**
     * Identifier of the flight's departure terminal.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $departureTerminal;

    /**
     * The airport where the flight terminates.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\Airport
     */
    public $arrivalAirport;

    /**
     * The type of boarding policy used by the airline (e.g. zone-based or group-based).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\BoardingPolicyType\BoardingPolicyType
     */
    public $boardingPolicy;

    /**
     * The kind of aircraft (e.g., "Boeing 747").
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Product\Vehicle\Vehicle
     */
    public $aircraft;

    /**
     * Identifier of the flight's arrival terminal.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $arrivalTerminal;

    /**
     * The unique identifier for a flight including the airline IATA code. For example, if describing United flight 110, where the IATA
     * code for United is 'UA', the flightNumber is 'UA110'.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $flightNumber;

    /**
     * The time when a passenger can check into the flight online.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    public $webCheckinTime;

    /**
     * The airport where the flight originates.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\Airport $value
     * @return static
     */
    function setDepartureAirport($value)
    {
        return $this->setProp('departureAirport', $value);
    }

    /**
     * The estimated time the flight will take.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
     * @return static
     */
    function setEstimatedFlightDuration($value)
    {
        return $this->setProp('estimatedFlightDuration', $value);
    }

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods. A seller may also be a
     * provider.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setSeller($value)
    {
        return $this->setProp('seller', $value);
    }

    /**
     * Identifier of the flight's departure gate.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setDepartureGate($value)
    {
        return $this->setProp('departureGate', $value);
    }

    /**
     * The distance of the flight.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance $value
     * @return static
     */
    function setFlightDistance($value)
    {
        return $this->setProp('flightDistance', $value);
    }

    /**
     * Description of the meals that will be provided or available for purchase.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setMealService($value)
    {
        return $this->setProp('mealService', $value);
    }

    /**
     * Identifier of the flight's arrival gate.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setArrivalGate($value)
    {
        return $this->setProp('arrivalGate', $value);
    }

    /**
     * Identifier of the flight's departure terminal.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setDepartureTerminal($value)
    {
        return $this->setProp('departureTerminal', $value);
    }

    /**
     * The airport where the flight terminates.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\Airport $value
     * @return static
     */
    function setArrivalAirport($value)
    {
        return $this->setProp('arrivalAirport', $value);
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
     * The kind of aircraft (e.g., "Boeing 747").
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Product\Vehicle\Vehicle $value
     * @return static
     */
    function setAircraft($value)
    {
        return $this->setProp('aircraft', $value);
    }

    /**
     * Identifier of the flight's arrival terminal.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setArrivalTerminal($value)
    {
        return $this->setProp('arrivalTerminal', $value);
    }

    /**
     * The unique identifier for a flight including the airline IATA code. For example, if describing United flight 110, where the IATA
     * code for United is 'UA', the flightNumber is 'UA110'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setFlightNumber($value)
    {
        return $this->setProp('flightNumber', $value);
    }

    /**
     * The time when a passenger can check into the flight online.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setWebCheckinTime($value)
    {
        return $this->setProp('webCheckinTime', $value);
    }

    /**
     * The airport where the flight originates.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\Airport|null
     */
    function getDepartureAirport()
    {
        return $this->getProp('departureAirport');
    }

    /**
     * The estimated time the flight will take.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
     */
    function getEstimatedFlightDuration()
    {
        return $this->getProp('estimatedFlightDuration');
    }

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods. A seller may also be a
     * provider.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getSeller()
    {
        return $this->getProp('seller');
    }

    /**
     * Identifier of the flight's departure gate.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getDepartureGate()
    {
        return $this->getProp('departureGate');
    }

    /**
     * The distance of the flight.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|null
     */
    function getFlightDistance()
    {
        return $this->getProp('flightDistance');
    }

    /**
     * Description of the meals that will be provided or available for purchase.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getMealService()
    {
        return $this->getProp('mealService');
    }

    /**
     * Identifier of the flight's arrival gate.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getArrivalGate()
    {
        return $this->getProp('arrivalGate');
    }

    /**
     * Identifier of the flight's departure terminal.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getDepartureTerminal()
    {
        return $this->getProp('departureTerminal');
    }

    /**
     * The airport where the flight terminates.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\Airport|null
     */
    function getArrivalAirport()
    {
        return $this->getProp('arrivalAirport');
    }

    /**
     * The type of boarding policy used by the airline (e.g. zone-based or group-based).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\BoardingPolicyType\BoardingPolicyType|null
     */
    function getBoardingPolicy()
    {
        return $this->getProp('boardingPolicy');
    }

    /**
     * The kind of aircraft (e.g., "Boeing 747").
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Product\Vehicle\Vehicle|null
     */
    function getAircraft()
    {
        return $this->getProp('aircraft');
    }

    /**
     * Identifier of the flight's arrival terminal.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getArrivalTerminal()
    {
        return $this->getProp('arrivalTerminal');
    }

    /**
     * The unique identifier for a flight including the airline IATA code. For example, if describing United flight 110, where the IATA
     * code for United is 'UA', the flightNumber is 'UA110'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getFlightNumber()
    {
        return $this->getProp('flightNumber');
    }

    /**
     * The time when a passenger can check into the flight online.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getWebCheckinTime()
    {
        return $this->getProp('webCheckinTime');
    }
}
