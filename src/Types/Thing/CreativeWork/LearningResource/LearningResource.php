<?php

/**
 * @see https://schema.org/LearningResource
 * The LearningResource type can be used to indicate [[CreativeWork]]s (whether physical or digital) that have a particular and explicit orientation towards
 * learning, education, skill acquisition, and other educational purposes. [[LearningResource]] is expected to be used as an addition to a primary type
 * such as [[Book]], [[VideoObject]], [[Product]] etc. [[EducationEvent]] serves a similar purpose for event-like things (e.g. a [[Trip]]). A [[LearningResource]] may be
 * created as a result of an [[EducationEvent]], for example by recording one.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\LearningResource;

class LearningResource extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'LearningResource';

    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced',
     * and formal sets of level indicators.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $educationalLevel;

    /**
     * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $learningResourceType;

    /**
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $assesses;

    /**
     * An alignment to an established educational framework. This property should not be used where the nature of the alignment can be
     * described using a simple property, for example to express that a resource [[teaches]] or [[assesses]] a competency.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\AlignmentObject
     */
    public $educationalAlignment;

    /**
     * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $educationalUse;

    /**
     * Knowledge, skill, ability or personal attribute that must be demonstrated by a person or other entity in order to do something
     * such as earn an Educational Occupational Credential or understand a LearningResource.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $competencyRequired;

    /**
     * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $teaches;

    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced',
     * and formal sets of level indicators.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setEducationalLevel($value)
    {
        return $this->setProp('educationalLevel', $value);
    }

    /**
     * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setLearningResourceType($value)
    {
        return $this->setProp('learningResourceType', $value);
    }

    /**
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAssesses($value)
    {
        return $this->setProp('assesses', $value);
    }

    /**
     * An alignment to an established educational framework. This property should not be used where the nature of the alignment can be
     * described using a simple property, for example to express that a resource [[teaches]] or [[assesses]] a competency.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\AlignmentObject $value
     * @return static
     */
    function setEducationalAlignment($value)
    {
        return $this->setProp('educationalAlignment', $value);
    }

    /**
     * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setEducationalUse($value)
    {
        return $this->setProp('educationalUse', $value);
    }

    /**
     * Knowledge, skill, ability or personal attribute that must be demonstrated by a person or other entity in order to do something
     * such as earn an Educational Occupational Credential or understand a LearningResource.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setCompetencyRequired($value)
    {
        return $this->setProp('competencyRequired', $value);
    }

    /**
     * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTeaches($value)
    {
        return $this->setProp('teaches', $value);
    }

    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced',
     * and formal sets of level indicators.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getEducationalLevel()
    {
        return $this->getProp('educationalLevel');
    }

    /**
     * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getLearningResourceType()
    {
        return $this->getProp('learningResourceType');
    }

    /**
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAssesses()
    {
        return $this->getProp('assesses');
    }

    /**
     * An alignment to an established educational framework. This property should not be used where the nature of the alignment can be
     * described using a simple property, for example to express that a resource [[teaches]] or [[assesses]] a competency.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\AlignmentObject|null
     */
    function getEducationalAlignment()
    {
        return $this->getProp('educationalAlignment');
    }

    /**
     * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getEducationalUse()
    {
        return $this->getProp('educationalUse');
    }

    /**
     * Knowledge, skill, ability or personal attribute that must be demonstrated by a person or other entity in order to do something
     * such as earn an Educational Occupational Credential or understand a LearningResource.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getCompetencyRequired()
    {
        return $this->getProp('competencyRequired');
    }

    /**
     * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTeaches()
    {
        return $this->getProp('teaches');
    }
}
