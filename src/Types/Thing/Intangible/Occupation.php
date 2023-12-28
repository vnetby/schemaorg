<?php

/**
 * @see https://schema.org/Occupation
 * A profession, may involve prolonged training and/or a formal qualification.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class Occupation extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'Occupation';

    /**
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the
     * property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for
     * the category should be provided.\n Note: for historical reasons, any textual label and formal code provided as a literal may be
     * assumed to be from O*NET-SOC.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_occupationalCategory;

    /**
     * Specific qualifications required for this role or Occupation.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_qualifications;

    /**
     *  The region/country for which this occupational description is appropriate. Note that educational requirements and qualifications can vary between jurisdictions.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea
     */
    protected $prop_occupationLocation;

    /**
     * A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is desired or required to fulfill
     * this role or to work in this occupation.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    protected $prop_skills;

    /**
     * Educational background needed for the position or Occupation.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_educationRequirements;

    /**
     * Responsibilities associated with this role or Occupation.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_responsibilities;

    /**
     * An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry,
     * job title, and location. Estimated salaries are often computed by outside organizations rather than the hiring organization, who may not have
     * committed to the estimated value.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution
     */
    protected $prop_estimatedSalary;

    /**
     * Description of skills and experience needed for the position or Occupation.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\OccupationalExperienceRequirements|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_experienceRequirements;

    /**
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the
     * property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for
     * the category should be provided.\n Note: for historical reasons, any textual label and formal code provided as a literal may be
     * assumed to be from O*NET-SOC.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setOccupationalCategory($value)
    {
        return $this->setProp('occupationalCategory', $value);
    }

    /**
     * Specific qualifications required for this role or Occupation.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setQualifications($value)
    {
        return $this->setProp('qualifications', $value);
    }

    /**
     *  The region/country for which this occupational description is appropriate. Note that educational requirements and qualifications can vary between jurisdictions.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea $value
     * @return static
     */
    function setOccupationLocation($value)
    {
        return $this->setProp('occupationLocation', $value);
    }

    /**
     * A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is desired or required to fulfill
     * this role or to work in this occupation.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
     * @return static
     */
    function setSkills($value)
    {
        return $this->setProp('skills', $value);
    }

    /**
     * Educational background needed for the position or Occupation.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setEducationRequirements($value)
    {
        return $this->setProp('educationRequirements', $value);
    }

    /**
     * Responsibilities associated with this role or Occupation.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setResponsibilities($value)
    {
        return $this->setProp('responsibilities', $value);
    }

    /**
     * An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry,
     * job title, and location. Estimated salaries are often computed by outside organizations rather than the hiring organization, who may not have
     * committed to the estimated value.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution $value
     * @return static
     */
    function setEstimatedSalary($value)
    {
        return $this->setProp('estimatedSalary', $value);
    }

    /**
     * Description of skills and experience needed for the position or Occupation.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\OccupationalExperienceRequirements|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setExperienceRequirements($value)
    {
        return $this->setProp('experienceRequirements', $value);
    }

    /**
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the
     * property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for
     * the category should be provided.\n Note: for historical reasons, any textual label and formal code provided as a literal may be
     * assumed to be from O*NET-SOC.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getOccupationalCategory()
    {
        return $this->getProp('occupationalCategory');
    }

    /**
     * Specific qualifications required for this role or Occupation.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getQualifications()
    {
        return $this->getProp('qualifications');
    }

    /**
     *  The region/country for which this occupational description is appropriate. Note that educational requirements and qualifications can vary between jurisdictions.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|null
     */
    function getOccupationLocation()
    {
        return $this->getProp('occupationLocation');
    }

    /**
     * A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is desired or required to fulfill
     * this role or to work in this occupation.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
     */
    function getSkills()
    {
        return $this->getProp('skills');
    }

    /**
     * Educational background needed for the position or Occupation.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getEducationRequirements()
    {
        return $this->getProp('educationRequirements');
    }

    /**
     * Responsibilities associated with this role or Occupation.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getResponsibilities()
    {
        return $this->getProp('responsibilities');
    }

    /**
     * An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry,
     * job title, and location. Estimated salaries are often computed by outside organizations rather than the hiring organization, who may not have
     * committed to the estimated value.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution|null
     */
    function getEstimatedSalary()
    {
        return $this->getProp('estimatedSalary');
    }

    /**
     * Description of skills and experience needed for the position or Occupation.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\OccupationalExperienceRequirements|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getExperienceRequirements()
    {
        return $this->getProp('experienceRequirements');
    }
}
