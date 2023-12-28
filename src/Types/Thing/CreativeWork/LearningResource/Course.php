<?php

/**
 * @see https://schema.org/Course
 * A description of an educational course which may be offered as distinct instances which take place at different times or take
 * place at different locations, or be offered through different media or modes of study. An educational course is a sequence of
 * one or more educational events and/or creative works which aims to build knowledge, competence or ability of learners.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\LearningResource;

class Course extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\LearningResource\LearningResource
{
    const TYPE = 'Course';

    /**
     * Requirements for taking the Course. May be completion of another [[Course]] or a textual description like "permission of instructor". Requirements may
     * be a pre-requisite competency, referenced using [[AlignmentObject]].
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\AlignmentObject|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Course
     */
    protected $prop_coursePrerequisites;

    /**
     * Indicates (typically several) Syllabus entities that lay out what each section of the overall course will cover.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\LearningResource\Syllabus
     */
    protected $prop_syllabusSections;

    /**
     * A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this
     * course or program.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential
     */
    protected $prop_educationalCredentialAwarded;

    /**
     * The total number of students that have enrolled in the history of the course.
     * @var \Vnetby\Schemaorg\DataTypes\DataInteger
     */
    protected $prop_totalHistoricalEnrollment;

    /**
     * An offering of the course at a specific time and place or through specific media or mode of study or to
     * a specific section of students.
     * @var \Vnetby\Schemaorg\Types\Thing\Event\CourseInstance
     */
    protected $prop_hasCourseInstance;

    /**
     * The number of credits or units awarded by a Course or required to complete an EducationalOccupationalProgram.
     * @var \Vnetby\Schemaorg\DataTypes\DataInteger|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue
     */
    protected $prop_numberOfCredits;

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from
     * the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language
     */
    protected $prop_availableLanguage;

    /**
     * The identifier for the [[Course]] used by the course [[provider]] (e.g. CS101 or 6.001).
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_courseCode;

    /**
     * A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this
     * course or program.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential
     */
    protected $prop_occupationalCredentialAwarded;

    /**
     * A financial aid type or program which students may use to pay for tuition or fees associated with the program.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    protected $prop_financialAidEligible;

    /**
     * Requirements for taking the Course. May be completion of another [[Course]] or a textual description like "permission of instructor". Requirements may
     * be a pre-requisite competency, referenced using [[AlignmentObject]].
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\AlignmentObject|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Course $value
     * @return static
     */
    function setCoursePrerequisites($value)
    {
        return $this->setProp('coursePrerequisites', $value);
    }

    /**
     * Indicates (typically several) Syllabus entities that lay out what each section of the overall course will cover.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\LearningResource\Syllabus $value
     * @return static
     */
    function setSyllabusSections($value)
    {
        return $this->setProp('syllabusSections', $value);
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
     * The total number of students that have enrolled in the history of the course.
     * @param \Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setTotalHistoricalEnrollment($value)
    {
        return $this->setProp('totalHistoricalEnrollment', $value);
    }

    /**
     * An offering of the course at a specific time and place or through specific media or mode of study or to
     * a specific section of students.
     * @param \Vnetby\Schemaorg\Types\Thing\Event\CourseInstance $value
     * @return static
     */
    function setHasCourseInstance($value)
    {
        return $this->setProp('hasCourseInstance', $value);
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
     * A language someone may use with or at the item, service or place. Please use one of the language codes from
     * the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language $value
     * @return static
     */
    function setAvailableLanguage($value)
    {
        return $this->setProp('availableLanguage', $value);
    }

    /**
     * The identifier for the [[Course]] used by the course [[provider]] (e.g. CS101 or 6.001).
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCourseCode($value)
    {
        return $this->setProp('courseCode', $value);
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
     * A financial aid type or program which students may use to pay for tuition or fees associated with the program.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
     * @return static
     */
    function setFinancialAidEligible($value)
    {
        return $this->setProp('financialAidEligible', $value);
    }

    /**
     * Requirements for taking the Course. May be completion of another [[Course]] or a textual description like "permission of instructor". Requirements may
     * be a pre-requisite competency, referenced using [[AlignmentObject]].
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\AlignmentObject|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Course|null
     */
    function getCoursePrerequisites()
    {
        return $this->getProp('coursePrerequisites');
    }

    /**
     * Indicates (typically several) Syllabus entities that lay out what each section of the overall course will cover.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\LearningResource\Syllabus|null
     */
    function getSyllabusSections()
    {
        return $this->getProp('syllabusSections');
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
     * The total number of students that have enrolled in the history of the course.
     * @return \Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getTotalHistoricalEnrollment()
    {
        return $this->getProp('totalHistoricalEnrollment');
    }

    /**
     * An offering of the course at a specific time and place or through specific media or mode of study or to
     * a specific section of students.
     * @return \Vnetby\Schemaorg\Types\Thing\Event\CourseInstance|null
     */
    function getHasCourseInstance()
    {
        return $this->getProp('hasCourseInstance');
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
     * A language someone may use with or at the item, service or place. Please use one of the language codes from
     * the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|null
     */
    function getAvailableLanguage()
    {
        return $this->getProp('availableLanguage');
    }

    /**
     * The identifier for the [[Course]] used by the course [[provider]] (e.g. CS101 or 6.001).
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCourseCode()
    {
        return $this->getProp('courseCode');
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
     * A financial aid type or program which students may use to pay for tuition or fees associated with the program.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
     */
    function getFinancialAidEligible()
    {
        return $this->getProp('financialAidEligible');
    }
}
