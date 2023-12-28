<?php

/**
* @see https://schema.org/Artery
 * A type of blood vessel that specifically carries blood away from the heart.
*/

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Vessel;

class Artery extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Vessel\Vessel
{
   const TYPE = 'Artery';

   /**
     * The area to which the artery supplies blood.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure
    */
   protected $prop_supplyTo;

   /**
     * The branches that comprise the arterial structure.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure
    */
   protected $prop_arterialBranch;

   /**
     * The area to which the artery supplies blood.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure $value
    * @return static
    */
   function setSupplyTo($value)
   {
       return $this->setProp('supplyTo', $value);
   }

   /**
     * The branches that comprise the arterial structure.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure $value
    * @return static
    */
   function setArterialBranch($value)
   {
       return $this->setProp('arterialBranch', $value);
   }

   /**
     * The area to which the artery supplies blood.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|null
    */
   function getSupplyTo()
   {
       return $this->getProp('supplyTo');
   }

   /**
     * The branches that comprise the arterial structure.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|null
    */
   function getArterialBranch()
   {
       return $this->getProp('arterialBranch');
   }
}
