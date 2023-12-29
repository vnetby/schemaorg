<?php

/**
 * @see https://schema.org/WebSite
 * A WebSite is a set of related web pages and other items typically served from a single web domain and accessible
 * via URLs.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class WebSite extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'WebSite';

    /**
     * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of,
     * or the linking ISSN (ISSN-L) for, this serial publication.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $issn;

    /**
     * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of,
     * or the linking ISSN (ISSN-L) for, this serial publication.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setIssn($value)
    {
        return $this->setProp('issn', $value);
    }

    /**
     * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of,
     * or the linking ISSN (ISSN-L) for, this serial publication.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getIssn()
    {
        return $this->getProp('issn');
    }
}
