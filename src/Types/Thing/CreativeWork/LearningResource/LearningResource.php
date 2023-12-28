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
     * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    protected $prop_teaches;

    /**
     * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    protected $prop_educationalUse;

    /**
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    protected $prop_assesses;

    /**
     * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    protected $prop_learningResourceType;

    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced',
     * and formal sets of level indicators.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    protected $prop_educationalLevel;

    /**
     * An alignment to an established educational framework. This property should not be used where the nature of the alignment can be
     * described using a simple property, for example to express that a resource [[teaches]] or [[assesses]] a competency.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\AlignmentObject
     */
    protected $prop_educationalAlignment;

    /**
     * Knowledge, skill, ability or personal attribute that must be demonstrated by a person or other entity in order to do something
     * such as earn an Educational Occupational Credential or understand a LearningResource.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_competencyRequired;

    /**
     * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
     * @return static
     */
    function setTeaches($value)
    {
        return $this->setProp('teaches', $value);
    }

    /**
     * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
     * @return static
     */
    function setEducationalUse($value)
    {
        return $this->setProp('educationalUse', $value);
    }

    /**
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
     * @return static
     */
    function setAssesses($value)
    {
        return $this->setProp('assesses', $value);
    }

    /**
     * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
     * @return static
     */
    function setLearningResourceType($value)
    {
        return $this->setProp('learningResourceType', $value);
    }

    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced',
     * and formal sets of level indicators.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
     * @return static
     */
    function setEducationalLevel($value)
    {
        return $this->setProp('educationalLevel', $value);
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
     * Knowledge, skill, ability or personal attribute that must be demonstrated by a person or other entity in order to do something
     * such as earn an Educational Occupational Credential or understand a LearningResource.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setCompetencyRequired($value)
    {
        return $this->setProp('competencyRequired', $value);
    }

    /**
     * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
     */
    function getTeaches()
    {
        return $this->getProp('teaches');
    }

    /**
     * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
     */
    function getEducationalUse()
    {
        return $this->getProp('educationalUse');
    }

    /**
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
     */
    function getAssesses()
    {
        return $this->getProp('assesses');
    }

    /**
     * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
     */
    function getLearningResourceType()
    {
        return $this->getProp('learningResourceType');
    }

    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced',
     * and formal sets of level indicators.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
     */
    function getEducationalLevel()
    {
        return $this->getProp('educationalLevel');
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
     * Knowledge, skill, ability or personal attribute that must be demonstrated by a person or other entity in order to do something
     * such as earn an Educational Occupational Credential or understand a LearningResource.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getCompetencyRequired()
    {
        return $this->getProp('competencyRequired');
    }
}
