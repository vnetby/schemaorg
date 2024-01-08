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
     * A medical code for the entity, taken from a controlled vocabulary or ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\MedicalCode
     */
    public $code;

    /**
     * A medical guideline related to this entity.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalGuideline\MedicalGuideline
     */
    public $guideline;

    /**
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
     * @var string|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEnumeration|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $legalStatus;

    /**
     * If applicable, a medical specialty in which this entity is relevant.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Specialty\MedicalSpecialty\MedicalSpecialty
     */
    public $relevantSpecialty;

    /**
     * The system of medicine that includes this MedicalEntity, for example 'evidence-based', 'homeopathic', 'chiropractic', etc.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicineSystem\MedicineSystem
     */
    public $medicineSystem;

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Grant\Grant
     */
    public $funding;

    /**
     * If applicable, the organization that officially recognizes this entity as part of its endorsed system of medicine.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $recognizingAuthority;

    /**
     * A medical study or trial related to this entity.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalStudy\MedicalStudy
     */
    public $study;

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
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
     * @param string|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEnumeration|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setLegalStatus($value)
    {
        return $this->setProp('legalStatus', $value);
    }

    /**
     * If applicable, a medical specialty in which this entity is relevant.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Specialty\MedicalSpecialty\MedicalSpecialty $value
     * @return static
     */
    function setRelevantSpecialty($value)
    {
        return $this->setProp('relevantSpecialty', $value);
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
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Grant\Grant $value
     * @return static
     */
    function setFunding($value)
    {
        return $this->setProp('funding', $value);
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
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
     * @return string|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEnumeration|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getLegalStatus()
    {
        return $this->getProp('legalStatus');
    }

    /**
     * If applicable, a medical specialty in which this entity is relevant.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Specialty\MedicalSpecialty\MedicalSpecialty|null
     */
    function getRelevantSpecialty()
    {
        return $this->getProp('relevantSpecialty');
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
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Grant\Grant|null
     */
    function getFunding()
    {
        return $this->getProp('funding');
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
}
