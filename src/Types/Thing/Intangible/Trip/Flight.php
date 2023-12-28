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
     * Identifier of the flight's departure gate.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_departureGate;

    /**
     * Description of the meals that will be provided or available for purchase.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_mealService;

    /**
     * The estimated time the flight will take.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    protected $prop_estimatedFlightDuration;

    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods. A seller may also be a
     * provider.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    protected $prop_seller;

    /**
     * The airport where the flight terminates.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\Airport
     */
    protected $prop_arrivalAirport;

    /**
     * The type of boarding policy used by the airline (e.g. zone-based or group-based).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\BoardingPolicyType\BoardingPolicyType
     */
    protected $prop_boardingPolicy;

    /**
     * The airport where the flight originates.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\Airport
     */
    protected $prop_departureAirport;

    /**
     * The time when a passenger can check into the flight online.
     * @var \Vnetby\Schemaorg\DataTypes\DataDateTime
     */
    protected $prop_webCheckinTime;

    /**
     * The distance of the flight.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance
     */
    protected $prop_flightDistance;

    /**
     * Identifier of the flight's departure terminal.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_departureTerminal;

    /**
     * The unique identifier for a flight including the airline IATA code. For example, if describing United flight 110, where the IATA
     * code for United is 'UA', the flightNumber is 'UA110'.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_flightNumber;

    /**
     * Identifier of the flight's arrival terminal.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_arrivalTerminal;

    /**
     * The kind of aircraft (e.g., "Boeing 747").
     * @var \Vnetby\Schemaorg\Types\Thing\Product\Vehicle\Vehicle|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_aircraft;

    /**
     * Identifier of the flight's arrival gate.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_arrivalGate;

    /**
     * Identifier of the flight's departure gate.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setDepartureGate($value)
    {
        return $this->setProp('departureGate', $value);
    }

    /**
     * Description of the meals that will be provided or available for purchase.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setMealService($value)
    {
        return $this->setProp('mealService', $value);
    }

    /**
     * The estimated time the flight will take.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
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
     * The airport where the flight originates.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\Airport $value
     * @return static
     */
    function setDepartureAirport($value)
    {
        return $this->setProp('departureAirport', $value);
    }

    /**
     * The time when a passenger can check into the flight online.
     * @param \Vnetby\Schemaorg\DataTypes\DataDateTime $value
     * @return static
     */
    function setWebCheckinTime($value)
    {
        return $this->setProp('webCheckinTime', $value);
    }

    /**
     * The distance of the flight.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance $value
     * @return static
     */
    function setFlightDistance($value)
    {
        return $this->setProp('flightDistance', $value);
    }

    /**
     * Identifier of the flight's departure terminal.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setDepartureTerminal($value)
    {
        return $this->setProp('departureTerminal', $value);
    }

    /**
     * The unique identifier for a flight including the airline IATA code. For example, if describing United flight 110, where the IATA
     * code for United is 'UA', the flightNumber is 'UA110'.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setFlightNumber($value)
    {
        return $this->setProp('flightNumber', $value);
    }

    /**
     * Identifier of the flight's arrival terminal.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setArrivalTerminal($value)
    {
        return $this->setProp('arrivalTerminal', $value);
    }

    /**
     * The kind of aircraft (e.g., "Boeing 747").
     * @param \Vnetby\Schemaorg\Types\Thing\Product\Vehicle\Vehicle|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAircraft($value)
    {
        return $this->setProp('aircraft', $value);
    }

    /**
     * Identifier of the flight's arrival gate.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setArrivalGate($value)
    {
        return $this->setProp('arrivalGate', $value);
    }

    /**
     * Identifier of the flight's departure gate.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getDepartureGate()
    {
        return $this->getProp('departureGate');
    }

    /**
     * Description of the meals that will be provided or available for purchase.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getMealService()
    {
        return $this->getProp('mealService');
    }

    /**
     * The estimated time the flight will take.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
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
     * The airport where the flight originates.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\Airport|null
     */
    function getDepartureAirport()
    {
        return $this->getProp('departureAirport');
    }

    /**
     * The time when a passenger can check into the flight online.
     * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|null
     */
    function getWebCheckinTime()
    {
        return $this->getProp('webCheckinTime');
    }

    /**
     * The distance of the flight.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Distance|null
     */
    function getFlightDistance()
    {
        return $this->getProp('flightDistance');
    }

    /**
     * Identifier of the flight's departure terminal.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getDepartureTerminal()
    {
        return $this->getProp('departureTerminal');
    }

    /**
     * The unique identifier for a flight including the airline IATA code. For example, if describing United flight 110, where the IATA
     * code for United is 'UA', the flightNumber is 'UA110'.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getFlightNumber()
    {
        return $this->getProp('flightNumber');
    }

    /**
     * Identifier of the flight's arrival terminal.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getArrivalTerminal()
    {
        return $this->getProp('arrivalTerminal');
    }

    /**
     * The kind of aircraft (e.g., "Boeing 747").
     * @return \Vnetby\Schemaorg\Types\Thing\Product\Vehicle\Vehicle|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAircraft()
    {
        return $this->getProp('aircraft');
    }

    /**
     * Identifier of the flight's arrival gate.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getArrivalGate()
    {
        return $this->getProp('arrivalGate');
    }
}
