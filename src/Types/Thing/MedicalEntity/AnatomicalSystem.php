<?php

/**
 * @see https://schema.org/AnatomicalSystem
 * An anatomical system is a group of anatomical structures that work together to perform a certain task. Anatomical systems, such as
 * organ systems, are one organizing principle of anatomy, and can include circulatory, digestive, endocrine, integumentary, immune, lymphatic, muscular, nervous, reproductive, respiratory,
 * skeletal, urinary, vestibular, and other systems.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity;

class AnatomicalSystem extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
{
    const TYPE = 'AnatomicalSystem';

    /**
     * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and
     * biochemical functions of the system.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $associatedPathophysiology;

    /**
     * A medical condition associated with this anatomy.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition
     */
    public $relatedCondition;

    /**
     * Related anatomical structure(s) that are not part of the system but relate or connect to it, such as vascular bundles associated
     * with an organ system.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure
     */
    public $relatedStructure;

    /**
     * A medical therapy related to this anatomy.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy
     */
    public $relatedTherapy;

    /**
     * Specifying something physically contained by something else. Typically used here for the underlying anatomical structures, such as organs, that comprise the
     * anatomical system.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem
     */
    public $comprisedOf;

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
     * A medical condition associated with this anatomy.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition $value
     * @return static
     */
    function setRelatedCondition($value)
    {
        return $this->setProp('relatedCondition', $value);
    }

    /**
     * Related anatomical structure(s) that are not part of the system but relate or connect to it, such as vascular bundles associated
     * with an organ system.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure $value
     * @return static
     */
    function setRelatedStructure($value)
    {
        return $this->setProp('relatedStructure', $value);
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
     * Specifying something physically contained by something else. Typically used here for the underlying anatomical structures, such as organs, that comprise the
     * anatomical system.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem $value
     * @return static
     */
    function setComprisedOf($value)
    {
        return $this->setProp('comprisedOf', $value);
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
     * A medical condition associated with this anatomy.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition|null
     */
    function getRelatedCondition()
    {
        return $this->getProp('relatedCondition');
    }

    /**
     * Related anatomical structure(s) that are not part of the system but relate or connect to it, such as vascular bundles associated
     * with an organ system.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|null
     */
    function getRelatedStructure()
    {
        return $this->getProp('relatedStructure');
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
     * Specifying something physically contained by something else. Typically used here for the underlying anatomical structures, such as organs, that comprise the
     * anatomical system.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|null
     */
    function getComprisedOf()
    {
        return $this->getProp('comprisedOf');
    }
}
