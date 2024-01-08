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
     * Educational background needed for the position or Occupation.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential
     */
    public $educationRequirements;

    /**
     * Specific qualifications required for this role or Occupation.
     * @var string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $qualifications;

    /**
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the
     * property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for
     * the category should be provided.\n Note: for historical reasons, any textual label and formal code provided as a literal may be
     * assumed to be from O*NET-SOC.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode
     */
    public $occupationalCategory;

    /**
     * An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry,
     * job title, and location. Estimated salaries are often computed by outside organizations rather than the hiring organization, who may not have
     * committed to the estimated value.
     * @var string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $estimatedSalary;

    /**
     * Responsibilities associated with this role or Occupation.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $responsibilities;

    /**
     * A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is desired or required to fulfill
     * this role or to work in this occupation.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $skills;

    /**
     *  The region/country for which this occupational description is appropriate. Note that educational requirements and qualifications can vary between jurisdictions.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea
     */
    public $occupationLocation;

    /**
     * Description of skills and experience needed for the position or Occupation.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\OccupationalExperienceRequirements|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $experienceRequirements;

    /**
     * Educational background needed for the position or Occupation.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential $value
     * @return static
     */
    function setEducationRequirements($value)
    {
        return $this->setProp('educationRequirements', $value);
    }

    /**
     * Specific qualifications required for this role or Occupation.
     * @param string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setQualifications($value)
    {
        return $this->setProp('qualifications', $value);
    }

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
     * An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry,
     * job title, and location. Estimated salaries are often computed by outside organizations rather than the hiring organization, who may not have
     * committed to the estimated value.
     * @param string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setEstimatedSalary($value)
    {
        return $this->setProp('estimatedSalary', $value);
    }

    /**
     * Responsibilities associated with this role or Occupation.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setResponsibilities($value)
    {
        return $this->setProp('responsibilities', $value);
    }

    /**
     * A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is desired or required to fulfill
     * this role or to work in this occupation.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSkills($value)
    {
        return $this->setProp('skills', $value);
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
     * Description of skills and experience needed for the position or Occupation.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\OccupationalExperienceRequirements|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setExperienceRequirements($value)
    {
        return $this->setProp('experienceRequirements', $value);
    }

    /**
     * Educational background needed for the position or Occupation.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|null
     */
    function getEducationRequirements()
    {
        return $this->getProp('educationRequirements');
    }

    /**
     * Specific qualifications required for this role or Occupation.
     * @return string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getQualifications()
    {
        return $this->getProp('qualifications');
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
     * An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry,
     * job title, and location. Estimated salaries are often computed by outside organizations rather than the hiring organization, who may not have
     * committed to the estimated value.
     * @return string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getEstimatedSalary()
    {
        return $this->getProp('estimatedSalary');
    }

    /**
     * Responsibilities associated with this role or Occupation.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getResponsibilities()
    {
        return $this->getProp('responsibilities');
    }

    /**
     * A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is desired or required to fulfill
     * this role or to work in this occupation.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSkills()
    {
        return $this->getProp('skills');
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
     * Description of skills and experience needed for the position or Occupation.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\OccupationalExperienceRequirements|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getExperienceRequirements()
    {
        return $this->getProp('experienceRequirements');
    }
}
