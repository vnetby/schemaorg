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
   protected $prop_arrivalBusStop;

   /**
     * The unique identifier for the bus.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_busNumber;

   /**
     * The stop or station from which the bus departs.
    * @var \Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\BusStop|\Vnetby\Schemaorg\Types\Thing\Place\CivicStructure\BusStation
    */
   protected $prop_departureBusStop;

   /**
     * The name of the bus (e.g. Bolt Express).
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_busName;

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
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
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
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
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
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
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
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getBusName()
   {
       return $this->getProp('busName');
   }
}
