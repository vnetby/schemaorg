<?php

/**
 * @see https://schema.org/Physician
 * A doctor's office.
 */

namespace Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\MedicalBusiness;

class Physician extends \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\MedicalBusiness\MedicalBusiness
{
    const TYPE = 'Physician';

    /**
     * A medical specialty of the provider.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalSpecialty\MedicalSpecialty
     */
    public $medicalSpecialty;

    /**
     * A hospital with which the physician or office is affiliated.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\MedicalOrganization\Hospital
     */
    public $hospitalAffiliation;

    /**
     * A medical service available from this provider.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\MedicalProcedure|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest
     */
    public $availableService;

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
     * A hospital with which the physician or office is affiliated.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\MedicalOrganization\Hospital $value
     * @return static
     */
    function setHospitalAffiliation($value)
    {
        return $this->setProp('hospitalAffiliation', $value);
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
     * A hospital with which the physician or office is affiliated.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\MedicalOrganization\Hospital|null
     */
    function getHospitalAffiliation()
    {
        return $this->getProp('hospitalAffiliation');
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
