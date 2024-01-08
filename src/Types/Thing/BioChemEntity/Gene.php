<?php

/**
 * @see https://schema.org/Gene
 * A discrete unit of inheritance which affects one or more biological traits (Source: [https://en.wikipedia.org/wiki/Gene](https://en.wikipedia.org/wiki/Gene)). Examples include FOXP2 (Forkhead box protein P2),
 * SCARNA21 (small Cajal body-specific RNA 21), A- (agouti genotype).
 */

namespace Vnetby\Schemaorg\Types\Thing\BioChemEntity;

class Gene extends \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity
{
    const TYPE = 'Gene';

    /**
     * A symbolic representation of a BioChemEntity. For example, a nucleotide sequence of a Gene or an amino acid sequence of a
     * Protein.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $hasBioPolymerSequence;

    /**
     * Another gene which is a variation of this one.
     * @var \Vnetby\Schemaorg\Types\Thing\BioChemEntity\Gene
     */
    public $alternativeOf;

    /**
     * Tissue, organ, biological sample, etc in which activity of this gene has been observed experimentally. For example brain, digestive system.
     * @var \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem
     */
    public $expressedIn;

    /**
     * Another BioChemEntity encoded by this one. 
     * @var \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity
     */
    public $encodesBioChemEntity;

    /**
     * A symbolic representation of a BioChemEntity. For example, a nucleotide sequence of a Gene or an amino acid sequence of a
     * Protein.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setHasBioPolymerSequence($value)
    {
        return $this->setProp('hasBioPolymerSequence', $value);
    }

    /**
     * Another gene which is a variation of this one.
     * @param \Vnetby\Schemaorg\Types\Thing\BioChemEntity\Gene $value
     * @return static
     */
    function setAlternativeOf($value)
    {
        return $this->setProp('alternativeOf', $value);
    }

    /**
     * Tissue, organ, biological sample, etc in which activity of this gene has been observed experimentally. For example brain, digestive system.
     * @param \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem $value
     * @return static
     */
    function setExpressedIn($value)
    {
        return $this->setProp('expressedIn', $value);
    }

    /**
     * Another BioChemEntity encoded by this one. 
     * @param \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity $value
     * @return static
     */
    function setEncodesBioChemEntity($value)
    {
        return $this->setProp('encodesBioChemEntity', $value);
    }

    /**
     * A symbolic representation of a BioChemEntity. For example, a nucleotide sequence of a Gene or an amino acid sequence of a
     * Protein.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getHasBioPolymerSequence()
    {
        return $this->getProp('hasBioPolymerSequence');
    }

    /**
     * Another gene which is a variation of this one.
     * @return \Vnetby\Schemaorg\Types\Thing\BioChemEntity\Gene|null
     */
    function getAlternativeOf()
    {
        return $this->getProp('alternativeOf');
    }

    /**
     * Tissue, organ, biological sample, etc in which activity of this gene has been observed experimentally. For example brain, digestive system.
     * @return \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|null
     */
    function getExpressedIn()
    {
        return $this->getProp('expressedIn');
    }

    /**
     * Another BioChemEntity encoded by this one. 
     * @return \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity|null
     */
    function getEncodesBioChemEntity()
    {
        return $this->getProp('encodesBioChemEntity');
    }
}
