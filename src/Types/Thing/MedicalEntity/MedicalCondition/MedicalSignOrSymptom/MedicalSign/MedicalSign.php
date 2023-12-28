<?php

/**
* @see https://schema.org/MedicalSign
 * Any physical manifestation of a person's medical condition discoverable by objective diagnostic tests or physical examination.
*/

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSign;

class MedicalSign extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSignOrSymptom
{
   const TYPE = 'MedicalSign';

   /**
     * A diagnostic test that can identify this sign.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest
    */
   protected $prop_identifyingTest;

   /**
     * A physical examination that can identify this sign.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\PhysicalExam\PhysicalExam
    */
   protected $prop_identifyingExam;

   /**
     * A diagnostic test that can identify this sign.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest $value
    * @return static
    */
   function setIdentifyingTest($value)
   {
       return $this->setProp('identifyingTest', $value);
   }

   /**
     * A physical examination that can identify this sign.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\PhysicalExam\PhysicalExam $value
    * @return static
    */
   function setIdentifyingExam($value)
   {
       return $this->setProp('identifyingExam', $value);
   }

   /**
     * A diagnostic test that can identify this sign.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest|null
    */
   function getIdentifyingTest()
   {
       return $this->getProp('identifyingTest');
   }

   /**
     * A physical examination that can identify this sign.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\PhysicalExam\PhysicalExam|null
    */
   function getIdentifyingExam()
   {
       return $this->getProp('identifyingExam');
   }
}
