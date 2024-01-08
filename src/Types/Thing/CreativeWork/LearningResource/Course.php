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
     * A language someone may use with or at the item, service or place. Please use one of the language codes from
     * the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language
     */
    public $availableLanguage;

    /**
     * A financial aid type or program which students may use to pay for tuition or fees associated with the program.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $financialAidEligible;

    /**
     * A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this
     * course or program.
     * @var string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $educationalCredentialAwarded;

    /**
     * The number of credits or units awarded by a Course or required to complete an EducationalOccupationalProgram.
     * @var string|int|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $numberOfCredits;

    /**
     * An offering of the course at a specific time and place or through specific media or mode of study or to
     * a specific section of students.
     * @var \Vnetby\Schemaorg\Types\Thing\Event\CourseInstance
     */
    public $hasCourseInstance;

    /**
     * Requirements for taking the Course. May be completion of another [[Course]] or a textual description like "permission of instructor". Requirements may
     * be a pre-requisite competency, referenced using [[AlignmentObject]].
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\AlignmentObject|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Course
     */
    public $coursePrerequisites;

    /**
     * A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this
     * course or program.
     * @var string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $occupationalCredentialAwarded;

    /**
     * The total number of students that have enrolled in the history of the course.
     * @var string|int|\Vnetby\Schemaorg\DataTypes\DataInteger
     */
    public $totalHistoricalEnrollment;

    /**
     * Indicates (typically several) Syllabus entities that lay out what each section of the overall course will cover.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\LearningResource\Syllabus
     */
    public $syllabusSections;

    /**
     * The identifier for the [[Course]] used by the course [[provider]] (e.g. CS101 or 6.001).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $courseCode;

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from
     * the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language $value
     * @return static
     */
    function setAvailableLanguage($value)
    {
        return $this->setProp('availableLanguage', $value);
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
     * The number of credits or units awarded by a Course or required to complete an EducationalOccupationalProgram.
     * @param string|int|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\StructuredValue|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setNumberOfCredits($value)
    {
        return $this->setProp('numberOfCredits', $value);
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
     * Requirements for taking the Course. May be completion of another [[Course]] or a textual description like "permission of instructor". Requirements may
     * be a pre-requisite competency, referenced using [[AlignmentObject]].
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\AlignmentObject|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Course $value
     * @return static
     */
    function setCoursePrerequisites($value)
    {
        return $this->setProp('coursePrerequisites', $value);
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
     * The total number of students that have enrolled in the history of the course.
     * @param string|int|\Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setTotalHistoricalEnrollment($value)
    {
        return $this->setProp('totalHistoricalEnrollment', $value);
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
     * The identifier for the [[Course]] used by the course [[provider]] (e.g. CS101 or 6.001).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCourseCode($value)
    {
        return $this->setProp('courseCode', $value);
    }

    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from
     * the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Language|null
     */
    function getAvailableLanguage()
    {
        return $this->getProp('availableLanguage');
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
     * A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this
     * course or program.
     * @return string|\Vnetby\Schemaorg\Types\Thing\CreativeWork\EducationalOccupationalCredential|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getEducationalCredentialAwarded()
    {
        return $this->getProp('educationalCredentialAwarded');
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
     * An offering of the course at a specific time and place or through specific media or mode of study or to
     * a specific section of students.
     * @return \Vnetby\Schemaorg\Types\Thing\Event\CourseInstance|null
     */
    function getHasCourseInstance()
    {
        return $this->getProp('hasCourseInstance');
    }

    /**
     * Requirements for taking the Course. May be completion of another [[Course]] or a textual description like "permission of instructor". Requirements may
     * be a pre-requisite competency, referenced using [[AlignmentObject]].
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\AlignmentObject|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\CreativeWork\Course|null
     */
    function getCoursePrerequisites()
    {
        return $this->getProp('coursePrerequisites');
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
     * The total number of students that have enrolled in the history of the course.
     * @return string|int|\Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getTotalHistoricalEnrollment()
    {
        return $this->getProp('totalHistoricalEnrollment');
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
     * The identifier for the [[Course]] used by the course [[provider]] (e.g. CS101 or 6.001).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCourseCode()
    {
        return $this->getProp('courseCode');
    }
}
