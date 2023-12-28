<?php

/**
 * @see https://schema.org/MedicalScholarlyArticle
 * A scholarly article in the medical domain.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\ScholarlyArticle;

class MedicalScholarlyArticle extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\Article\ScholarlyArticle\ScholarlyArticle
{
    const TYPE = 'MedicalScholarlyArticle';

    /**
     * The type of the medical article, taken from the US NLM MeSH publication type catalog. See also [MeSH documentation](http://www.nlm.nih.gov/mesh/pubtypes.html).
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_publicationType;

    /**
     * The type of the medical article, taken from the US NLM MeSH publication type catalog. See also [MeSH documentation](http://www.nlm.nih.gov/mesh/pubtypes.html).
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPublicationType($value)
    {
        return $this->setProp('publicationType', $value);
    }

    /**
     * The type of the medical article, taken from the US NLM MeSH publication type catalog. See also [MeSH documentation](http://www.nlm.nih.gov/mesh/pubtypes.html).
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPublicationType()
    {
        return $this->getProp('publicationType');
    }
}
