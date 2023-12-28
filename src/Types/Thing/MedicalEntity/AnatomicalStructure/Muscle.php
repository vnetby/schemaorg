<?php

/**
* @see https://schema.org/Muscle
 * A muscle is an anatomical structure consisting of a contractile form of tissue that animals use to effect movement.
*/

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure;

class Muscle extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure
{
   const TYPE = 'Muscle';

   /**
     * The muscle whose action counteracts the specified muscle.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Muscle
    */
   protected $prop_antagonist;

   /**
     * The underlying innervation associated with the muscle.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Nerve
    */
   protected $prop_nerve;

   /**
     * The movement the muscle generates.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_muscleAction;

   /**
     * The blood vessel that carries blood from the heart to the muscle.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Vessel\Vessel
    */
   protected $prop_bloodSupply;

   /**
     * The place of attachment of a muscle, or what the muscle moves.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure
    */
   protected $prop_insertion;

   /**
     * The muscle whose action counteracts the specified muscle.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Muscle $value
    * @return static
    */
   function setAntagonist($value)
   {
       return $this->setProp('antagonist', $value);
   }

   /**
     * The underlying innervation associated with the muscle.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Nerve $value
    * @return static
    */
   function setNerve($value)
   {
       return $this->setProp('nerve', $value);
   }

   /**
     * The movement the muscle generates.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setMuscleAction($value)
   {
       return $this->setProp('muscleAction', $value);
   }

   /**
     * The blood vessel that carries blood from the heart to the muscle.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Vessel\Vessel $value
    * @return static
    */
   function setBloodSupply($value)
   {
       return $this->setProp('bloodSupply', $value);
   }

   /**
     * The place of attachment of a muscle, or what the muscle moves.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure $value
    * @return static
    */
   function setInsertion($value)
   {
       return $this->setProp('insertion', $value);
   }

   /**
     * The muscle whose action counteracts the specified muscle.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Muscle|null
    */
   function getAntagonist()
   {
       return $this->getProp('antagonist');
   }

   /**
     * The underlying innervation associated with the muscle.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Nerve|null
    */
   function getNerve()
   {
       return $this->getProp('nerve');
   }

   /**
     * The movement the muscle generates.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getMuscleAction()
   {
       return $this->getProp('muscleAction');
   }

   /**
     * The blood vessel that carries blood from the heart to the muscle.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Vessel\Vessel|null
    */
   function getBloodSupply()
   {
       return $this->getProp('bloodSupply');
   }

   /**
     * The place of attachment of a muscle, or what the muscle moves.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|null
    */
   function getInsertion()
   {
       return $this->getProp('insertion');
   }
}
