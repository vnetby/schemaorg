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
     * Intended use of the BioChemEntity by humans.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
    */
   protected $prop_potentialUse;

   /**
     * A role played by the BioChemEntity within a chemical context.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
    */
   protected $prop_chemicalRole;

   /**
     * A specification in form of a line notation for describing the structure of chemical species using short ASCII strings. Double bond
     * stereochemistry \ indicators may need to be escaped in the string in formats where the backslash is an escape character.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_smiles;

   /**
     * Systematic method of naming chemical compounds as recommended by the International Union of Pure and Applied Chemistry (IUPAC).
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_iupacName;

   /**
     * Non-proprietary identifier for molecular entity that can be used in printed and electronic data sources thus enabling easier linking of diverse
     * data compilations.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_inChI;

   /**
     * The monoisotopic mass is the sum of the masses of the atoms in a molecule using the unbound, ground-state, rest mass
     * of the principal (most abundant) isotope for each element instead of the isotopic average mass. Please include the units in the
     * form '&lt;Number&gt; &lt;unit&gt;', for example '770.230488 g/mol' or as '&lt;QuantitativeValue&gt;.
    * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_monoisotopicMolecularWeight;

   /**
     * This is the molecular weight of the entity being described, not of the parent. Units should be included in the form
     * '&lt;Number&gt; &lt;unit&gt;', for example '12 amu' or as '&lt;QuantitativeValue&gt;.
    * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue
    */
   protected $prop_molecularWeight;

   /**
     * InChIKey is a hashed version of the full InChI (using the SHA-256 algorithm).
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_inChIKey;

   /**
     * The empirical formula is the simplest whole number ratio of all the atoms in a molecule.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_molecularFormula;

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
     * A role played by the BioChemEntity within a chemical context.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
    * @return static
    */
   function setChemicalRole($value)
   {
       return $this->setProp('chemicalRole', $value);
   }

   /**
     * A specification in form of a line notation for describing the structure of chemical species using short ASCII strings. Double bond
     * stereochemistry \ indicators may need to be escaped in the string in formats where the backslash is an escape character.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setSmiles($value)
   {
       return $this->setProp('smiles', $value);
   }

   /**
     * Systematic method of naming chemical compounds as recommended by the International Union of Pure and Applied Chemistry (IUPAC).
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setIupacName($value)
   {
       return $this->setProp('iupacName', $value);
   }

   /**
     * Non-proprietary identifier for molecular entity that can be used in printed and electronic data sources thus enabling easier linking of diverse
     * data compilations.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setInChI($value)
   {
       return $this->setProp('inChI', $value);
   }

   /**
     * The monoisotopic mass is the sum of the masses of the atoms in a molecule using the unbound, ground-state, rest mass
     * of the principal (most abundant) isotope for each element instead of the isotopic average mass. Please include the units in the
     * form '&lt;Number&gt; &lt;unit&gt;', for example '770.230488 g/mol' or as '&lt;QuantitativeValue&gt;.
    * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setMonoisotopicMolecularWeight($value)
   {
       return $this->setProp('monoisotopicMolecularWeight', $value);
   }

   /**
     * This is the molecular weight of the entity being described, not of the parent. Units should be included in the form
     * '&lt;Number&gt; &lt;unit&gt;', for example '12 amu' or as '&lt;QuantitativeValue&gt;.
    * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue $value
    * @return static
    */
   function setMolecularWeight($value)
   {
       return $this->setProp('molecularWeight', $value);
   }

   /**
     * InChIKey is a hashed version of the full InChI (using the SHA-256 algorithm).
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setInChIKey($value)
   {
       return $this->setProp('inChIKey', $value);
   }

   /**
     * The empirical formula is the simplest whole number ratio of all the atoms in a molecule.
    * @param \Vnetby\Schemaorg\DataTypes\DataText $value
    * @return static
    */
   function setMolecularFormula($value)
   {
       return $this->setProp('molecularFormula', $value);
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
     * A role played by the BioChemEntity within a chemical context.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
    */
   function getChemicalRole()
   {
       return $this->getProp('chemicalRole');
   }

   /**
     * A specification in form of a line notation for describing the structure of chemical species using short ASCII strings. Double bond
     * stereochemistry \ indicators may need to be escaped in the string in formats where the backslash is an escape character.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getSmiles()
   {
       return $this->getProp('smiles');
   }

   /**
     * Systematic method of naming chemical compounds as recommended by the International Union of Pure and Applied Chemistry (IUPAC).
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getIupacName()
   {
       return $this->getProp('iupacName');
   }

   /**
     * Non-proprietary identifier for molecular entity that can be used in printed and electronic data sources thus enabling easier linking of diverse
     * data compilations.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getInChI()
   {
       return $this->getProp('inChI');
   }

   /**
     * The monoisotopic mass is the sum of the masses of the atoms in a molecule using the unbound, ground-state, rest mass
     * of the principal (most abundant) isotope for each element instead of the isotopic average mass. Please include the units in the
     * form '&lt;Number&gt; &lt;unit&gt;', for example '770.230488 g/mol' or as '&lt;QuantitativeValue&gt;.
    * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|\Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getMonoisotopicMolecularWeight()
   {
       return $this->getProp('monoisotopicMolecularWeight');
   }

   /**
     * This is the molecular weight of the entity being described, not of the parent. Units should be included in the form
     * '&lt;Number&gt; &lt;unit&gt;', for example '12 amu' or as '&lt;QuantitativeValue&gt;.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\QuantitativeValue\QuantitativeValue|null
    */
   function getMolecularWeight()
   {
       return $this->getProp('molecularWeight');
   }

   /**
     * InChIKey is a hashed version of the full InChI (using the SHA-256 algorithm).
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getInChIKey()
   {
       return $this->getProp('inChIKey');
   }

   /**
     * The empirical formula is the simplest whole number ratio of all the atoms in a molecule.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getMolecularFormula()
   {
       return $this->getProp('molecularFormula');
   }
}
