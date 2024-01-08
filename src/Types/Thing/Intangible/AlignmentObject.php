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
     * The framework to which the resource being described is aligned.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $educationalFramework;

    /**
     * The description of a node in an established educational framework.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $targetDescription;

    /**
     * A category of alignment between the learning resource and the framework node. Recommended values include: 'requires', 'textComplexity', 'readingLevel', and 'educationalSubject'.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $alignmentType;

    /**
     * The URL of a node in an established educational framework.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $targetUrl;

    /**
     * The name of a node in an established educational framework.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $targetName;

    /**
     * The framework to which the resource being described is aligned.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setEducationalFramework($value)
    {
        return $this->setProp('educationalFramework', $value);
    }

    /**
     * The description of a node in an established educational framework.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTargetDescription($value)
    {
        return $this->setProp('targetDescription', $value);
    }

    /**
     * A category of alignment between the learning resource and the framework node. Recommended values include: 'requires', 'textComplexity', 'readingLevel', and 'educationalSubject'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAlignmentType($value)
    {
        return $this->setProp('alignmentType', $value);
    }

    /**
     * The URL of a node in an established educational framework.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setTargetUrl($value)
    {
        return $this->setProp('targetUrl', $value);
    }

    /**
     * The name of a node in an established educational framework.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTargetName($value)
    {
        return $this->setProp('targetName', $value);
    }

    /**
     * The framework to which the resource being described is aligned.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getEducationalFramework()
    {
        return $this->getProp('educationalFramework');
    }

    /**
     * The description of a node in an established educational framework.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTargetDescription()
    {
        return $this->getProp('targetDescription');
    }

    /**
     * A category of alignment between the learning resource and the framework node. Recommended values include: 'requires', 'textComplexity', 'readingLevel', and 'educationalSubject'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAlignmentType()
    {
        return $this->getProp('alignmentType');
    }

    /**
     * The URL of a node in an established educational framework.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getTargetUrl()
    {
        return $this->getProp('targetUrl');
    }

    /**
     * The name of a node in an established educational framework.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTargetName()
    {
        return $this->getProp('targetName');
    }
}
