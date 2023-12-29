<?php

/**
 * @see https://schema.org/Class
 * A class, also often called a 'Type'; equivalent to rdfs:Class.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class Class extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'Class';

    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Property|\Vnetby\Schemaorg\Types\Thing\Intangible\Class|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Enumeration
     */
    public $supersededBy;

    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Property|\Vnetby\Schemaorg\Types\Thing\Intangible\Class|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Enumeration $value
     * @return static
     */
    function setSupersededBy($value)
    {
        return $this->setProp('supersededBy', $value);
    }

    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Property|\Vnetby\Schemaorg\Types\Thing\Intangible\Class|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Enumeration|null
     */
    function getSupersededBy()
    {
        return $this->getProp('supersededBy');
    }
}
