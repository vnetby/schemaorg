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
     * Specifying something physically contained by something else. Typically used here for the underlying anatomical structures, such as organs, that comprise the
     * anatomical system.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure
     */
    protected $prop_comprisedOf;

    /**
     * A medical therapy related to this anatomy.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy
     */
    protected $prop_relatedTherapy;

    /**
     * A medical condition associated with this anatomy.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition
     */
    protected $prop_relatedCondition;

    /**
     * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and
     * biochemical functions of the system.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_associatedPathophysiology;

    /**
     * Related anatomical structure(s) that are not part of the system but relate or connect to it, such as vascular bundles associated
     * with an organ system.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure
     */
    protected $prop_relatedStructure;

    /**
     * Specifying something physically contained by something else. Typically used here for the underlying anatomical structures, such as organs, that comprise the
     * anatomical system.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure $value
     * @return static
     */
    function setComprisedOf($value)
    {
        return $this->setProp('comprisedOf', $value);
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
     * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and
     * biochemical functions of the system.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAssociatedPathophysiology($value)
    {
        return $this->setProp('associatedPathophysiology', $value);
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
     * Specifying something physically contained by something else. Typically used here for the underlying anatomical structures, such as organs, that comprise the
     * anatomical system.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|null
     */
    function getComprisedOf()
    {
        return $this->getProp('comprisedOf');
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
     * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and
     * biochemical functions of the system.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAssociatedPathophysiology()
    {
        return $this->getProp('associatedPathophysiology');
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
}
