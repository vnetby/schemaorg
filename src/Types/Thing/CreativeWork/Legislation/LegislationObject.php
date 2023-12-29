<?php

/**
 * @see https://schema.org/LegislationObject
 * A specific object or file containing a Legislation. Note that the same Legislation can be published in multiple files. For example,
 * a digitally signed PDF, a plain PDF and an HTML version.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\Legislation;

class LegislationObject extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\Legislation\Legislation
{
    const TYPE = 'LegislationObject';

    /**
     * The legal value of this legislation file. The same legislation can be written in multiple files with different legal values. Typically
     * a digitally signed PDF have a "stronger" legal value than the HTML file of the same act.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\LegalValueLevel\LegalValueLevel
     */
    public $legislationLegalValue;

    /**
     * The legal value of this legislation file. The same legislation can be written in multiple files with different legal values. Typically
     * a digitally signed PDF have a "stronger" legal value than the HTML file of the same act.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\LegalValueLevel\LegalValueLevel $value
     * @return static
     */
    function setLegislationLegalValue($value)
    {
        return $this->setProp('legislationLegalValue', $value);
    }

    /**
     * The legal value of this legislation file. The same legislation can be written in multiple files with different legal values. Typically
     * a digitally signed PDF have a "stronger" legal value than the HTML file of the same act.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\LegalValueLevel\LegalValueLevel|null
     */
    function getLegislationLegalValue()
    {
        return $this->getProp('legislationLegalValue');
    }
}
