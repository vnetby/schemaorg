<?php

/**
 * @see https://schema.org/EducationEvent
 * Event type: Education event.
 */

namespace Vnetby\Schemaorg\Types\Thing\Event;

class EducationEvent extends \Vnetby\Schemaorg\Types\Thing\Event\Event
{
    const TYPE = 'EducationEvent';

    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced',
     * and formal sets of level indicators.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $educationalLevel;

    /**
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $assesses;

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
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAssesses($value)
    {
        return $this->setProp('assesses', $value);
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
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAssesses()
    {
        return $this->getProp('assesses');
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
