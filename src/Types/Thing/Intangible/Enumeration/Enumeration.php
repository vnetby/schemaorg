<?php

/**
 * @see https://schema.org/Enumeration
 * Lists or enumerations—for example, a list of cuisines or music genres, etc.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration;

class Enumeration extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'Enumeration';

    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Enumeration|\Vnetby\Schemaorg\Types\Thing\Intangible\Class|\Vnetby\Schemaorg\Types\Thing\Intangible\Property
     */
    public $supersededBy;

    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Enumeration|\Vnetby\Schemaorg\Types\Thing\Intangible\Class|\Vnetby\Schemaorg\Types\Thing\Intangible\Property $value
     * @return static
     */
    function setSupersededBy($value)
    {
        return $this->setProp('supersededBy', $value);
    }

    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Enumeration|\Vnetby\Schemaorg\Types\Thing\Intangible\Class|\Vnetby\Schemaorg\Types\Thing\Intangible\Property|null
     */
    function getSupersededBy()
    {
        return $this->getProp('supersededBy');
    }
}
