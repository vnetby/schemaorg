<?php

/**
* @see https://schema.org/MedicalTest
 * Any medical test, typically performed for diagnostic purposes.
*/

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest;

class MedicalTest extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
{
   const TYPE = 'MedicalTest';

   /**
     * A sign detected by the test.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSign\MedicalSign
    */
   protected $prop_signDetected;

   /**
     * Range of acceptable values for a typical patient, when applicable.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEnumeration|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_normalRange;

   /**
     * Device used to perform the test.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalDevice
    */
   protected $prop_usesDevice;

   /**
     * A condition the test is used to diagnose.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition
    */
   protected $prop_usedToDiagnose;

   /**
     * Drugs that affect the test's results.
    * @var \Vnetby\Schemaorg\Types\Thing\Product\Drug
    */
   protected $prop_affectedBy;

   /**
     * A sign detected by the test.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSign\MedicalSign $value
    * @return static
    */
   function setSignDetected($value)
   {
       return $this->setProp('signDetected', $value);
   }

   /**
     * Range of acceptable values for a typical patient, when applicable.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEnumeration|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setNormalRange($value)
   {
       return $this->setProp('normalRange', $value);
   }

   /**
     * Device used to perform the test.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalDevice $value
    * @return static
    */
   function setUsesDevice($value)
   {
       return $this->setProp('usesDevice', $value);
   }

   /**
     * A condition the test is used to diagnose.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition $value
    * @return static
    */
   function setUsedToDiagnose($value)
   {
       return $this->setProp('usedToDiagnose', $value);
   }

   /**
     * Drugs that affect the test's results.
    * @param \Vnetby\Schemaorg\Types\Thing\Product\Drug $value
    * @return static
    */
   function setAffectedBy($value)
   {
       return $this->setProp('affectedBy', $value);
   }

   /**
     * A sign detected by the test.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSign\MedicalSign|null
    */
   function getSignDetected()
   {
       return $this->getProp('signDetected');
   }

   /**
     * Range of acceptable values for a typical patient, when applicable.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEnumeration|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getNormalRange()
   {
       return $this->getProp('normalRange');
   }

   /**
     * Device used to perform the test.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalDevice|null
    */
   function getUsesDevice()
   {
       return $this->getProp('usesDevice');
   }

   /**
     * A condition the test is used to diagnose.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition|null
    */
   function getUsedToDiagnose()
   {
       return $this->getProp('usedToDiagnose');
   }

   /**
     * Drugs that affect the test's results.
    * @return \Vnetby\Schemaorg\Types\Thing\Product\Drug|null
    */
   function getAffectedBy()
   {
       return $this->getProp('affectedBy');
   }
}
