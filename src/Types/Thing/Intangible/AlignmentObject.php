<?php

/**
 * @see https://schema.org/AlignmentObject
 * An intangible item that describes an alignment between a learning resource and a node in an educational framework. Should not be
 * used where the nature of the alignment can be described using a simple property, for example to express that a resource
 * [[teaches]] or [[assesses]] a competency.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class AlignmentObject extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'AlignmentObject';

    /**
     * The name of a node in an established educational framework.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_targetName;

    /**
     * The framework to which the resource being described is aligned.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_educationalFramework;

    /**
     * The description of a node in an established educational framework.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_targetDescription;

    /**
     * The URL of a node in an established educational framework.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_targetUrl;

    /**
     * A category of alignment between the learning resource and the framework node. Recommended values include: 'requires', 'textComplexity', 'readingLevel', and 'educationalSubject'.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_alignmentType;

    /**
     * The name of a node in an established educational framework.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTargetName($value)
    {
        return $this->setProp('targetName', $value);
    }

    /**
     * The framework to which the resource being described is aligned.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setEducationalFramework($value)
    {
        return $this->setProp('educationalFramework', $value);
    }

    /**
     * The description of a node in an established educational framework.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTargetDescription($value)
    {
        return $this->setProp('targetDescription', $value);
    }

    /**
     * The URL of a node in an established educational framework.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setTargetUrl($value)
    {
        return $this->setProp('targetUrl', $value);
    }

    /**
     * A category of alignment between the learning resource and the framework node. Recommended values include: 'requires', 'textComplexity', 'readingLevel', and 'educationalSubject'.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAlignmentType($value)
    {
        return $this->setProp('alignmentType', $value);
    }

    /**
     * The name of a node in an established educational framework.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTargetName()
    {
        return $this->getProp('targetName');
    }

    /**
     * The framework to which the resource being described is aligned.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getEducationalFramework()
    {
        return $this->getProp('educationalFramework');
    }

    /**
     * The description of a node in an established educational framework.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTargetDescription()
    {
        return $this->getProp('targetDescription');
    }

    /**
     * The URL of a node in an established educational framework.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getTargetUrl()
    {
        return $this->getProp('targetUrl');
    }

    /**
     * A category of alignment between the learning resource and the framework node. Recommended values include: 'requires', 'textComplexity', 'readingLevel', and 'educationalSubject'.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAlignmentType()
    {
        return $this->getProp('alignmentType');
    }
}
