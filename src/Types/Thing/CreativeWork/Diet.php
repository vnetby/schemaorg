<?php

/**
 * @see https://schema.org/Diet
 * A strategy of regulating the intake of food to achieve or maintain a specific health-related goal.
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class Diet extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'Diet';

    /**
     * Specific physiologic risks associated to the diet plan.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $risks;

    /**
     * People or organizations that endorse the plan.
     * @var \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization
     */
    public $endorsers;

    /**
     * Specific physiologic benefits associated to the plan.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $physiologicalBenefits;

    /**
     * Nutritional information specific to the dietary plan. May include dietary recommendations on what foods to avoid, what foods to consume, and
     * specific alterations/deviations from the USDA or other regulatory body's approved dietary guidelines.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $dietFeatures;

    /**
     * Medical expert advice related to the plan.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $expertConsiderations;

    /**
     * Specific physiologic risks associated to the diet plan.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setRisks($value)
    {
        return $this->setProp('risks', $value);
    }

    /**
     * People or organizations that endorse the plan.
     * @param \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization $value
     * @return static
     */
    function setEndorsers($value)
    {
        return $this->setProp('endorsers', $value);
    }

    /**
     * Specific physiologic benefits associated to the plan.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setPhysiologicalBenefits($value)
    {
        return $this->setProp('physiologicalBenefits', $value);
    }

    /**
     * Nutritional information specific to the dietary plan. May include dietary recommendations on what foods to avoid, what foods to consume, and
     * specific alterations/deviations from the USDA or other regulatory body's approved dietary guidelines.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setDietFeatures($value)
    {
        return $this->setProp('dietFeatures', $value);
    }

    /**
     * Medical expert advice related to the plan.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setExpertConsiderations($value)
    {
        return $this->setProp('expertConsiderations', $value);
    }

    /**
     * Specific physiologic risks associated to the diet plan.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getRisks()
    {
        return $this->getProp('risks');
    }

    /**
     * People or organizations that endorse the plan.
     * @return \Vnetby\Schemaorg\Types\Thing\Person\Person|\Vnetby\Schemaorg\Types\Thing\Organization\Organization|null
     */
    function getEndorsers()
    {
        return $this->getProp('endorsers');
    }

    /**
     * Specific physiologic benefits associated to the plan.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getPhysiologicalBenefits()
    {
        return $this->getProp('physiologicalBenefits');
    }

    /**
     * Nutritional information specific to the dietary plan. May include dietary recommendations on what foods to avoid, what foods to consume, and
     * specific alterations/deviations from the USDA or other regulatory body's approved dietary guidelines.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getDietFeatures()
    {
        return $this->getProp('dietFeatures');
    }

    /**
     * Medical expert advice related to the plan.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getExpertConsiderations()
    {
        return $this->getProp('expertConsiderations');
    }
}
