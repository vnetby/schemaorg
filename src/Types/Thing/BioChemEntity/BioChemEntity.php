<?php

/**
 * @see https://schema.org/BioChemEntity
 * Any biological, chemical, or biochemical thing. For example: a protein; a gene; a chemical; a synthetic chemical.
 */

namespace Vnetby\Schemaorg\Types\Thing\BioChemEntity;

class BioChemEntity extends \Vnetby\Schemaorg\Types\Thing\Thing
{
    const TYPE = 'BioChemEntity';

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Grant\Grant
     */
    protected $prop_funding;

    /**
     * Subcellular location where this BioChemEntity is located; please use PropertyValue if you want to include any evidence.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue
     */
    protected $prop_isLocatedInSubcellularLocation;

    /**
     * Disease associated to this BioChemEntity. Such disease can be a MedicalCondition or a URL. If you want to add an evidence
     * supporting the association, please use PropertyValue.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition
     */
    protected $prop_associatedDisease;

    /**
     * Indicates a BioChemEntity that (in some sense) has this BioChemEntity as a part. 
     * @var \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity
     */
    protected $prop_hasBioChemEntityPart;

    /**
     * A common representation such as a protein sequence or chemical structure for this entity. For images use schema.org/image.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_hasRepresentation;

    /**
     * Biological process this BioChemEntity is involved in; please use PropertyValue if you want to include any evidence.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_isInvolvedInBiologicalProcess;

    /**
     * Indicates a BioChemEntity that is (in some sense) a part of this BioChemEntity. 
     * @var \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity
     */
    protected $prop_isPartOfBioChemEntity;

    /**
     * A role played by the BioChemEntity within a biological context.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    protected $prop_biologicalRole;

    /**
     * Molecular function performed by this BioChemEntity; please use PropertyValue if you want to include any evidence.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm
     */
    protected $prop_hasMolecularFunction;

    /**
     * A similar BioChemEntity, e.g., obtained by fingerprint similarity algorithms.
     * @var \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity
     */
    protected $prop_bioChemSimilarity;

    /**
     * Another BioChemEntity encoding by this one.
     * @var \Vnetby\Schemaorg\Types\Thing\BioChemEntity\Gene
     */
    protected $prop_isEncodedByBioChemEntity;

    /**
     * The taxonomic grouping of the organism that expresses, encodes, or in some way related to the BioChemEntity.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Taxon|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_taxonomicRange;

    /**
     * A BioChemEntity that is known to interact with this item.
     * @var \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity
     */
    protected $prop_bioChemInteraction;

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Grant\Grant $value
     * @return static
     */
    function setFunding($value)
    {
        return $this->setProp('funding', $value);
    }

    /**
     * Subcellular location where this BioChemEntity is located; please use PropertyValue if you want to include any evidence.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue $value
     * @return static
     */
    function setIsLocatedInSubcellularLocation($value)
    {
        return $this->setProp('isLocatedInSubcellularLocation', $value);
    }

    /**
     * Disease associated to this BioChemEntity. Such disease can be a MedicalCondition or a URL. If you want to add an evidence
     * supporting the association, please use PropertyValue.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition $value
     * @return static
     */
    function setAssociatedDisease($value)
    {
        return $this->setProp('associatedDisease', $value);
    }

    /**
     * Indicates a BioChemEntity that (in some sense) has this BioChemEntity as a part. 
     * @param \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity $value
     * @return static
     */
    function setHasBioChemEntityPart($value)
    {
        return $this->setProp('hasBioChemEntityPart', $value);
    }

    /**
     * A common representation such as a protein sequence or chemical structure for this entity. For images use schema.org/image.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setHasRepresentation($value)
    {
        return $this->setProp('hasRepresentation', $value);
    }

    /**
     * Biological process this BioChemEntity is involved in; please use PropertyValue if you want to include any evidence.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setIsInvolvedInBiologicalProcess($value)
    {
        return $this->setProp('isInvolvedInBiologicalProcess', $value);
    }

    /**
     * Indicates a BioChemEntity that is (in some sense) a part of this BioChemEntity. 
     * @param \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity $value
     * @return static
     */
    function setIsPartOfBioChemEntity($value)
    {
        return $this->setProp('isPartOfBioChemEntity', $value);
    }

    /**
     * A role played by the BioChemEntity within a biological context.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
     * @return static
     */
    function setBiologicalRole($value)
    {
        return $this->setProp('biologicalRole', $value);
    }

    /**
     * Molecular function performed by this BioChemEntity; please use PropertyValue if you want to include any evidence.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm $value
     * @return static
     */
    function setHasMolecularFunction($value)
    {
        return $this->setProp('hasMolecularFunction', $value);
    }

    /**
     * A similar BioChemEntity, e.g., obtained by fingerprint similarity algorithms.
     * @param \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity $value
     * @return static
     */
    function setBioChemSimilarity($value)
    {
        return $this->setProp('bioChemSimilarity', $value);
    }

    /**
     * Another BioChemEntity encoding by this one.
     * @param \Vnetby\Schemaorg\Types\Thing\BioChemEntity\Gene $value
     * @return static
     */
    function setIsEncodedByBioChemEntity($value)
    {
        return $this->setProp('isEncodedByBioChemEntity', $value);
    }

    /**
     * The taxonomic grouping of the organism that expresses, encodes, or in some way related to the BioChemEntity.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Taxon|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTaxonomicRange($value)
    {
        return $this->setProp('taxonomicRange', $value);
    }

    /**
     * A BioChemEntity that is known to interact with this item.
     * @param \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity $value
     * @return static
     */
    function setBioChemInteraction($value)
    {
        return $this->setProp('bioChemInteraction', $value);
    }

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Grant\Grant|null
     */
    function getFunding()
    {
        return $this->getProp('funding');
    }

    /**
     * Subcellular location where this BioChemEntity is located; please use PropertyValue if you want to include any evidence.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|null
     */
    function getIsLocatedInSubcellularLocation()
    {
        return $this->getProp('isLocatedInSubcellularLocation');
    }

    /**
     * Disease associated to this BioChemEntity. Such disease can be a MedicalCondition or a URL. If you want to add an evidence
     * supporting the association, please use PropertyValue.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition|null
     */
    function getAssociatedDisease()
    {
        return $this->getProp('associatedDisease');
    }

    /**
     * Indicates a BioChemEntity that (in some sense) has this BioChemEntity as a part. 
     * @return \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity|null
     */
    function getHasBioChemEntityPart()
    {
        return $this->getProp('hasBioChemEntityPart');
    }

    /**
     * A common representation such as a protein sequence or chemical structure for this entity. For images use schema.org/image.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getHasRepresentation()
    {
        return $this->getProp('hasRepresentation');
    }

    /**
     * Biological process this BioChemEntity is involved in; please use PropertyValue if you want to include any evidence.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getIsInvolvedInBiologicalProcess()
    {
        return $this->getProp('isInvolvedInBiologicalProcess');
    }

    /**
     * Indicates a BioChemEntity that is (in some sense) a part of this BioChemEntity. 
     * @return \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity|null
     */
    function getIsPartOfBioChemEntity()
    {
        return $this->getProp('isPartOfBioChemEntity');
    }

    /**
     * A role played by the BioChemEntity within a biological context.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
     */
    function getBiologicalRole()
    {
        return $this->getProp('biologicalRole');
    }

    /**
     * Molecular function performed by this BioChemEntity; please use PropertyValue if you want to include any evidence.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PropertyValue\PropertyValue|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|null
     */
    function getHasMolecularFunction()
    {
        return $this->getProp('hasMolecularFunction');
    }

    /**
     * A similar BioChemEntity, e.g., obtained by fingerprint similarity algorithms.
     * @return \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity|null
     */
    function getBioChemSimilarity()
    {
        return $this->getProp('bioChemSimilarity');
    }

    /**
     * Another BioChemEntity encoding by this one.
     * @return \Vnetby\Schemaorg\Types\Thing\BioChemEntity\Gene|null
     */
    function getIsEncodedByBioChemEntity()
    {
        return $this->getProp('isEncodedByBioChemEntity');
    }

    /**
     * The taxonomic grouping of the organism that expresses, encodes, or in some way related to the BioChemEntity.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Taxon|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\DefinedTerm|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTaxonomicRange()
    {
        return $this->getProp('taxonomicRange');
    }

    /**
     * A BioChemEntity that is known to interact with this item.
     * @return \Vnetby\Schemaorg\Types\Thing\BioChemEntity\BioChemEntity|null
     */
    function getBioChemInteraction()
    {
        return $this->getProp('bioChemInteraction');
    }
}
