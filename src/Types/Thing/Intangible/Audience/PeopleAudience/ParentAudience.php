<?php

/**
 * @see https://schema.org/ParentAudience
 * A set of characteristics describing parents, who can be interested in viewing some content.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Audience\PeopleAudience;

class ParentAudience extends \Vnetby\Schemaorg\Types\Thing\Intangible\Audience\PeopleAudience\PeopleAudience
{
    const TYPE = 'ParentAudience';

    /**
     * Minimal age of the child.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $childMinAge;

    /**
     * Maximal age of the child.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $childMaxAge;

    /**
     * Minimal age of the child.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setChildMinAge($value)
    {
        return $this->setProp('childMinAge', $value);
    }

    /**
     * Maximal age of the child.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setChildMaxAge($value)
    {
        return $this->setProp('childMaxAge', $value);
    }

    /**
     * Minimal age of the child.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getChildMinAge()
    {
        return $this->getProp('childMinAge');
    }

    /**
     * Maximal age of the child.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getChildMaxAge()
    {
        return $this->getProp('childMaxAge');
    }
}
