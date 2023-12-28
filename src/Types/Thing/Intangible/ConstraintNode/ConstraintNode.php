<?php

/**
 * @see https://schema.org/ConstraintNode
 * The ConstraintNode type is provided to support usecases in which a node in a structured data graph is described with properties
 * which appear to describe a single entity, but are being used in a situation where they serve a more abstract purpose.
 * A [[ConstraintNode]] can be described using [[constraintProperty]] and [[numConstraints]]. These constraint properties can serve a variety of purposes, and their values
 * may sometimes be understood to indicate sets of possible values rather than single, exact and specific values.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\ConstraintNode;

class ConstraintNode extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'ConstraintNode';

    /**
     * Indicates the number of constraints property values defined for a particular [[ConstraintNode]] such as [[StatisticalVariable]]. This helps applications understand if they
     * have access to a sufficiently complete description of a [[StatisticalVariable]] or other construct that is defined using properties on template-style nodes.
     * @var \Vnetby\Schemaorg\DataTypes\DataInteger
     */
    protected $prop_numConstraints;

    /**
     * Indicates a property used as a constraint. For example, in the definition of a [[StatisticalVariable]]. The value is a property, either
     * from within Schema.org or from other compatible (e.g. RDF) systems such as DataCommons.org or Wikidata.org. 
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Property|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_constraintProperty;

    /**
     * Indicates the number of constraints property values defined for a particular [[ConstraintNode]] such as [[StatisticalVariable]]. This helps applications understand if they
     * have access to a sufficiently complete description of a [[StatisticalVariable]] or other construct that is defined using properties on template-style nodes.
     * @param \Vnetby\Schemaorg\DataTypes\DataInteger $value
     * @return static
     */
    function setNumConstraints($value)
    {
        return $this->setProp('numConstraints', $value);
    }

    /**
     * Indicates a property used as a constraint. For example, in the definition of a [[StatisticalVariable]]. The value is a property, either
     * from within Schema.org or from other compatible (e.g. RDF) systems such as DataCommons.org or Wikidata.org. 
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Property|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setConstraintProperty($value)
    {
        return $this->setProp('constraintProperty', $value);
    }

    /**
     * Indicates the number of constraints property values defined for a particular [[ConstraintNode]] such as [[StatisticalVariable]]. This helps applications understand if they
     * have access to a sufficiently complete description of a [[StatisticalVariable]] or other construct that is defined using properties on template-style nodes.
     * @return \Vnetby\Schemaorg\DataTypes\DataInteger|null
     */
    function getNumConstraints()
    {
        return $this->getProp('numConstraints');
    }

    /**
     * Indicates a property used as a constraint. For example, in the definition of a [[StatisticalVariable]]. The value is a property, either
     * from within Schema.org or from other compatible (e.g. RDF) systems such as DataCommons.org or Wikidata.org. 
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Property|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getConstraintProperty()
    {
        return $this->getProp('constraintProperty');
    }
}
