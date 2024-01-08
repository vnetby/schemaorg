<?php

/**
 * @see https://schema.org/Physician
 * An individual physician or a physician's office considered as a [[MedicalOrganization]].
 */

namespace Vnetby\Schemaorg\Types\Thing\Organization\MedicalOrganization\Physician;

class Physician extends \Vnetby\Schemaorg\Types\Thing\Organization\MedicalOrganization\MedicalOrganization
{
    const TYPE = 'Physician';

    /**
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the
     * property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for
     * the category should be provided.\n Note: for historical reasons, any textual label and formal code provided as a literal may be
     * assumed to be from O*NET-SOC.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode
     */
    public $occupationalCategory;

    /**
     * A hospital with which the physician or office is affiliated.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\EmergencyService\Hospital
     */
    public $hospitalAffiliation;

    /**
     * A medical specialty of the provider.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Specialty\MedicalSpecialty\MedicalSpecialty
     */
    public $medicalSpecialty;

    /**
     * A <a href="https://en.wikipedia.org/wiki/National_Provider_Identifier">National Provider Identifier</a> (NPI) is a unique 10-digit identification number issued to health care providers in the United States
     * by the Centers for Medicare and Medicaid Services.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $usNPI;

    /**
     * A medical service available from this provider.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest\MedicalTest|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\MedicalProcedure
     */
    public $availableService;

    /**
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the
     * property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for
     * the category should be provided.\n Note: for historical reasons, any textual label and formal code provided as a literal may be
     * assumed to be from O*NET-SOC.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode $value
     * @return static
     */
    function setOccupationalCategory($value)
    {
        return $this->setProp('occupationalCategory', $value);
    }

    /**
     * A hospital with which the physician or office is affiliated.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\EmergencyService\Hospital $value
     * @return static
     */
    function setHospitalAffiliation($value)
    {
        return $this->setProp('hospitalAffiliation', $value);
    }

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
     * A <a href="https://en.wikipedia.org/wiki/National_Provider_Identifier">National Provider Identifier</a> (NPI) is a unique 10-digit identification number issued to health care providers in the United States
     * by the Centers for Medicare and Medicaid Services.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setUsNPI($value)
    {
        return $this->setProp('usNPI', $value);
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
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the
     * property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for
     * the category should be provided.\n Note: for historical reasons, any textual label and formal code provided as a literal may be
     * assumed to be from O*NET-SOC.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|null
     */
    function getOccupationalCategory()
    {
        return $this->getProp('occupationalCategory');
    }

    /**
     * A hospital with which the physician or office is affiliated.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\LocalBusiness\EmergencyService\Hospital|null
     */
    function getHospitalAffiliation()
    {
        return $this->getProp('hospitalAffiliation');
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
     * A <a href="https://en.wikipedia.org/wiki/National_Provider_Identifier">National Provider Identifier</a> (NPI) is a unique 10-digit identification number issued to health care providers in the United States
     * by the Centers for Medicare and Medicaid Services.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getUsNPI()
    {
        return $this->getProp('usNPI');
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
