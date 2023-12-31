<?php

/**
 * @see https://schema.org/DefinedTerm
 * A word, name, acronym, phrase, etc. with a formal definition. Often used in the context of category or subject classification, glossaries
 * or dictionaries, product or creative work types, etc. Use the name property for the term being defined, use termCode if the
 * term has an alpha-numeric code allocated, use description to provide the definition of the term.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm;

class DefinedTerm extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'DefinedTerm';

    /**
     * A [[DefinedTermSet]] that contains this term.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\DefinedTermSet\DefinedTermSet
     */
    public $inDefinedTermSet;

    /**
     * A code that identifies this [[DefinedTerm]] within a [[DefinedTermSet]].
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $termCode;

    /**
     * A [[DefinedTermSet]] that contains this term.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\DefinedTermSet\DefinedTermSet $value
     * @return static
     */
    function setInDefinedTermSet($value)
    {
        return $this->setProp('inDefinedTermSet', $value);
    }

    /**
     * A code that identifies this [[DefinedTerm]] within a [[DefinedTermSet]].
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTermCode($value)
    {
        return $this->setProp('termCode', $value);
    }

    /**
     * A [[DefinedTermSet]] that contains this term.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\CreativeWork\DefinedTermSet\DefinedTermSet|null
     */
    function getInDefinedTermSet()
    {
        return $this->getProp('inDefinedTermSet');
    }

    /**
     * A code that identifies this [[DefinedTerm]] within a [[DefinedTermSet]].
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTermCode()
    {
        return $this->getProp('termCode');
    }
}
