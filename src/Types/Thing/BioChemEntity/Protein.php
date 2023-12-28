<?php

/**
 * @see https://schema.org/Protein
 * Protein is here used in its widest possible definition, as classes of amino acid based molecules. Amyloid-beta Protein in human (UniProt
 * P05067), eukaryota (e.g. an OrthoDB group) or even a single molecule that one can point to are all of type :Protein.
 * A protein can thus be a subclass of another protein, e.g. :Protein as a UniProt record can have multiple isoforms inside
 * it which would also be :Protein. They can be imagined, synthetic, hypothetical or naturally occurring.
 */

namespace Vnetby\Schemaorg\Types\Thing\BioChemEntity;

class Protein extends \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity
{
    const TYPE = 'Protein';

    /**
     * A symbolic representation of a BioChemEntity. For example, a nucleotide sequence of a Gene or an amino acid sequence of a
     * Protein.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_hasBioPolymerSequence;

    /**
     * A symbolic representation of a BioChemEntity. For example, a nucleotide sequence of a Gene or an amino acid sequence of a
     * Protein.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setHasBioPolymerSequence($value)
    {
        return $this->setProp('hasBioPolymerSequence', $value);
    }

    /**
     * A symbolic representation of a BioChemEntity. For example, a nucleotide sequence of a Gene or an amino acid sequence of a
     * Protein.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getHasBioPolymerSequence()
    {
        return $this->getProp('hasBioPolymerSequence');
    }
}
