<?php

/**
 * @see https://schema.org/Joint
 * The anatomical location at which two or more bones make contact.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure;

class Joint extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure
{
    const TYPE = 'Joint';

    /**
     * The name given to how bone physically connects to each other.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_structuralClass;

    /**
     * The degree of mobility the joint allows.
     * @var \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
     */
    protected $prop_functionalClass;

    /**
     * The biomechanical properties of the bone.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_biomechnicalClass;

    /**
     * The name given to how bone physically connects to each other.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setStructuralClass($value)
    {
        return $this->setProp('structuralClass', $value);
    }

    /**
     * The degree of mobility the joint allows.
     * @param \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity $value
     * @return static
     */
    function setFunctionalClass($value)
    {
        return $this->setProp('functionalClass', $value);
    }

    /**
     * The biomechanical properties of the bone.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setBiomechnicalClass($value)
    {
        return $this->setProp('biomechnicalClass', $value);
    }

    /**
     * The name given to how bone physically connects to each other.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getStructuralClass()
    {
        return $this->getProp('structuralClass');
    }

    /**
     * The degree of mobility the joint allows.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity|null
     */
    function getFunctionalClass()
    {
        return $this->getProp('functionalClass');
    }

    /**
     * The biomechanical properties of the bone.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getBiomechnicalClass()
    {
        return $this->getProp('biomechnicalClass');
    }
}
