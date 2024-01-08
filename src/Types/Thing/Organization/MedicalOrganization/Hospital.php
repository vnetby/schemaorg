<?php

/**
 * @see https://schema.org/Hospital
 * A hospital.
 */

namespace Vnetby\Schemaorg\Types\Thing\Organization\MedicalOrganization;

class Hospital extends \Vnetby\Schemaorg\Types\Thing\Organization\MedicalOrganization\MedicalOrganization
{
    const TYPE = 'Hospital';

    /**
     * A medical specialty of the provider.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Specialty\MedicalSpecialty\MedicalSpecialty
     */
    public $medicalSpecialty;

    /**
     * Indicates data describing a hospital, e.g. a CDC [[CDCPMDRecord]] or as some kind of [[Dataset]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\CDCPMDRecord|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Dataset\Dataset
     */
    public $healthcareReportingData;

    /**
     * A medical service available from this provider.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\MedicalProcedure
     */
    public $availableService;

    /**
     * A medical specialty of the provider.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Specialty\MedicalSpecialty\MedicalSpecialty $value
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
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\MedicalProcedure $value
     * @return static
     */
    function setAvailableService($value)
    {
        return $this->setProp('availableService', $value);
    }

    /**
     * A medical specialty of the provider.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Specialty\MedicalSpecialty\MedicalSpecialty|null
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
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\MedicalProcedure|null
     */
    function getAvailableService()
    {
        return $this->getProp('availableService');
    }
}
