<?php

/**
* @see https://schema.org/Hospital
 * A hospital.
*/

namespace Vnetby\Schemaorg\Types\Thing\Place\LocalBusiness\EmergencyService;

class Hospital extends \Vnetby\Schemaorg\Types\Thing\Place\LocalBusiness\EmergencyService\EmergencyService
{
   const TYPE = 'Hospital';

   /**
     * A medical specialty of the provider.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalSpecialty\MedicalSpecialty
    */
   protected $prop_medicalSpecialty;

   /**
     * Indicates data describing a hospital, e.g. a CDC [[CDCPMDRecord]] or as some kind of [[Dataset]].
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\CDCPMDRecord|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Dataset\Dataset
    */
   protected $prop_healthcareReportingData;

   /**
     * A medical service available from this provider.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\MedicalProcedure|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest
    */
   protected $prop_availableService;

   /**
     * A medical specialty of the provider.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalSpecialty\MedicalSpecialty $value
    * @return static
    */
   function setMedicalSpecialty($value)
   {
       return $this->setProp('medicalSpecialty', $value);
   }

   /**
     * Indicates data describing a hospital, e.g. a CDC [[CDCPMDRecord]] or as some kind of [[Dataset]].
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\CDCPMDRecord|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Dataset\Dataset $value
    * @return static
    */
   function setHealthcareReportingData($value)
   {
       return $this->setProp('healthcareReportingData', $value);
   }

   /**
     * A medical service available from this provider.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\MedicalProcedure|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest $value
    * @return static
    */
   function setAvailableService($value)
   {
       return $this->setProp('availableService', $value);
   }

   /**
     * A medical specialty of the provider.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalSpecialty\MedicalSpecialty|null
    */
   function getMedicalSpecialty()
   {
       return $this->getProp('medicalSpecialty');
   }

   /**
     * Indicates data describing a hospital, e.g. a CDC [[CDCPMDRecord]] or as some kind of [[Dataset]].
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\CDCPMDRecord|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Dataset\Dataset|null
    */
   function getHealthcareReportingData()
   {
       return $this->getProp('healthcareReportingData');
   }

   /**
     * A medical service available from this provider.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\MedicalProcedure|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest|null
    */
   function getAvailableService()
   {
       return $this->getProp('availableService');
   }
}
