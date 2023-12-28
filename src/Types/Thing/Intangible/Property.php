<?php

/**
 * @see https://schema.org/Property
 * A property, used to indicate attributes and relationships of some Thing; equivalent to rdf:Property.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class Property extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'Property';

    /**
     * Relates a property to a property that is its inverse. Inverse properties relate the same pairs of items to each other,
     * but in reversed direction. For example, the 'alumni' and 'alumniOf' properties are inverseOf each other. Some properties don't have explicit inverses;
     * in these situations RDFa and JSON-LD syntax for reverse properties can be used.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Property
     */
    protected $prop_inverseOf;

    /**
     * Relates a property to a class that is (one of) the type(s) the property is expected to be used on.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Class
     */
    protected $prop_domainIncludes;

    /**
     * Relates a property to a class that constitutes (one of) the expected type(s) for values of the property.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Class
     */
    protected $prop_rangeIncludes;

    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Property|\Vnetby\Schemaorg\Types\Thing\Intangible\Class|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\Enumeration
     */
    protected $prop_supersededBy;

    /**
     * Relates a property to a property that is its inverse. Inverse properties relate the same pairs of items to each other,
     * but in reversed direction. For example, the 'alumni' and 'alumniOf' properties are inverseOf each other. Some properties don't have explicit inverses;
     * in these situations RDFa and JSON-LD syntax for reverse properties can be used.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Property $value
     * @return static
     */
    function setInverseOf($value)
    {
        return $this->setProp('inverseOf', $value);
    }

    /**
     * Relates a property to a class that is (one of) the type(s) the property is expected to be used on.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Class $value
     * @return static
     */
    function setDomainIncludes($value)
    {
        return $this->setProp('domainIncludes', $value);
    }

    /**
     * Relates a property to a class that constitutes (one of) the expected type(s) for values of the property.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Class $value
     * @return static
     */
    function setRangeIncludes($value)
    {
        return $this->setProp('rangeIncludes', $value);
    }

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
     * Relates a property to a property that is its inverse. Inverse properties relate the same pairs of items to each other,
     * but in reversed direction. For example, the 'alumni' and 'alumniOf' properties are inverseOf each other. Some properties don't have explicit inverses;
     * in these situations RDFa and JSON-LD syntax for reverse properties can be used.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Property|null
     */
    function getInverseOf()
    {
        return $this->getProp('inverseOf');
    }

    /**
     * Relates a property to a class that is (one of) the type(s) the property is expected to be used on.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Class|null
     */
    function getDomainIncludes()
    {
        return $this->getProp('domainIncludes');
    }

    /**
     * Relates a property to a class that constitutes (one of) the expected type(s) for values of the property.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Class|null
     */
    function getRangeIncludes()
    {
        return $this->getProp('rangeIncludes');
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
