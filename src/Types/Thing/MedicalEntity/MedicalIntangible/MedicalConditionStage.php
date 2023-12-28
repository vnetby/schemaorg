<?php

/**
* @see https://schema.org/MedicalConditionStage
 * A stage of a medical condition, such as 'Stage IIIa'.
*/

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible;

class MedicalConditionStage extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\MedicalIntangible
{
   const TYPE = 'MedicalConditionStage';

   /**
     * The stage represented as a number, e.g. 3.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_stageAsNumber;

   /**
     * The substage, e.g. 'a' for Stage IIIa.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_subStageSuffix;

   /**
     * The stage represented as a number, e.g. 3.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setStageAsNumber($value)
   {
       return $this->setProp('stageAsNumber', $value);
   }

   /**
     * The substage, e.g. 'a' for Stage IIIa.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setSubStageSuffix($value)
   {
       return $this->setProp('subStageSuffix', $value);
   }

   /**
     * The stage represented as a number, e.g. 3.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getStageAsNumber()
   {
       return $this->getProp('stageAsNumber');
   }

   /**
     * The substage, e.g. 'a' for Stage IIIa.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getSubStageSuffix()
   {
       return $this->getProp('subStageSuffix');
   }
}
