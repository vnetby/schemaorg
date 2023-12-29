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
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $structuralClass;

    /**
     * The degree of mobility the joint allows.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
     */
    public $functionalClass;

    /**
     * The biomechanical properties of the bone.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $biomechnicalClass;

    /**
     * The name given to how bone physically connects to each other.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setStructuralClass($value)
    {
        return $this->setProp('structuralClass', $value);
    }

    /**
     * The degree of mobility the joint allows.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity $value
     * @return static
     */
    function setFunctionalClass($value)
    {
        return $this->setProp('functionalClass', $value);
    }

    /**
     * The biomechanical properties of the bone.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setBiomechnicalClass($value)
    {
        return $this->setProp('biomechnicalClass', $value);
    }

    /**
     * The name given to how bone physically connects to each other.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getStructuralClass()
    {
        return $this->getProp('structuralClass');
    }

    /**
     * The degree of mobility the joint allows.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity|null
     */
    function getFunctionalClass()
    {
        return $this->getProp('functionalClass');
    }

    /**
     * The biomechanical properties of the bone.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getBiomechnicalClass()
    {
        return $this->getProp('biomechnicalClass');
    }
}
