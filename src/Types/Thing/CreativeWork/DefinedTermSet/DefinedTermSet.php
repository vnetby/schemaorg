<?php

/**
 * @see https://schema.org/DefinedTermSet
 * A set of defined terms, for example a set of categories or a classification scheme, a glossary, dictionary or enumeration.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\DefinedTermSet;

class DefinedTermSet extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'DefinedTermSet';

    /**
     * A Defined Term contained in this term set.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    public $hasDefinedTerm;

    /**
     * A Defined Term contained in this term set.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
     * @return static
     */
    function setHasDefinedTerm($value)
    {
        return $this->setProp('hasDefinedTerm', $value);
    }

    /**
     * A Defined Term contained in this term set.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
     */
    function getHasDefinedTerm()
    {
        return $this->getProp('hasDefinedTerm');
    }
}
