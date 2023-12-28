<?php

/**
* @see https://schema.org/Vein
 * A type of blood vessel that specifically carries blood to the heart.
*/

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Vessel;

class Vein extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Vessel\Vessel
{
   const TYPE = 'Vein';

   /**
     * The vasculature that the vein drains into.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Vessel\Vessel
    */
   protected $prop_drainsTo;

   /**
     * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure
    */
   protected $prop_regionDrained;

   /**
     * The anatomical or organ system that the vein flows into; a larger structure that the vein connects to.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure
    */
   protected $prop_tributary;

   /**
     * The vasculature that the vein drains into.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Vessel\Vessel $value
    * @return static
    */
   function setDrainsTo($value)
   {
       return $this->setProp('drainsTo', $value);
   }

   /**
     * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure $value
    * @return static
    */
   function setRegionDrained($value)
   {
       return $this->setProp('regionDrained', $value);
   }

   /**
     * The anatomical or organ system that the vein flows into; a larger structure that the vein connects to.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure $value
    * @return static
    */
   function setTributary($value)
   {
       return $this->setProp('tributary', $value);
   }

   /**
     * The vasculature that the vein drains into.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Vessel\Vessel|null
    */
   function getDrainsTo()
   {
       return $this->getProp('drainsTo');
   }

   /**
     * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|null
    */
   function getRegionDrained()
   {
       return $this->getProp('regionDrained');
   }

   /**
     * The anatomical or organ system that the vein flows into; a larger structure that the vein connects to.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|null
    */
   function getTributary()
   {
       return $this->getProp('tributary');
   }
}
