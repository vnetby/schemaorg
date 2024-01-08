<?php

/**
 * @see https://schema.org/MolecularEntity
 * Any constitutionally or isotopically distinct atom, molecule, ion, ion pair, radical, radical ion, complex, conformer etc., identifiable as a separately distinguishable
 * entity.
 */

namespace Vnetby\Schemaorg\Types\Thing\BioChemEntity;

class MolecularEntity extends \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity
{
    const TYPE = 'MolecularEntity';

    /**
     * InChIKey is a hashed version of the full InChI (using the SHA-256 algorithm).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $inChIKey;

    /**
     * A role played by the BioChemEntity within a chemical context.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    public $chemicalRole;

    /**
     * This is the molecular weight of the entity being described, not of the parent. Units should be included in the form
     * '&lt;Number&gt; &lt;unit&gt;', for example '12 amu' or as '&lt;QuantitativeValue&gt;.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $molecularWeight;

    /**
     * The empirical formula is the simplest whole number ratio of all the atoms in a molecule.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $molecularFormula;

    /**
     * Non-proprietary identifier for molecular entity that can be used in printed and electronic data sources thus enabling easier linking of diverse
     * data compilations.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $inChI;

    /**
     * A specification in form of a line notation for describing the structure of chemical species using short ASCII strings. Double bond
     * stereochemistry \ indicators may need to be escaped in the string in formats where the backslash is an escape character.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $smiles;

    /**
     * Intended use of the BioChemEntity by humans.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    public $potentialUse;

    /**
     * The monoisotopic mass is the sum of the masses of the atoms in a molecule using the unbound, ground-state, rest mass
     * of the principal (most abundant) isotope for each element instead of the isotopic average mass. Please include the units in the
     * form '&lt;Number&gt; &lt;unit&gt;', for example '770.230488 g/mol' or as '&lt;QuantitativeValue&gt;.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $monoisotopicMolecularWeight;

    /**
     * Systematic method of naming chemical compounds as recommended by the International Union of Pure and Applied Chemistry (IUPAC).
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $iupacName;

    /**
     * InChIKey is a hashed version of the full InChI (using the SHA-256 algorithm).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setInChIKey($value)
    {
        return $this->setProp('inChIKey', $value);
    }

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
     * This is the molecular weight of the entity being described, not of the parent. Units should be included in the form
     * '&lt;Number&gt; &lt;unit&gt;', for example '12 amu' or as '&lt;QuantitativeValue&gt;.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setMolecularWeight($value)
    {
        return $this->setProp('molecularWeight', $value);
    }

    /**
     * The empirical formula is the simplest whole number ratio of all the atoms in a molecule.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setMolecularFormula($value)
    {
        return $this->setProp('molecularFormula', $value);
    }

    /**
     * Non-proprietary identifier for molecular entity that can be used in printed and electronic data sources thus enabling easier linking of diverse
     * data compilations.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setInChI($value)
    {
        return $this->setProp('inChI', $value);
    }

    /**
     * A specification in form of a line notation for describing the structure of chemical species using short ASCII strings. Double bond
     * stereochemistry \ indicators may need to be escaped in the string in formats where the backslash is an escape character.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSmiles($value)
    {
        return $this->setProp('smiles', $value);
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
     * The monoisotopic mass is the sum of the masses of the atoms in a molecule using the unbound, ground-state, rest mass
     * of the principal (most abundant) isotope for each element instead of the isotopic average mass. Please include the units in the
     * form '&lt;Number&gt; &lt;unit&gt;', for example '770.230488 g/mol' or as '&lt;QuantitativeValue&gt;.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setMonoisotopicMolecularWeight($value)
    {
        return $this->setProp('monoisotopicMolecularWeight', $value);
    }

    /**
     * Systematic method of naming chemical compounds as recommended by the International Union of Pure and Applied Chemistry (IUPAC).
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setIupacName($value)
    {
        return $this->setProp('iupacName', $value);
    }

    /**
     * InChIKey is a hashed version of the full InChI (using the SHA-256 algorithm).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getInChIKey()
    {
        return $this->getProp('inChIKey');
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
     * This is the molecular weight of the entity being described, not of the parent. Units should be included in the form
     * '&lt;Number&gt; &lt;unit&gt;', for example '12 amu' or as '&lt;QuantitativeValue&gt;.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getMolecularWeight()
    {
        return $this->getProp('molecularWeight');
    }

    /**
     * The empirical formula is the simplest whole number ratio of all the atoms in a molecule.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getMolecularFormula()
    {
        return $this->getProp('molecularFormula');
    }

    /**
     * Non-proprietary identifier for molecular entity that can be used in printed and electronic data sources thus enabling easier linking of diverse
     * data compilations.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getInChI()
    {
        return $this->getProp('inChI');
    }

    /**
     * A specification in form of a line notation for describing the structure of chemical species using short ASCII strings. Double bond
     * stereochemistry \ indicators may need to be escaped in the string in formats where the backslash is an escape character.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSmiles()
    {
        return $this->getProp('smiles');
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
     * The monoisotopic mass is the sum of the masses of the atoms in a molecule using the unbound, ground-state, rest mass
     * of the principal (most abundant) isotope for each element instead of the isotopic average mass. Please include the units in the
     * form '&lt;Number&gt; &lt;unit&gt;', for example '770.230488 g/mol' or as '&lt;QuantitativeValue&gt;.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getMonoisotopicMolecularWeight()
    {
        return $this->getProp('monoisotopicMolecularWeight');
    }

    /**
     * Systematic method of naming chemical compounds as recommended by the International Union of Pure and Applied Chemistry (IUPAC).
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getIupacName()
    {
        return $this->getProp('iupacName');
    }
}
