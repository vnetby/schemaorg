<?php

/**
 * @see https://schema.org/SuperficialAnatomy
 * Anatomical features that can be observed by sight (without dissection), including the form and proportions of the human body as well
 * as surface landmarks that correspond to deeper subcutaneous structures. Superficial anatomy plays an important role in sports medicine, phlebotomy, and other
 * medical specialties as underlying anatomical structures can be identified through surface palpation. For example, during back surgery, superficial anatomy can be
 * used to palpate and count vertebrae to find the site of incision. Or in phlebotomy, superficial anatomy can be used to
 * locate an underlying vein; for example, the median cubital vein can be located by palpating the borders of the cubital fossa
 * (such as the epicondyles of the humerus) and then looking for the superficial signs of the vein, such as size, prominence,
 * ability to refill after depression, and feel of surrounding tissue support. As another example, in a subluxation (dislocation) of the glenohumeral
 * joint, the bony structure becomes pronounced with the deltoid muscle failing to cover the glenohumeral joint allowing the edges of the
 * scapula to be superficially visible. Here, the superficial anatomy is the visible edges of the scapula, implying the underlying dislocation of
 * the joint (the related anatomical structure).
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity;

class SuperficialAnatomy extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
{
    const TYPE = 'SuperficialAnatomy';

    /**
     * The significance associated with the superficial anatomy; as an example, how characteristics of the superficial anatomy can suggest underlying medical conditions
     * or courses of treatment.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_significance;

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
     * Anatomical systems or structures that relate to the superficial anatomy.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure
     */
    protected $prop_relatedAnatomy;

    /**
     * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and
     * biochemical functions of the system.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_associatedPathophysiology;

    /**
     * The significance associated with the superficial anatomy; as an example, how characteristics of the superficial anatomy can suggest underlying medical conditions
     * or courses of treatment.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setSignificance($value)
    {
        return $this->setProp('significance', $value);
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
     * Anatomical systems or structures that relate to the superficial anatomy.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure $value
     * @return static
     */
    function setRelatedAnatomy($value)
    {
        return $this->setProp('relatedAnatomy', $value);
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
     * The significance associated with the superficial anatomy; as an example, how characteristics of the superficial anatomy can suggest underlying medical conditions
     * or courses of treatment.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getSignificance()
    {
        return $this->getProp('significance');
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
     * Anatomical systems or structures that relate to the superficial anatomy.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|null
     */
    function getRelatedAnatomy()
    {
        return $this->getProp('relatedAnatomy');
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
}
