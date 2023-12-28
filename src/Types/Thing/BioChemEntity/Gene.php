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
     * Another BioChemEntity encoded by this one. 
    * @var \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity
    */
   protected $prop_encodesBioChemEntity;

   /**
     * Another gene which is a variation of this one.
    * @var \Vnetby\Schemaorg\Types\Thing\BioChemEntity\Gene
    */
   protected $prop_alternativeOf;

   /**
     * A symbolic representation of a BioChemEntity. For example, a nucleotide sequence of a Gene or an amino acid sequence of a
     * Protein.
    * @var \Vnetby\Schemaorg\DataTypes\DataText
    */
   protected $prop_hasBioPolymerSequence;

   /**
     * Tissue, organ, biological sample, etc in which activity of this gene has been observed experimentally. For example brain, digestive system.
    * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure
    */
   protected $prop_expressedIn;

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
     * Another gene which is a variation of this one.
    * @param \Vnetby\Schemaorg\Types\Thing\BioChemEntity\Gene $value
    * @return static
    */
   function setAlternativeOf($value)
   {
       return $this->setProp('alternativeOf', $value);
   }

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
     * Tissue, organ, biological sample, etc in which activity of this gene has been observed experimentally. For example brain, digestive system.
    * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure $value
    * @return static
    */
   function setExpressedIn($value)
   {
       return $this->setProp('expressedIn', $value);
   }

   /**
     * Another BioChemEntity encoded by this one. 
    * @return \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity|null
    */
   function getEncodesBioChemEntity()
   {
       return $this->getProp('encodesBioChemEntity');
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
     * A symbolic representation of a BioChemEntity. For example, a nucleotide sequence of a Gene or an amino acid sequence of a
     * Protein.
    * @return \Vnetby\Schemaorg\DataTypes\DataText|null
    */
   function getHasBioPolymerSequence()
   {
       return $this->getProp('hasBioPolymerSequence');
   }

   /**
     * Tissue, organ, biological sample, etc in which activity of this gene has been observed experimentally. For example brain, digestive system.
    * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|null
    */
   function getExpressedIn()
   {
       return $this->getProp('expressedIn');
   }
}
