<?php

/**
 * @see https://schema.org/TrainTrip
 * A trip on a commercial train line.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Trip;

class TrainTrip extends \Vnetby\Schemaorg\Types\Thing\Intangible\Trip\Trip
{
    const TYPE = 'TrainTrip';

    /**
     * The station where the train trip ends.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\TrainStation
     */
    public $arrivalStation;

    /**
     * The platform from which the train departs.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $departurePlatform;

    /**
     * The name of the train (e.g. The Orient Express).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $trainName;

    /**
     * The platform where the train arrives.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $arrivalPlatform;

    /**
     * The unique identifier for the train.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $trainNumber;

    /**
     * The station from which the train departs.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\TrainStation
     */
    public $departureStation;

    /**
     * The station where the train trip ends.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\TrainStation $value
     * @return static
     */
    function setArrivalStation($value)
    {
        return $this->setProp('arrivalStation', $value);
    }

    /**
     * The platform from which the train departs.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setDeparturePlatform($value)
    {
        return $this->setProp('departurePlatform', $value);
    }

    /**
     * The name of the train (e.g. The Orient Express).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTrainName($value)
    {
        return $this->setProp('trainName', $value);
    }

    /**
     * The platform where the train arrives.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setArrivalPlatform($value)
    {
        return $this->setProp('arrivalPlatform', $value);
    }

    /**
     * The unique identifier for the train.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTrainNumber($value)
    {
        return $this->setProp('trainNumber', $value);
    }

    /**
     * The station from which the train departs.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\TrainStation $value
     * @return static
     */
    function setDepartureStation($value)
    {
        return $this->setProp('departureStation', $value);
    }

    /**
     * The station where the train trip ends.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\TrainStation|null
     */
    function getArrivalStation()
    {
        return $this->getProp('arrivalStation');
    }

    /**
     * The platform from which the train departs.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getDeparturePlatform()
    {
        return $this->getProp('departurePlatform');
    }

    /**
     * The name of the train (e.g. The Orient Express).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTrainName()
    {
        return $this->getProp('trainName');
    }

    /**
     * The platform where the train arrives.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getArrivalPlatform()
    {
        return $this->getProp('arrivalPlatform');
    }

    /**
     * The unique identifier for the train.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTrainNumber()
    {
        return $this->getProp('trainNumber');
    }

    /**
     * The station from which the train departs.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\TrainStation|null
     */
    function getDepartureStation()
    {
        return $this->getProp('departureStation');
    }
}
