<?php

/**
 * @see https://schema.org/Taxon
 * A set of organisms asserted to represent a natural cohesive biological unit.
 */

namespace Vnetby\Schemaorg\Types\Thing;

class Taxon extends \Vnetby\Schemaorg\Types\Thing\Thing
{
    const TYPE = 'Taxon';

    /**
     * A Defined Term contained in this term set.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    public $hasDefinedTerm;

    /**
     * Closest child taxa of the taxon in question.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Taxon|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $childTaxon;

    /**
     * Closest parent taxon of the taxon in question.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Taxon|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $parentTaxon;

    /**
     * The taxonomic rank of this taxon given preferably as a URI from a controlled vocabulary – typically the ranks from TDWG
     * TaxonRank ontology or equivalent Wikidata URIs.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue
     */
    public $taxonRank;

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
     * Closest child taxa of the taxon in question.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Taxon|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setChildTaxon($value)
    {
        return $this->setProp('childTaxon', $value);
    }

    /**
     * Closest parent taxon of the taxon in question.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Taxon|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setParentTaxon($value)
    {
        return $this->setProp('parentTaxon', $value);
    }

    /**
     * The taxonomic rank of this taxon given preferably as a URI from a controlled vocabulary – typically the ranks from TDWG
     * TaxonRank ontology or equivalent Wikidata URIs.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue $value
     * @return static
     */
    function setTaxonRank($value)
    {
        return $this->setProp('taxonRank', $value);
    }

    /**
     * A Defined Term contained in this term set.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
     */
    function getHasDefinedTerm()
    {
        return $this->getProp('hasDefinedTerm');
    }

    /**
     * Closest child taxa of the taxon in question.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Taxon|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getChildTaxon()
    {
        return $this->getProp('childTaxon');
    }

    /**
     * Closest parent taxon of the taxon in question.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Taxon|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getParentTaxon()
    {
        return $this->getProp('parentTaxon');
    }

    /**
     * The taxonomic rank of this taxon given preferably as a URI from a controlled vocabulary – typically the ranks from TDWG
     * TaxonRank ontology or equivalent Wikidata URIs.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|null
     */
    function getTaxonRank()
    {
        return $this->getProp('taxonRank');
    }
}
