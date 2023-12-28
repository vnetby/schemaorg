<?php

/**
* @see https://schema.org/MedicalRiskFactor
 * A risk factor is anything that increases a person's likelihood of developing or contracting a disease, medical condition, or complication.
*/

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity;

class MedicalRiskFactor extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
{
   const TYPE = 'MedicalRiskFactor';

   /**
     * The condition, complication, etc. influenced by this factor.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
    */
   protected $prop_increasesRiskOf;

   /**
     * The condition, complication, etc. influenced by this factor.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity $value
    * @return static
    */
   function setIncreasesRiskOf($value)
   {
       return $this->setProp('increasesRiskOf', $value);
   }

   /**
     * The condition, complication, etc. influenced by this factor.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity|null
    */
   function getIncreasesRiskOf()
   {
       return $this->getProp('increasesRiskOf');
   }
}
