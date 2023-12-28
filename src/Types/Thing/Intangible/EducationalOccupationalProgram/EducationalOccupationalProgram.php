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
     * The expected length of time to complete the program if attending full-time.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
    */
   protected $prop_timeToComplete;

   /**
     * The number of times terms of study are offered per year. Semesters and quarters are common units for term. For example,
     * if the student can only take 2 semesters for the program in one year, then termsPerYear should be 2.
    * @var \Vnetby\Schemaorg\DataTypes\DataNumber
    */
   protected $prop_termsPerYear;

   /**
     * The type of educational or occupational program. For example, classroom, internship, alternance, etc.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_programType;

   /**
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the
     * property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for
     * the category should be provided.\n Note: for historical reasons, any textual label and formal code provided as a literal may be
     * assumed to be from O*NET-SOC.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_occupationalCategory;

   /**
     * The number of credits or units a full-time student would be expected to take in 1 term however 'term' is defined
     * by the institution.
    * @var \Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
    */
   protected $prop_typicalCreditsPerTerm;

   /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a
     * service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc.
     * This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of
     * common types, it can be used in others. In that case, using a second type, such as Product or a subtype
     * of Product, can clarify the nature of the offer. 
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Demand|\Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer
    */
   protected $prop_offers;

   /**
     * The day of the week for which these opening hours are valid.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\DayOfWeek\DayOfWeek
    */
   protected $prop_dayOfWeek;

   /**
     * The time of day the program normally runs. For example, "evenings".
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_timeOfDay;

   /**
     * A course or class that is one of the learning opportunities that constitute an educational / occupational program. No information is
     * implied about whether the course is mandatory or optional; no guarantee is implied about whether the course will be available to
     * everyone on the program.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Course
    */
   protected $prop_hasCourse;

   /**
     * Prerequisites for enrolling in the program.
    * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\Course|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\AlignmentObject
    */
   protected $prop_programPrerequisites;

   /**
     * A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this
     * course or program.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential
    */
   protected $prop_educationalCredentialAwarded;

   /**
     * The estimated salary earned while in the program.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution
    */
   protected $prop_trainingSalary;

   /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods
     * on behalf of the provider. A provider may also serve as the seller.
    * @var \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person
    */
   protected $prop_provider;

   /**
     * The number of credits or units awarded by a Course or required to complete an EducationalOccupationalProgram.
    * @var \Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
    */
   protected $prop_numberOfCredits;

   /**
     * The amount of time in a term as defined by the institution. A term is a length of time where students
     * take one or more classes. Semesters and quarters are common units for term.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Quantity\Duration
    */
   protected $prop_termDuration;

   /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
    * @var \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime
    */
   protected $prop_startDate;

   /**
     * The expected salary upon completing the training.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution
    */
   protected $prop_salaryUponCompletion;

   /**
     * The maximum number of students who may be enrolled in the program.
    * @var \Vnetby\Schemaorg\DataTypes\DataInteger
    */
   protected $prop_maximumEnrollment;

   /**
     * The date at which the program stops collecting applications for the next enrollment cycle.
    * @var \Vnetby\Schemaorg\DataTypes\DataDate
    */
   protected $prop_applicationDeadline;

   /**
     * The date at which the program begins collecting applications for the next enrollment cycle.
    * @var \Vnetby\Schemaorg\DataTypes\DataDate
    */
   protected $prop_applicationStartDate;

   /**
     * A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this
     * course or program.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential
    */
   protected $prop_occupationalCredentialAwarded;

   /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
    * @var \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate
    */
   protected $prop_endDate;

   /**
     * Similar to courseMode, the medium or means of delivery of the program as a whole. The value may either be a
     * text label (e.g. "online", "onsite" or "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or a URL reference to a term from
     * a controlled vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous ).
    * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_educationalProgramMode;

   /**
     * A financial aid type or program which students may use to pay for tuition or fees associated with the program.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
    */
   protected $prop_financialAidEligible;

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
     * The number of times terms of study are offered per year. Semesters and quarters are common units for term. For example,
     * if the student can only take 2 semesters for the program in one year, then termsPerYear should be 2.
    * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
    * @return static
    */
   function setTermsPerYear($value)
   {
       return $this->setProp('termsPerYear', $value);
   }

   /**
     * The type of educational or occupational program. For example, classroom, internship, alternance, etc.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setProgramType($value)
   {
       return $this->setProp('programType', $value);
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
     * The number of credits or units a full-time student would be expected to take in 1 term however 'term' is defined
     * by the institution.
    * @param \Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue $value
    * @return static
    */
   function setTypicalCreditsPerTerm($value)
   {
       return $this->setProp('typicalCreditsPerTerm', $value);
   }

   /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a
     * service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc.
     * This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of
     * common types, it can be used in others. In that case, using a second type, such as Product or a subtype
     * of Product, can clarify the nature of the offer. 
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Demand|\Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer $value
    * @return static
    */
   function setOffers($value)
   {
       return $this->setProp('offers', $value);
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
     * The time of day the program normally runs. For example, "evenings".
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setTimeOfDay($value)
   {
       return $this->setProp('timeOfDay', $value);
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
     * Prerequisites for enrolling in the program.
    * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\Course|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\AlignmentObject $value
    * @return static
    */
   function setProgramPrerequisites($value)
   {
       return $this->setProp('programPrerequisites', $value);
   }

   /**
     * A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this
     * course or program.
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential $value
    * @return static
    */
   function setEducationalCredentialAwarded($value)
   {
       return $this->setProp('educationalCredentialAwarded', $value);
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
     * The number of credits or units awarded by a Course or required to complete an EducationalOccupationalProgram.
    * @param \Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue $value
    * @return static
    */
   function setNumberOfCredits($value)
   {
       return $this->setProp('numberOfCredits', $value);
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
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
    * @param \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime $value
    * @return static
    */
   function setStartDate($value)
   {
       return $this->setProp('startDate', $value);
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
     * The maximum number of students who may be enrolled in the program.
    * @param \Vnetby\Schemaorg\DataTypes\DataInteger $value
    * @return static
    */
   function setMaximumEnrollment($value)
   {
       return $this->setProp('maximumEnrollment', $value);
   }

   /**
     * The date at which the program stops collecting applications for the next enrollment cycle.
    * @param \Vnetby\Schemaorg\DataTypes\DataDate $value
    * @return static
    */
   function setApplicationDeadline($value)
   {
       return $this->setProp('applicationDeadline', $value);
   }

   /**
     * The date at which the program begins collecting applications for the next enrollment cycle.
    * @param \Vnetby\Schemaorg\DataTypes\DataDate $value
    * @return static
    */
   function setApplicationStartDate($value)
   {
       return $this->setProp('applicationStartDate', $value);
   }

   /**
     * A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this
     * course or program.
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential $value
    * @return static
    */
   function setOccupationalCredentialAwarded($value)
   {
       return $this->setProp('occupationalCredentialAwarded', $value);
   }

   /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
    * @param \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate $value
    * @return static
    */
   function setEndDate($value)
   {
       return $this->setProp('endDate', $value);
   }

   /**
     * Similar to courseMode, the medium or means of delivery of the program as a whole. The value may either be a
     * text label (e.g. "online", "onsite" or "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or a URL reference to a term from
     * a controlled vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous ).
    * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setEducationalProgramMode($value)
   {
       return $this->setProp('educationalProgramMode', $value);
   }

   /**
     * A financial aid type or program which students may use to pay for tuition or fees associated with the program.
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
    * @return static
    */
   function setFinancialAidEligible($value)
   {
       return $this->setProp('financialAidEligible', $value);
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
     * The number of times terms of study are offered per year. Semesters and quarters are common units for term. For example,
     * if the student can only take 2 semesters for the program in one year, then termsPerYear should be 2.
    * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
    */
   function getTermsPerYear()
   {
       return $this->getProp('termsPerYear');
   }

   /**
     * The type of educational or occupational program. For example, classroom, internship, alternance, etc.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getProgramType()
   {
       return $this->getProp('programType');
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
     * The number of credits or units a full-time student would be expected to take in 1 term however 'term' is defined
     * by the institution.
    * @return \Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|null
    */
   function getTypicalCreditsPerTerm()
   {
       return $this->getProp('typicalCreditsPerTerm');
   }

   /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a
     * service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc.
     * This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of
     * common types, it can be used in others. In that case, using a second type, such as Product or a subtype
     * of Product, can clarify the nature of the offer. 
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Demand|\Vnetby\Schemaorg\Types\Thing\Intangible\Offer\Offer|null
    */
   function getOffers()
   {
       return $this->getProp('offers');
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
     * The time of day the program normally runs. For example, "evenings".
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getTimeOfDay()
   {
       return $this->getProp('timeOfDay');
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
     * Prerequisites for enrolling in the program.
    * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\Course|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\AlignmentObject|null
    */
   function getProgramPrerequisites()
   {
       return $this->getProp('programPrerequisites');
   }

   /**
     * A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this
     * course or program.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|null
    */
   function getEducationalCredentialAwarded()
   {
       return $this->getProp('educationalCredentialAwarded');
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
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods
     * on behalf of the provider. A provider may also serve as the seller.
    * @return \Vnetby\Schemaorg\Types\Thing\Organization\Organization|\Vnetby\Schemaorg\Types\Thing\Person\Person|null
    */
   function getProvider()
   {
       return $this->getProp('provider');
   }

   /**
     * The number of credits or units awarded by a Course or required to complete an EducationalOccupationalProgram.
    * @return \Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|null
    */
   function getNumberOfCredits()
   {
       return $this->getProp('numberOfCredits');
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
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
    * @return \Vnetby\Schemaorg\DataTypes\DataDate|\Vnetby\Schemaorg\DataTypes\DataDateTime|null
    */
   function getStartDate()
   {
       return $this->getProp('startDate');
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
     * The maximum number of students who may be enrolled in the program.
    * @return \Vnetby\Schemaorg\DataTypes\DataInteger|null
    */
   function getMaximumEnrollment()
   {
       return $this->getProp('maximumEnrollment');
   }

   /**
     * The date at which the program stops collecting applications for the next enrollment cycle.
    * @return \Vnetby\Schemaorg\DataTypes\DataDate|null
    */
   function getApplicationDeadline()
   {
       return $this->getProp('applicationDeadline');
   }

   /**
     * The date at which the program begins collecting applications for the next enrollment cycle.
    * @return \Vnetby\Schemaorg\DataTypes\DataDate|null
    */
   function getApplicationStartDate()
   {
       return $this->getProp('applicationStartDate');
   }

   /**
     * A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this
     * course or program.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|null
    */
   function getOccupationalCredentialAwarded()
   {
       return $this->getProp('occupationalCredentialAwarded');
   }

   /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
    * @return \Vnetby\Schemaorg\DataTypes\DataDateTime|\Vnetby\Schemaorg\DataTypes\DataDate|null
    */
   function getEndDate()
   {
       return $this->getProp('endDate');
   }

   /**
     * Similar to courseMode, the medium or means of delivery of the program as a whole. The value may either be a
     * text label (e.g. "online", "onsite" or "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or a URL reference to a term from
     * a controlled vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous ).
    * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getEducationalProgramMode()
   {
       return $this->getProp('educationalProgramMode');
   }

   /**
     * A financial aid type or program which students may use to pay for tuition or fees associated with the program.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
    */
   function getFinancialAidEligible()
   {
       return $this->getProp('financialAidEligible');
   }
}
