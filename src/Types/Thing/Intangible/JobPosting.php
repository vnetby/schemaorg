<?php

/**
* @see https://schema.org/JobPosting
 * A listing that describes a job opening in a certain organization.
*/

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class JobPosting extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
   const TYPE = 'JobPosting';

   /**
     * Indicates the department, unit and/or facility where the employee reports and/or in which the job is to be performed.
    * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization
    */
   protected $prop_employmentUnit;

   /**
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the
     * property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for
     * the category should be provided.\n Note: for historical reasons, any textual label and formal code provided as a literal may be
     * assumed to be from O*NET-SOC.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_occupationalCategory;

   /**
     * A description of the types of physical activity associated with the job. Defined terms such as those in O*net may be
     * used, but note that there is no way to specify the level of ability as well as its nature when using
     * a defined term.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_physicalRequirement;

   /**
     * Indicates whether a [[JobPosting]] will accept experience (as indicated by [[OccupationalExperienceRequirements]]) in place of its formal educational qualifications (as indicated by
     * [[educationRequirements]]). If true, indicates that satisfying one of these requirements is sufficient.
    * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
    */
   protected $prop_experienceInPlaceOfEducation;

   /**
     * An indicator as to whether a position is available for an immediate start.
    * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
    */
   protected $prop_jobImmediateStart;

   /**
     * Specific qualifications required for this role or Occupation.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_qualifications;

   /**
     * A description of any sensory requirements and levels necessary to function on the job, including hearing and vision. Defined terms such
     * as those in O*net may be used, but note that there is no way to specify the level of ability as
     * well as its nature when using a defined term.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataURL
    */
   protected $prop_sensoryRequirement;

   /**
     * The title of the job.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_title;

   /**
     * The base salary of the job or of an employee in an EmployeeRole.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount
    */
   protected $prop_baseSalary;

   /**
     * The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217)) used for the main salary information in this job posting or for this employee.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_salaryCurrency;

   /**
     * A description of any security clearance requirements of the job.
    * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_securityClearanceRequirement;

   /**
     * A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is desired or required to fulfill
     * this role or to work in this occupation.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
    */
   protected $prop_skills;

   /**
     * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_employmentType;

   /**
     * Organization or Person offering the job position.
    * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
    */
   protected $prop_hiringOrganization;

   /**
     * The number of positions open for this job posting. Use a positive integer. Do not use if the number of positions
     * is unclear or not known.
    * @var \Vnetby\Schemaorg\DataTypes\DataInteger
    */
   protected $prop_totalJobOpenings;

   /**
     * A (typically single) geographic location associated with the job position.
    * @var \Vnetby\Schemaorg\Types\Thing\Place\Place
    */
   protected $prop_jobLocation;

   /**
     * Contact details for further information relevant to this job posting.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint
    */
   protected $prop_applicationContact;

   /**
     * Educational background needed for the position or Occupation.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_educationRequirements;

   /**
     * The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_workHours;

   /**
     * The location(s) applicants can apply from. This is usually used for telecommuting jobs where the applicant does not need to be
     * in a physical office. Note: This should not be used for citizenship or work visa requirements.
    * @var \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea
    */
   protected $prop_applicantLocationRequirements;

   /**
     * Indicates whether an [[url]] that is associated with a [[JobPosting]] enables direct application for the job, via the posting website. A
     * job posting is considered to have directApply of [[True]] if an application process for the specified job can be directly initiated
     * via the url(s) given (noting that e.g. multiple internet domains might nevertheless be involved at an implementation level). A value of
     * [[False]] is appropriate if there is no clear path to applying directly online for the specified job, navigating directly from the
     * JobPosting url(s) supplied.
    * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
    */
   protected $prop_directApply;

   /**
     * A description of the job location (e.g. TELECOMMUTE for telecommute jobs).
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_jobLocationType;

   /**
     * A description of the employer, career opportunities and work environment for this position.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_employerOverview;

   /**
     * The industry associated with the job position.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
    */
   protected $prop_industry;

   /**
     * The date on which a successful applicant for this job would be expected to start work. Choose a specific date in
     * the future or use the jobImmediateStart property to indicate the position is to be filled as soon as possible.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataDate
    */
   protected $prop_jobStartDate;

   /**
     * Description of bonus and commission compensation aspects of the job.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_incentiveCompensation;

   /**
     * Responsibilities associated with this role or Occupation.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_responsibilities;

   /**
     * Publication date of an online listing.
    * @var \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
    */
   protected $prop_datePosted;

   /**
     * Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_specialCommitments;

   /**
     * An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry,
     * job title, and location. Estimated salaries are often computed by outside organizations rather than the hiring organization, who may not have
     * committed to the estimated value.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution
    */
   protected $prop_estimatedSalary;

   /**
     * The Occupation for the JobPosting.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Occupation
    */
   protected $prop_relevantOccupation;

   /**
     * Description of skills and experience needed for the position or Occupation.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\OccupationalExperienceRequirements|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_experienceRequirements;

   /**
     * The legal requirements such as citizenship, visa and other documentation required for an applicant to this job.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_eligibilityToWorkRequirement;

   /**
     * Description of benefits associated with the job.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_jobBenefits;

   /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period
     * of opening hours.
    * @var \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
    */
   protected $prop_validThrough;

   /**
     * Indicates the department, unit and/or facility where the employee reports and/or in which the job is to be performed.
    * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
    * @return static
    */
   function setEmploymentUnit($value)
   {
       return $this->setProp('employmentUnit', $value);
   }

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
     * A description of the types of physical activity associated with the job. Defined terms such as those in O*net may be
     * used, but note that there is no way to specify the level of ability as well as its nature when using
     * a defined term.
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setPhysicalRequirement($value)
   {
       return $this->setProp('physicalRequirement', $value);
   }

   /**
     * Indicates whether a [[JobPosting]] will accept experience (as indicated by [[OccupationalExperienceRequirements]]) in place of its formal educational qualifications (as indicated by
     * [[educationRequirements]]). If true, indicates that satisfying one of these requirements is sufficient.
    * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
    * @return static
    */
   function setExperienceInPlaceOfEducation($value)
   {
       return $this->setProp('experienceInPlaceOfEducation', $value);
   }

   /**
     * An indicator as to whether a position is available for an immediate start.
    * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
    * @return static
    */
   function setJobImmediateStart($value)
   {
       return $this->setProp('jobImmediateStart', $value);
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
     * A description of any sensory requirements and levels necessary to function on the job, including hearing and vision. Defined terms such
     * as those in O*net may be used, but note that there is no way to specify the level of ability as
     * well as its nature when using a defined term.
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataURL $value
    * @return static
    */
   function setSensoryRequirement($value)
   {
       return $this->setProp('sensoryRequirement', $value);
   }

   /**
     * The title of the job.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setTitle($value)
   {
       return $this->setProp('title', $value);
   }

   /**
     * The base salary of the job or of an employee in an EmployeeRole.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount $value
    * @return static
    */
   function setBaseSalary($value)
   {
       return $this->setProp('baseSalary', $value);
   }

   /**
     * The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217)) used for the main salary information in this job posting or for this employee.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setSalaryCurrency($value)
   {
       return $this->setProp('salaryCurrency', $value);
   }

   /**
     * A description of any security clearance requirements of the job.
    * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setSecurityClearanceRequirement($value)
   {
       return $this->setProp('securityClearanceRequirement', $value);
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
     * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setEmploymentType($value)
   {
       return $this->setProp('employmentType', $value);
   }

   /**
     * Organization or Person offering the job position.
    * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
    * @return static
    */
   function setHiringOrganization($value)
   {
       return $this->setProp('hiringOrganization', $value);
   }

   /**
     * The number of positions open for this job posting. Use a positive integer. Do not use if the number of positions
     * is unclear or not known.
    * @param \Vnetby\Schemaorg\DataTypes\DataInteger $value
    * @return static
    */
   function setTotalJobOpenings($value)
   {
       return $this->setProp('totalJobOpenings', $value);
   }

   /**
     * A (typically single) geographic location associated with the job position.
    * @param \Vnetby\Schemaorg\Types\Thing\Place\Place $value
    * @return static
    */
   function setJobLocation($value)
   {
       return $this->setProp('jobLocation', $value);
   }

   /**
     * Contact details for further information relevant to this job posting.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint $value
    * @return static
    */
   function setApplicationContact($value)
   {
       return $this->setProp('applicationContact', $value);
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
     * The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setWorkHours($value)
   {
       return $this->setProp('workHours', $value);
   }

   /**
     * The location(s) applicants can apply from. This is usually used for telecommuting jobs where the applicant does not need to be
     * in a physical office. Note: This should not be used for citizenship or work visa requirements.
    * @param \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea $value
    * @return static
    */
   function setApplicantLocationRequirements($value)
   {
       return $this->setProp('applicantLocationRequirements', $value);
   }

   /**
     * Indicates whether an [[url]] that is associated with a [[JobPosting]] enables direct application for the job, via the posting website. A
     * job posting is considered to have directApply of [[True]] if an application process for the specified job can be directly initiated
     * via the url(s) given (noting that e.g. multiple internet domains might nevertheless be involved at an implementation level). A value of
     * [[False]] is appropriate if there is no clear path to applying directly online for the specified job, navigating directly from the
     * JobPosting url(s) supplied.
    * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
    * @return static
    */
   function setDirectApply($value)
   {
       return $this->setProp('directApply', $value);
   }

   /**
     * A description of the job location (e.g. TELECOMMUTE for telecommute jobs).
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setJobLocationType($value)
   {
       return $this->setProp('jobLocationType', $value);
   }

   /**
     * A description of the employer, career opportunities and work environment for this position.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setEmployerOverview($value)
   {
       return $this->setProp('employerOverview', $value);
   }

   /**
     * The industry associated with the job position.
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
    * @return static
    */
   function setIndustry($value)
   {
       return $this->setProp('industry', $value);
   }

   /**
     * The date on which a successful applicant for this job would be expected to start work. Choose a specific date in
     * the future or use the jobImmediateStart property to indicate the position is to be filled as soon as possible.
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataDate $value
    * @return static
    */
   function setJobStartDate($value)
   {
       return $this->setProp('jobStartDate', $value);
   }

   /**
     * Description of bonus and commission compensation aspects of the job.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setIncentiveCompensation($value)
   {
       return $this->setProp('incentiveCompensation', $value);
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
     * Publication date of an online listing.
    * @param \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
    * @return static
    */
   function setDatePosted($value)
   {
       return $this->setProp('datePosted', $value);
   }

   /**
     * Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setSpecialCommitments($value)
   {
       return $this->setProp('specialCommitments', $value);
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
     * The Occupation for the JobPosting.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Occupation $value
    * @return static
    */
   function setRelevantOccupation($value)
   {
       return $this->setProp('relevantOccupation', $value);
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
     * The legal requirements such as citizenship, visa and other documentation required for an applicant to this job.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setEligibilityToWorkRequirement($value)
   {
       return $this->setProp('eligibilityToWorkRequirement', $value);
   }

   /**
     * Description of benefits associated with the job.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setJobBenefits($value)
   {
       return $this->setProp('jobBenefits', $value);
   }

   /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period
     * of opening hours.
    * @param \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
    * @return static
    */
   function setValidThrough($value)
   {
       return $this->setProp('validThrough', $value);
   }

   /**
     * Indicates the department, unit and/or facility where the employee reports and/or in which the job is to be performed.
    * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
    */
   function getEmploymentUnit()
   {
       return $this->getProp('employmentUnit');
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
     * A description of the types of physical activity associated with the job. Defined terms such as those in O*net may be
     * used, but note that there is no way to specify the level of ability as well as its nature when using
     * a defined term.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getPhysicalRequirement()
   {
       return $this->getProp('physicalRequirement');
   }

   /**
     * Indicates whether a [[JobPosting]] will accept experience (as indicated by [[OccupationalExperienceRequirements]]) in place of its formal educational qualifications (as indicated by
     * [[educationRequirements]]). If true, indicates that satisfying one of these requirements is sufficient.
    * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
    */
   function getExperienceInPlaceOfEducation()
   {
       return $this->getProp('experienceInPlaceOfEducation');
   }

   /**
     * An indicator as to whether a position is available for an immediate start.
    * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
    */
   function getJobImmediateStart()
   {
       return $this->getProp('jobImmediateStart');
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
     * A description of any sensory requirements and levels necessary to function on the job, including hearing and vision. Defined terms such
     * as those in O*net may be used, but note that there is no way to specify the level of ability as
     * well as its nature when using a defined term.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataURL|null
    */
   function getSensoryRequirement()
   {
       return $this->getProp('sensoryRequirement');
   }

   /**
     * The title of the job.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getTitle()
   {
       return $this->getProp('title');
   }

   /**
     * The base salary of the job or of an employee in an EmployeeRole.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\MonetaryAmount|null
    */
   function getBaseSalary()
   {
       return $this->getProp('baseSalary');
   }

   /**
     * The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217)) used for the main salary information in this job posting or for this employee.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getSalaryCurrency()
   {
       return $this->getProp('salaryCurrency');
   }

   /**
     * A description of any security clearance requirements of the job.
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getSecurityClearanceRequirement()
   {
       return $this->getProp('securityClearanceRequirement');
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
     * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getEmploymentType()
   {
       return $this->getProp('employmentType');
   }

   /**
     * Organization or Person offering the job position.
    * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
    */
   function getHiringOrganization()
   {
       return $this->getProp('hiringOrganization');
   }

   /**
     * The number of positions open for this job posting. Use a positive integer. Do not use if the number of positions
     * is unclear or not known.
    * @return \Vnetby\Schemaorg\DataTypes\DataInteger|null
    */
   function getTotalJobOpenings()
   {
       return $this->getProp('totalJobOpenings');
   }

   /**
     * A (typically single) geographic location associated with the job position.
    * @return \Vnetby\Schemaorg\Types\Thing\Place\Place|null
    */
   function getJobLocation()
   {
       return $this->getProp('jobLocation');
   }

   /**
     * Contact details for further information relevant to this job posting.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|null
    */
   function getApplicationContact()
   {
       return $this->getProp('applicationContact');
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
     * The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getWorkHours()
   {
       return $this->getProp('workHours');
   }

   /**
     * The location(s) applicants can apply from. This is usually used for telecommuting jobs where the applicant does not need to be
     * in a physical office. Note: This should not be used for citizenship or work visa requirements.
    * @return \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|null
    */
   function getApplicantLocationRequirements()
   {
       return $this->getProp('applicantLocationRequirements');
   }

   /**
     * Indicates whether an [[url]] that is associated with a [[JobPosting]] enables direct application for the job, via the posting website. A
     * job posting is considered to have directApply of [[True]] if an application process for the specified job can be directly initiated
     * via the url(s) given (noting that e.g. multiple internet domains might nevertheless be involved at an implementation level). A value of
     * [[False]] is appropriate if there is no clear path to applying directly online for the specified job, navigating directly from the
     * JobPosting url(s) supplied.
    * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
    */
   function getDirectApply()
   {
       return $this->getProp('directApply');
   }

   /**
     * A description of the job location (e.g. TELECOMMUTE for telecommute jobs).
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getJobLocationType()
   {
       return $this->getProp('jobLocationType');
   }

   /**
     * A description of the employer, career opportunities and work environment for this position.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getEmployerOverview()
   {
       return $this->getProp('employerOverview');
   }

   /**
     * The industry associated with the job position.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
    */
   function getIndustry()
   {
       return $this->getProp('industry');
   }

   /**
     * The date on which a successful applicant for this job would be expected to start work. Choose a specific date in
     * the future or use the jobImmediateStart property to indicate the position is to be filled as soon as possible.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataDate|null
    */
   function getJobStartDate()
   {
       return $this->getProp('jobStartDate');
   }

   /**
     * Description of bonus and commission compensation aspects of the job.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getIncentiveCompensation()
   {
       return $this->getProp('incentiveCompensation');
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
     * Publication date of an online listing.
    * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
    */
   function getDatePosted()
   {
       return $this->getProp('datePosted');
   }

   /**
     * Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getSpecialCommitments()
   {
       return $this->getProp('specialCommitments');
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
     * The Occupation for the JobPosting.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Occupation|null
    */
   function getRelevantOccupation()
   {
       return $this->getProp('relevantOccupation');
   }

   /**
     * Description of skills and experience needed for the position or Occupation.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\OccupationalExperienceRequirements|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getExperienceRequirements()
   {
       return $this->getProp('experienceRequirements');
   }

   /**
     * The legal requirements such as citizenship, visa and other documentation required for an applicant to this job.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getEligibilityToWorkRequirement()
   {
       return $this->getProp('eligibilityToWorkRequirement');
   }

   /**
     * Description of benefits associated with the job.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getJobBenefits()
   {
       return $this->getProp('jobBenefits');
   }

   /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period
     * of opening hours.
    * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
    */
   function getValidThrough()
   {
       return $this->getProp('validThrough');
   }
}
