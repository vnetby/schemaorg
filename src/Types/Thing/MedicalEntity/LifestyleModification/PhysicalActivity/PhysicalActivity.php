<?php

/**
 * @see https://schema.org/PhysicalActivity
 * Any bodily activity that enhances or maintains physical fitness and overall health and wellness. Includes activity that is part of daily
 * living and routine, structured exercise, and exercise prescribed as part of a medical treatment or recovery plan.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\LifestyleModification\PhysicalActivity;

class PhysicalActivity extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\LifestyleModification\LifestyleModification
{
    const TYPE = 'PhysicalActivity';

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PhysicalActivityCategory\PhysicalActivityCategory|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\Types\Thing\Thing
     */
    public $category;

    /**
     * The anatomy of the underlying organ system or structures associated with this entity.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\SuperficialAnatomy|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure
     */
    public $associatedAnatomy;

    /**
     * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $pathophysiology;

    /**
     * The characteristics of associated patients, such as age, gender, race etc.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $epidemiology;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PhysicalActivityCategory\PhysicalActivityCategory|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\Types\Thing\Thing $value
     * @return static
     */
    function setCategory($value)
    {
        return $this->setProp('category', $value);
    }

    /**
     * The anatomy of the underlying organ system or structures associated with this entity.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\SuperficialAnatomy|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure $value
     * @return static
     */
    function setAssociatedAnatomy($value)
    {
        return $this->setProp('associatedAnatomy', $value);
    }

    /**
     * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPathophysiology($value)
    {
        return $this->setProp('pathophysiology', $value);
    }

    /**
     * The characteristics of associated patients, such as age, gender, race etc.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setEpidemiology($value)
    {
        return $this->setProp('epidemiology', $value);
    }

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\PhysicalActivityCategory\PhysicalActivityCategory|\Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\Types\Thing\Intangible\DefinedTerm\CategoryCode\CategoryCode|\Vnetby\Schemaorg\Types\Thing\Thing|null
     */
    function getCategory()
    {
        return $this->getProp('category');
    }

    /**
     * The anatomy of the underlying organ system or structures associated with this entity.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\SuperficialAnatomy|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|null
     */
    function getAssociatedAnatomy()
    {
        return $this->getProp('associatedAnatomy');
    }

    /**
     * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPathophysiology()
    {
        return $this->getProp('pathophysiology');
    }

    /**
     * The characteristics of associated patients, such as age, gender, race etc.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getEpidemiology()
    {
        return $this->getProp('epidemiology');
    }
}
