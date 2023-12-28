<?php

/**
* @see https://schema.org/MedicalEntity
 * The most generic type of entity related to health and the practice of medicine.
*/

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity;

class MedicalEntity extends \Vnetby\Schemaorg\Types\Thing\Thing
{
   const TYPE = 'MedicalEntity';

   /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Grant\Grant
    */
   protected $prop_funding;

   /**
     * A medical code for the entity, taken from a controlled vocabulary or ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\MedicalCode
    */
   protected $prop_code;

   /**
     * A medical guideline related to this entity.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalGuideline\MedicalGuideline
    */
   protected $prop_guideline;

   /**
     * If applicable, the organization that officially recognizes this entity as part of its endorsed system of medicine.
    * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
    */
   protected $prop_recognizingAuthority;

   /**
     * A medical study or trial related to this entity.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalStudy\MedicalStudy
    */
   protected $prop_study;

   /**
     * The system of medicine that includes this MedicalEntity, for example 'evidence-based', 'homeopathic', 'chiropractic', etc.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicineSystem\MedicineSystem
    */
   protected $prop_medicineSystem;

   /**
     * If applicable, a medical specialty in which this entity is relevant.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalSpecialty\MedicalSpecialty
    */
   protected $prop_relevantSpecialty;

   /**
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEnumeration|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_legalStatus;

   /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Grant\Grant $value
    * @return static
    */
   function setFunding($value)
   {
       return $this->setProp('funding', $value);
   }

   /**
     * A medical code for the entity, taken from a controlled vocabulary or ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\MedicalCode $value
    * @return static
    */
   function setCode($value)
   {
       return $this->setProp('code', $value);
   }

   /**
     * A medical guideline related to this entity.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalGuideline\MedicalGuideline $value
    * @return static
    */
   function setGuideline($value)
   {
       return $this->setProp('guideline', $value);
   }

   /**
     * If applicable, the organization that officially recognizes this entity as part of its endorsed system of medicine.
    * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
    * @return static
    */
   function setRecognizingAuthority($value)
   {
       return $this->setProp('recognizingAuthority', $value);
   }

   /**
     * A medical study or trial related to this entity.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalStudy\MedicalStudy $value
    * @return static
    */
   function setStudy($value)
   {
       return $this->setProp('study', $value);
   }

   /**
     * The system of medicine that includes this MedicalEntity, for example 'evidence-based', 'homeopathic', 'chiropractic', etc.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicineSystem\MedicineSystem $value
    * @return static
    */
   function setMedicineSystem($value)
   {
       return $this->setProp('medicineSystem', $value);
   }

   /**
     * If applicable, a medical specialty in which this entity is relevant.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalSpecialty\MedicalSpecialty $value
    * @return static
    */
   function setRelevantSpecialty($value)
   {
       return $this->setProp('relevantSpecialty', $value);
   }

   /**
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEnumeration|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setLegalStatus($value)
   {
       return $this->setProp('legalStatus', $value);
   }

   /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Grant\Grant|null
    */
   function getFunding()
   {
       return $this->getProp('funding');
   }

   /**
     * A medical code for the entity, taken from a controlled vocabulary or ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\MedicalCode|null
    */
   function getCode()
   {
       return $this->getProp('code');
   }

   /**
     * A medical guideline related to this entity.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalGuideline\MedicalGuideline|null
    */
   function getGuideline()
   {
       return $this->getProp('guideline');
   }

   /**
     * If applicable, the organization that officially recognizes this entity as part of its endorsed system of medicine.
    * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
    */
   function getRecognizingAuthority()
   {
       return $this->getProp('recognizingAuthority');
   }

   /**
     * A medical study or trial related to this entity.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalStudy\MedicalStudy|null
    */
   function getStudy()
   {
       return $this->getProp('study');
   }

   /**
     * The system of medicine that includes this MedicalEntity, for example 'evidence-based', 'homeopathic', 'chiropractic', etc.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicineSystem\MedicineSystem|null
    */
   function getMedicineSystem()
   {
       return $this->getProp('medicineSystem');
   }

   /**
     * If applicable, a medical specialty in which this entity is relevant.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalSpecialty\MedicalSpecialty|null
    */
   function getRelevantSpecialty()
   {
       return $this->getProp('relevantSpecialty');
   }

   /**
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEnumeration|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getLegalStatus()
   {
       return $this->getProp('legalStatus');
   }
}
