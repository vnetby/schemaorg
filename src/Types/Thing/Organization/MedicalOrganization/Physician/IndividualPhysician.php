<?php

/**
 * @see https://schema.org/IndividualPhysician
 * An individual medical practitioner. For their official address use [[address]], for affiliations to hospitals use [[hospitalAffiliation]]. The [[practicesAt]] property can be
 * used to indicate [[MedicalOrganization]] hospitals, clinics, pharmacies etc. where this physician practices.
 */

namespace Vnetby\Schemaorg\Types\Thing\Organization\MedicalOrganization\Physician;

class IndividualPhysician extends \Vnetby\Schemaorg\Types\Thing\Organization\MedicalOrganization\Physician\Physician
{
    const TYPE = 'IndividualPhysician';

    /**
     * A [[MedicalOrganization]] where the [[IndividualPhysician]] practices.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\MedicalOrganization\MedicalOrganization
     */
    public $practicesAt;

    /**
     * A [[MedicalOrganization]] where the [[IndividualPhysician]] practices.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\MedicalOrganization\MedicalOrganization $value
     * @return static
     */
    function setPracticesAt($value)
    {
        return $this->setProp('practicesAt', $value);
    }

    /**
     * A [[MedicalOrganization]] where the [[IndividualPhysician]] practices.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\MedicalOrganization\MedicalOrganization|null
     */
    function getPracticesAt()
    {
        return $this->getProp('practicesAt');
    }
}
