<?php

/**
 * @see https://schema.org/MedicalClinic
 * A facility, often associated with a hospital or medical school, that is devoted to the specific diagnosis and/or healthcare. Previously limited
 * to outpatients but with evolution it may be open to inpatients as well.
 */

namespace Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\MedicalBusiness\MedicalClinic;

class MedicalClinic extends \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\MedicalBusiness\MedicalBusiness
{
    const TYPE = 'MedicalClinic';

    /**
     * A medical specialty of the provider.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalSpecialty\MedicalSpecialty
     */
    protected $prop_medicalSpecialty;

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
     * A medical service available from this provider.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\MedicalProcedure|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest|null
     */
    function getAvailableService()
    {
        return $this->getProp('availableService');
    }
}
