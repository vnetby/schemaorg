<?php

/**
* @see https://schema.org/Patient
 * A patient is any person recipient of health care services.
*/

namespace Vnetby\Schemaorg\Types\Thing\Person;

class Patient extends \Vnetby\Schemaorg\Types\Thing\Person\Person
{
   const TYPE = 'Patient';

   /**
     * Specifying the health condition(s) of a patient, medical study, or other target audience.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition
    */
   protected $prop_healthCondition;

   /**
     * Specifying a drug or medicine used in a medication procedure.
    * @var \Vnetby\Schemaorg\Types\Thing\Product\Drug
    */
   protected $prop_drug;

   /**
     * One or more alternative conditions considered in the differential diagnosis process as output of a diagnosis process.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition
    */
   protected $prop_diagnosis;

   /**
     * Specifying the health condition(s) of a patient, medical study, or other target audience.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition $value
    * @return static
    */
   function setHealthCondition($value)
   {
       return $this->setProp('healthCondition', $value);
   }

   /**
     * Specifying a drug or medicine used in a medication procedure.
    * @param \Vnetby\Schemaorg\Types\Thing\Product\Drug $value
    * @return static
    */
   function setDrug($value)
   {
       return $this->setProp('drug', $value);
   }

   /**
     * One or more alternative conditions considered in the differential diagnosis process as output of a diagnosis process.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition $value
    * @return static
    */
   function setDiagnosis($value)
   {
       return $this->setProp('diagnosis', $value);
   }

   /**
     * Specifying the health condition(s) of a patient, medical study, or other target audience.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition|null
    */
   function getHealthCondition()
   {
       return $this->getProp('healthCondition');
   }

   /**
     * Specifying a drug or medicine used in a medication procedure.
    * @return \Vnetby\Schemaorg\Types\Thing\Product\Drug|null
    */
   function getDrug()
   {
       return $this->getProp('drug');
   }

   /**
     * One or more alternative conditions considered in the differential diagnosis process as output of a diagnosis process.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition|null
    */
   function getDiagnosis()
   {
       return $this->getProp('diagnosis');
   }
}
