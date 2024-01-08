<?php

/**
 * @see https://schema.org/ChemicalSubstance
 * A chemical substance is 'a portion of matter of constant composition, composed of molecular entities of the same type or of
 * different types' (source: [ChEBI:59999](https://www.ebi.ac.uk/chebi/searchId.do?chebiId=59999)).
 */

namespace Vnetby\Schemaorg\Types\Thing\BioChemEntity;

class ChemicalSubstance extends \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity
{
    const TYPE = 'ChemicalSubstance';

    /**
     * A role played by the BioChemEntity within a chemical context.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    public $chemicalRole;

    /**
     * Intended use of the BioChemEntity by humans.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    public $potentialUse;

    /**
     * The chemical composition describes the identity and relative ratio of the chemical elements that make up the substance.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $chemicalComposition;

    /**
     * A role played by the BioChemEntity within a chemical context.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
     * @return static
     */
    function setChemicalRole($value)
    {
        return $this->setProp('chemicalRole', $value);
    }

    /**
     * Intended use of the BioChemEntity by humans.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
     * @return static
     */
    function setPotentialUse($value)
    {
        return $this->setProp('potentialUse', $value);
    }

    /**
     * The chemical composition describes the identity and relative ratio of the chemical elements that make up the substance.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setChemicalComposition($value)
    {
        return $this->setProp('chemicalComposition', $value);
    }

    /**
     * A role played by the BioChemEntity within a chemical context.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
     */
    function getChemicalRole()
    {
        return $this->getProp('chemicalRole');
    }

    /**
     * Intended use of the BioChemEntity by humans.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
     */
    function getPotentialUse()
    {
        return $this->getProp('potentialUse');
    }

    /**
     * The chemical composition describes the identity and relative ratio of the chemical elements that make up the substance.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getChemicalComposition()
    {
        return $this->getProp('chemicalComposition');
    }
}
