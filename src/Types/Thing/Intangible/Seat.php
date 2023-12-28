<?php

/**
* @see https://schema.org/Seat
 * Used to describe a seat, such as a reserved seat in an event reservation.
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class Seat extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
   const TYPE = 'Seat';

   /**
     * The type/class of the seat.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_seatingType;

   /**
     * The location of the reserved seat (e.g., 27).
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_seatNumber;

   /**
     * The section location of the reserved seat (e.g. Orchestra).
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_seatSection;

   /**
     * The row location of the reserved seat (e.g., B).
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_seatRow;

   /**
     * The type/class of the seat.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setSeatingType($value)
   {
       return $this->setProp('seatingType', $value);
   }

   /**
     * The location of the reserved seat (e.g., 27).
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setSeatNumber($value)
   {
       return $this->setProp('seatNumber', $value);
   }

   /**
     * The section location of the reserved seat (e.g. Orchestra).
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setSeatSection($value)
   {
       return $this->setProp('seatSection', $value);
   }

   /**
     * The row location of the reserved seat (e.g., B).
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setSeatRow($value)
   {
       return $this->setProp('seatRow', $value);
   }

   /**
     * The type/class of the seat.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getSeatingType()
   {
       return $this->getProp('seatingType');
   }

   /**
     * The location of the reserved seat (e.g., 27).
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getSeatNumber()
   {
       return $this->getProp('seatNumber');
   }

   /**
     * The section location of the reserved seat (e.g. Orchestra).
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getSeatSection()
   {
       return $this->getProp('seatSection');
   }

   /**
     * The row location of the reserved seat (e.g., B).
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getSeatRow()
   {
       return $this->getProp('seatRow');
   }
}
