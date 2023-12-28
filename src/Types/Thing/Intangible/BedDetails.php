<?php

/**
* @see https://schema.org/BedDetails
 * An entity holding detailed information about the available bed types, e.g. the quantity of twin beds for a hotel room. For
 * the single case of just one bed of a certain type, you can use bed directly with a text. See also
 * [[BedType]] (under development).
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class BedDetails extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
   const TYPE = 'BedDetails';

   /**
     * The quantity of the given bed type available in the HotelRoom, Suite, House, or Apartment.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_numberOfBeds;

   /**
     * The type of bed to which the BedDetail refers, i.e. the type of bed available in the quantity indicated by quantity.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\BedType
    */
   protected $prop_typeOfBed;

   /**
     * The quantity of the given bed type available in the HotelRoom, Suite, House, or Apartment.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setNumberOfBeds($value)
   {
       return $this->setProp('numberOfBeds', $value);
   }

   /**
     * The type of bed to which the BedDetail refers, i.e. the type of bed available in the quantity indicated by quantity.
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\BedType $value
    * @return static
    */
   function setTypeOfBed($value)
   {
       return $this->setProp('typeOfBed', $value);
   }

   /**
     * The quantity of the given bed type available in the HotelRoom, Suite, House, or Apartment.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getNumberOfBeds()
   {
       return $this->getProp('numberOfBeds');
   }

   /**
     * The type of bed to which the BedDetail refers, i.e. the type of bed available in the quantity indicated by quantity.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\BedType|null
    */
   function getTypeOfBed()
   {
       return $this->getProp('typeOfBed');
   }
}
