<?php

/**
 * @see https://schema.org/AnatomicalStructure
 * Any part of the human body, typically a component of an anatomical system. Organs, tissues, and cells are all anatomical structures.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure;

class AnatomicalStructure extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
{
    const TYPE = 'AnatomicalStructure';

    /**
     * Other anatomical structures to which this structure is connected.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure
     */
    public $connectedTo;

    /**
     * Location in the body of the anatomical structure.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $bodyLocation;

    /**
     * An image containing a diagram that illustrates the structure and/or its component substructures and/or connections with other structures.
     * @var \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject
     */
    public $diagram;

    /**
     * A medical therapy related to this anatomy.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy
     */
    public $relatedTherapy;

    /**
     * A medical condition associated with this anatomy.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition
     */
    public $relatedCondition;

    /**
     * Component (sub-)structure(s) that comprise this anatomical structure.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure
     */
    public $subStructure;

    /**
     * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and
     * biochemical functions of the system.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $associatedPathophysiology;

    /**
     * The anatomical or organ system that this structure is part of.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem
     */
    public $partOfSystem;

    /**
     * Other anatomical structures to which this structure is connected.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure $value
     * @return static
     */
    function setConnectedTo($value)
    {
        return $this->setProp('connectedTo', $value);
    }

    /**
     * Location in the body of the anatomical structure.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setBodyLocation($value)
    {
        return $this->setProp('bodyLocation', $value);
    }

    /**
     * An image containing a diagram that illustrates the structure and/or its component substructures and/or connections with other structures.
     * @param \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject $value
     * @return static
     */
    function setDiagram($value)
    {
        return $this->setProp('diagram', $value);
    }

    /**
     * A medical therapy related to this anatomy.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy $value
     * @return static
     */
    function setRelatedTherapy($value)
    {
        return $this->setProp('relatedTherapy', $value);
    }

    /**
     * A medical condition associated with this anatomy.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition $value
     * @return static
     */
    function setRelatedCondition($value)
    {
        return $this->setProp('relatedCondition', $value);
    }

    /**
     * Component (sub-)structure(s) that comprise this anatomical structure.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure $value
     * @return static
     */
    function setSubStructure($value)
    {
        return $this->setProp('subStructure', $value);
    }

    /**
     * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and
     * biochemical functions of the system.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAssociatedPathophysiology($value)
    {
        return $this->setProp('associatedPathophysiology', $value);
    }

    /**
     * The anatomical or organ system that this structure is part of.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem $value
     * @return static
     */
    function setPartOfSystem($value)
    {
        return $this->setProp('partOfSystem', $value);
    }

    /**
     * Other anatomical structures to which this structure is connected.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|null
     */
    function getConnectedTo()
    {
        return $this->getProp('connectedTo');
    }

    /**
     * Location in the body of the anatomical structure.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getBodyLocation()
    {
        return $this->getProp('bodyLocation');
    }

    /**
     * An image containing a diagram that illustrates the structure and/or its component substructures and/or connections with other structures.
     * @return \Vnetby\Schemaorg\Types\Thing\CreativeWork\MediaObject\ImageObject\ImageObject|null
     */
    function getDiagram()
    {
        return $this->getProp('diagram');
    }

    /**
     * A medical therapy related to this anatomy.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy|null
     */
    function getRelatedTherapy()
    {
        return $this->getProp('relatedTherapy');
    }

    /**
     * A medical condition associated with this anatomy.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition|null
     */
    function getRelatedCondition()
    {
        return $this->getProp('relatedCondition');
    }

    /**
     * Component (sub-)structure(s) that comprise this anatomical structure.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|null
     */
    function getSubStructure()
    {
        return $this->getProp('subStructure');
    }

    /**
     * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and
     * biochemical functions of the system.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAssociatedPathophysiology()
    {
        return $this->getProp('associatedPathophysiology');
    }

    /**
     * The anatomical or organ system that this structure is part of.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|null
     */
    function getPartOfSystem()
    {
        return $this->getProp('partOfSystem');
    }
}
