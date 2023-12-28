<?php

/**
* @see https://schema.org/FlightReservation
 * A reservation for air travel.\n\nNote: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with
 * individual confirmations of reservations. For offers of tickets, use [[Offer]].
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Reservation;

class FlightReservation extends \Vnetby\Schemaorg\Types\Thing\Intangible\Reservation\Reservation
{
   const TYPE = 'FlightReservation';

   /**
     * The type of security screening the passenger is subject to.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_securityScreening;

   /**
     * The priority status assigned to a passenger for security or boarding (e.g. FastTrack or Priority).
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_passengerPriorityStatus;

   /**
     * The passenger's sequence number as assigned by the airline.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_passengerSequenceNumber;

   /**
     * The airline-specific indicator of boarding order / preference.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_boardingGroup;

   /**
     * The type of security screening the passenger is subject to.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setSecurityScreening($value)
   {
       return $this->setProp('securityScreening', $value);
   }

   /**
     * The priority status assigned to a passenger for security or boarding (e.g. FastTrack or Priority).
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setPassengerPriorityStatus($value)
   {
       return $this->setProp('passengerPriorityStatus', $value);
   }

   /**
     * The passenger's sequence number as assigned by the airline.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setPassengerSequenceNumber($value)
   {
       return $this->setProp('passengerSequenceNumber', $value);
   }

   /**
     * The airline-specific indicator of boarding order / preference.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setBoardingGroup($value)
   {
       return $this->setProp('boardingGroup', $value);
   }

   /**
     * The type of security screening the passenger is subject to.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getSecurityScreening()
   {
       return $this->getProp('securityScreening');
   }

   /**
     * The priority status assigned to a passenger for security or boarding (e.g. FastTrack or Priority).
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getPassengerPriorityStatus()
   {
       return $this->getProp('passengerPriorityStatus');
   }

   /**
     * The passenger's sequence number as assigned by the airline.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getPassengerSequenceNumber()
   {
       return $this->getProp('passengerSequenceNumber');
   }

   /**
     * The airline-specific indicator of boarding order / preference.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getBoardingGroup()
   {
       return $this->getProp('boardingGroup');
   }
}
