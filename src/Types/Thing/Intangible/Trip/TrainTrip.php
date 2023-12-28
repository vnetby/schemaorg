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
     * The platform from which the train departs.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_departurePlatform;

   /**
     * The unique identifier for the train.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_trainNumber;

   /**
     * The name of the train (e.g. The Orient Express).
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_trainName;

   /**
     * The station where the train trip ends.
    * @var \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\TrainStation
    */
   protected $prop_arrivalStation;

   /**
     * The platform where the train arrives.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_arrivalPlatform;

   /**
     * The station from which the train departs.
    * @var \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\TrainStation
    */
   protected $prop_departureStation;

   /**
     * The platform from which the train departs.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setDeparturePlatform($value)
   {
       return $this->setProp('departurePlatform', $value);
   }

   /**
     * The unique identifier for the train.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setTrainNumber($value)
   {
       return $this->setProp('trainNumber', $value);
   }

   /**
     * The name of the train (e.g. The Orient Express).
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setTrainName($value)
   {
       return $this->setProp('trainName', $value);
   }

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
     * The platform where the train arrives.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setArrivalPlatform($value)
   {
       return $this->setProp('arrivalPlatform', $value);
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
     * The platform from which the train departs.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getDeparturePlatform()
   {
       return $this->getProp('departurePlatform');
   }

   /**
     * The unique identifier for the train.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getTrainNumber()
   {
       return $this->getProp('trainNumber');
   }

   /**
     * The name of the train (e.g. The Orient Express).
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getTrainName()
   {
       return $this->getProp('trainName');
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
     * The platform where the train arrives.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getArrivalPlatform()
   {
       return $this->getProp('arrivalPlatform');
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
