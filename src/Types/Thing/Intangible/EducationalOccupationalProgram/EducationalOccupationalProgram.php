<?php

/**
 * @see https://schema.org/EducationalOccupationalProgram
 * A program offered by an institution which determines the learning progress to achieve an outcome, usually a credential like a degree
 * or certificate. This would define a discrete set of opportunities (e.g., job, courses) that together constitute a program with a clear
 * start, end, set of requirements, and transition to a new occupational opportunity (e.g., a job), or sometimes a higher educational opportunity
 * (e.g., an advanced degree).
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\EducationalOccupationalProgram;

class EducationalOccupationalProgram extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'EducationalOccupationalProgram';

    /**
     * The date at which the program stops collecting applications for the next enrollment cycle.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $applicationDeadline;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods
     * on behalf of the provider. A provider may also serve as the seller.
     * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
     */
    public $provider;

    /**
     * A financial aid type or program which students may use to pay for tuition or fees associated with the program.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $financialAidEligible;

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $startDate;

    /**
     * The number of credits or units a full-time student would be expected to take in 1 term however 'term' is defined
     * by the institution.
     * @var string|int|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $typicalCreditsPerTerm;

    /**
     * The time of day the program normally runs. For example, "evenings".
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $timeOfDay;

    /**
     * Prerequisites for enrolling in the program.
     * @var string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\AlignmentObject|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Course
     */
    public $programPrerequisites;

    /**
     * The expected length of time to complete the program if attending full-time.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    public $timeToComplete;

    /**
     * A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this
     * course or program.
     * @var string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $educationalCredentialAwarded;

    /**
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the
     * property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for
     * the category should be provided.\n Note: for historical reasons, any textual label and formal code provided as a literal may be
     * assumed to be from O*NET-SOC.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode
     */
    public $occupationalCategory;

    /**
     * The day of the week for which these opening hours are valid.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DayOfWeek\DayOfWeek
     */
    public $dayOfWeek;

    /**
     * The number of times terms of study are offered per year. Semesters and quarters are common units for term. For example,
     * if the student can only take 2 semesters for the program in one year, then termsPerYear should be 2.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $termsPerYear;

    /**
     * The number of credits or units awarded by a Course or required to complete an EducationalOccupationalProgram.
     * @var string|int|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $numberOfCredits;

    /**
     * A course or class that is one of the learning opportunities that constitute an educational / occupational program. No information is
     * implied about whether the course is mandatory or optional; no guarantee is implied about whether the course will be available to
     * everyone on the program.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Course
     */
    public $hasCourse;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a
     * service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc.
     * This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of
     * common types, it can be used in others. In that case, using a second type, such as Product or a subtype
     * of Product, can clarify the nature of the offer. 
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer|\Vnetby\Schemaorg\Types\Thing\Intangible\Demand
     */
    public $offers;

    /**
     * The amount of time in a term as defined by the institution. A term is a length of time where students
     * take one or more classes. Semesters and quarters are common units for term.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
     */
    public $termDuration;

    /**
     * The maximum number of students who may be enrolled in the program.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $maximumEnrollment;

    /**
     * A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this
     * course or program.
     * @var string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $occupationalCredentialAwarded;

    /**
     * Similar to courseMode, the medium or means of delivery of the program as a whole. The value may either be a
     * text label (e.g. "online", "onsite" or "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or a URL reference to a term from
     * a controlled vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous ).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $educationalProgramMode;

    /**
     * The type of educational or occupational program. For example, classroom, internship, alternance, etc.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $programType;

    /**
     * The date at which the program begins collecting applications for the next enrollment cycle.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $applicationStartDate;

    /**
     * The estimated salary earned while in the program.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution
     */
    public $trainingSalary;

    /**
     * The expected salary upon completing the training.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution
     */
    public $salaryUponCompletion;

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
     */
    public $endDate;

    /**
     * The date at which the program stops collecting applications for the next enrollment cycle.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setApplicationDeadline($value)
    {
        return $this->setProp('applicationDeadline', $value);
    }

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods
     * on behalf of the provider. A provider may also serve as the seller.
     * @param \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person $value
     * @return static
     */
    function setProvider($value)
    {
        return $this->setProp('provider', $value);
    }

    /**
     * A financial aid type or program which students may use to pay for tuition or fees associated with the program.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setFinancialAidEligible($value)
    {
        return $this->setProp('financialAidEligible', $value);
    }

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setStartDate($value)
    {
        return $this->setProp('startDate', $value);
    }

    /**
     * The number of credits or units a full-time student would be expected to take in 1 term however 'term' is defined
     * by the institution.
     * @param string|int|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setTypicalCreditsPerTerm($value)
    {
        return $this->setProp('typicalCreditsPerTerm', $value);
    }

    /**
     * The time of day the program normally runs. For example, "evenings".
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTimeOfDay($value)
    {
        return $this->setProp('timeOfDay', $value);
    }

    /**
     * Prerequisites for enrolling in the program.
     * @param string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\AlignmentObject|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Course $value
     * @return static
     */
    function setProgramPrerequisites($value)
    {
        return $this->setProp('programPrerequisites', $value);
    }

    /**
     * The expected length of time to complete the program if attending full-time.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
     * @return static
     */
    function setTimeToComplete($value)
    {
        return $this->setProp('timeToComplete', $value);
    }

    /**
     * A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this
     * course or program.
     * @param string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setEducationalCredentialAwarded($value)
    {
        return $this->setProp('educationalCredentialAwarded', $value);
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
     * The day of the week for which these opening hours are valid.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DayOfWeek\DayOfWeek $value
     * @return static
     */
    function setDayOfWeek($value)
    {
        return $this->setProp('dayOfWeek', $value);
    }

    /**
     * The number of times terms of study are offered per year. Semesters and quarters are common units for term. For example,
     * if the student can only take 2 semesters for the program in one year, then termsPerYear should be 2.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setTermsPerYear($value)
    {
        return $this->setProp('termsPerYear', $value);
    }

    /**
     * The number of credits or units awarded by a Course or required to complete an EducationalOccupationalProgram.
     * @param string|int|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setNumberOfCredits($value)
    {
        return $this->setProp('numberOfCredits', $value);
    }

    /**
     * A course or class that is one of the learning opportunities that constitute an educational / occupational program. No information is
     * implied about whether the course is mandatory or optional; no guarantee is implied about whether the course will be available to
     * everyone on the program.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Course $value
     * @return static
     */
    function setHasCourse($value)
    {
        return $this->setProp('hasCourse', $value);
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a
     * service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc.
     * This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of
     * common types, it can be used in others. In that case, using a second type, such as Product or a subtype
     * of Product, can clarify the nature of the offer. 
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer|\Vnetby\Schemaorg\Types\Thing\Intangible\Demand $value
     * @return static
     */
    function setOffers($value)
    {
        return $this->setProp('offers', $value);
    }

    /**
     * The amount of time in a term as defined by the institution. A term is a length of time where students
     * take one or more classes. Semesters and quarters are common units for term.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration $value
     * @return static
     */
    function setTermDuration($value)
    {
        return $this->setProp('termDuration', $value);
    }

    /**
     * The maximum number of students who may be enrolled in the program.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setMaximumEnrollment($value)
    {
        return $this->setProp('maximumEnrollment', $value);
    }

    /**
     * A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this
     * course or program.
     * @param string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setOccupationalCredentialAwarded($value)
    {
        return $this->setProp('occupationalCredentialAwarded', $value);
    }

    /**
     * Similar to courseMode, the medium or means of delivery of the program as a whole. The value may either be a
     * text label (e.g. "online", "onsite" or "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or a URL reference to a term from
     * a controlled vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous ).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setEducationalProgramMode($value)
    {
        return $this->setProp('educationalProgramMode', $value);
    }

    /**
     * The type of educational or occupational program. For example, classroom, internship, alternance, etc.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setProgramType($value)
    {
        return $this->setProp('programType', $value);
    }

    /**
     * The date at which the program begins collecting applications for the next enrollment cycle.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setApplicationStartDate($value)
    {
        return $this->setProp('applicationStartDate', $value);
    }

    /**
     * The estimated salary earned while in the program.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution $value
     * @return static
     */
    function setTrainingSalary($value)
    {
        return $this->setProp('trainingSalary', $value);
    }

    /**
     * The expected salary upon completing the training.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution $value
     * @return static
     */
    function setSalaryUponCompletion($value)
    {
        return $this->setProp('salaryUponCompletion', $value);
    }

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
     * @return static
     */
    function setEndDate($value)
    {
        return $this->setProp('endDate', $value);
    }

    /**
     * The date at which the program stops collecting applications for the next enrollment cycle.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getApplicationDeadline()
    {
        return $this->getProp('applicationDeadline');
    }

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods
     * on behalf of the provider. A provider may also serve as the seller.
     * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
     */
    function getProvider()
    {
        return $this->getProp('provider');
    }

    /**
     * A financial aid type or program which students may use to pay for tuition or fees associated with the program.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getFinancialAidEligible()
    {
        return $this->getProp('financialAidEligible');
    }

    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getStartDate()
    {
        return $this->getProp('startDate');
    }

    /**
     * The number of credits or units a full-time student would be expected to take in 1 term however 'term' is defined
     * by the institution.
     * @return string|int|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getTypicalCreditsPerTerm()
    {
        return $this->getProp('typicalCreditsPerTerm');
    }

    /**
     * The time of day the program normally runs. For example, "evenings".
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTimeOfDay()
    {
        return $this->getProp('timeOfDay');
    }

    /**
     * Prerequisites for enrolling in the program.
     * @return string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\AlignmentObject|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Course|null
     */
    function getProgramPrerequisites()
    {
        return $this->getProp('programPrerequisites');
    }

    /**
     * The expected length of time to complete the program if attending full-time.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
     */
    function getTimeToComplete()
    {
        return $this->getProp('timeToComplete');
    }

    /**
     * A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this
     * course or program.
     * @return string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getEducationalCredentialAwarded()
    {
        return $this->getProp('educationalCredentialAwarded');
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
     * The day of the week for which these opening hours are valid.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DayOfWeek\DayOfWeek|null
     */
    function getDayOfWeek()
    {
        return $this->getProp('dayOfWeek');
    }

    /**
     * The number of times terms of study are offered per year. Semesters and quarters are common units for term. For example,
     * if the student can only take 2 semesters for the program in one year, then termsPerYear should be 2.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getTermsPerYear()
    {
        return $this->getProp('termsPerYear');
    }

    /**
     * The number of credits or units awarded by a Course or required to complete an EducationalOccupationalProgram.
     * @return string|int|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getNumberOfCredits()
    {
        return $this->getProp('numberOfCredits');
    }

    /**
     * A course or class that is one of the learning opportunities that constitute an educational / occupational program. No information is
     * implied about whether the course is mandatory or optional; no guarantee is implied about whether the course will be available to
     * everyone on the program.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Course|null
     */
    function getHasCourse()
    {
        return $this->getProp('hasCourse');
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a
     * service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc.
     * This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of
     * common types, it can be used in others. In that case, using a second type, such as Product or a subtype
     * of Product, can clarify the nature of the offer. 
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer|\Vnetby\Schemaorg\Types\Thing\Intangible\Demand|null
     */
    function getOffers()
    {
        return $this->getProp('offers');
    }

    /**
     * The amount of time in a term as defined by the institution. A term is a length of time where students
     * take one or more classes. Semesters and quarters are common units for term.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration|null
     */
    function getTermDuration()
    {
        return $this->getProp('termDuration');
    }

    /**
     * The maximum number of students who may be enrolled in the program.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getMaximumEnrollment()
    {
        return $this->getProp('maximumEnrollment');
    }

    /**
     * A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this
     * course or program.
     * @return string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getOccupationalCredentialAwarded()
    {
        return $this->getProp('occupationalCredentialAwarded');
    }

    /**
     * Similar to courseMode, the medium or means of delivery of the program as a whole. The value may either be a
     * text label (e.g. "online", "onsite" or "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or a URL reference to a term from
     * a controlled vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous ).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getEducationalProgramMode()
    {
        return $this->getProp('educationalProgramMode');
    }

    /**
     * The type of educational or occupational program. For example, classroom, internship, alternance, etc.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getProgramType()
    {
        return $this->getProp('programType');
    }

    /**
     * The date at which the program begins collecting applications for the next enrollment cycle.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getApplicationStartDate()
    {
        return $this->getProp('applicationStartDate');
    }

    /**
     * The estimated salary earned while in the program.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution|null
     */
    function getTrainingSalary()
    {
        return $this->getProp('trainingSalary');
    }

    /**
     * The expected salary upon completing the training.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution|null
     */
    function getSalaryUponCompletion()
    {
        return $this->getProp('salaryUponCompletion');
    }

    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
     */
    function getEndDate()
    {
        return $this->getProp('endDate');
    }
}
