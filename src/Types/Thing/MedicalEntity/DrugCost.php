<?php

/**
 * @see https://schema.org/DrugCost
 * The cost per unit of a medical drug. Note that this type is not meant to represent the price in an
 * offer of a drug for sale; see the Offer type for that. This type will typically be used to tag wholesale
 * or average retail cost of a drug, or maximum reimbursable cost. Costs of medical drugs vary widely depending on how and
 * where they are paid for, so while this type captures some of the variables, costs should be used with caution by
 * consumers of this schema's markup.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity;

class DrugCost extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
{
    const TYPE = 'DrugCost';

    /**
     * The cost per unit of the drug.
     * @var string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $costPerUnit;

    /**
     * Additional details to capture the origin of the cost data. For example, 'Medicare Part B'.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $costOrigin;

    /**
     * The category of cost, such as wholesale, retail, reimbursement cap, etc.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\DrugCostCategory\DrugCostCategory
     */
    public $costCategory;

    /**
     * The unit in which the drug is measured, e.g. '5 mg tablet'.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $drugUnit;

    /**
     * The currency (in 3-letter) of the drug cost. See: http://en.wikipedia.org/wiki/ISO_4217. 
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $costCurrency;

    /**
     * The location in which the status applies.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea
     */
    public $applicableLocation;

    /**
     * The cost per unit of the drug.
     * @param string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCostPerUnit($value)
    {
        return $this->setProp('costPerUnit', $value);
    }

    /**
     * Additional details to capture the origin of the cost data. For example, 'Medicare Part B'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCostOrigin($value)
    {
        return $this->setProp('costOrigin', $value);
    }

    /**
     * The category of cost, such as wholesale, retail, reimbursement cap, etc.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\DrugCostCategory\DrugCostCategory $value
     * @return static
     */
    function setCostCategory($value)
    {
        return $this->setProp('costCategory', $value);
    }

    /**
     * The unit in which the drug is measured, e.g. '5 mg tablet'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setDrugUnit($value)
    {
        return $this->setProp('drugUnit', $value);
    }

    /**
     * The currency (in 3-letter) of the drug cost. See: http://en.wikipedia.org/wiki/ISO_4217. 
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setCostCurrency($value)
    {
        return $this->setProp('costCurrency', $value);
    }

    /**
     * The location in which the status applies.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea $value
     * @return static
     */
    function setApplicableLocation($value)
    {
        return $this->setProp('applicableLocation', $value);
    }

    /**
     * The cost per unit of the drug.
     * @return string|int|float|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCostPerUnit()
    {
        return $this->getProp('costPerUnit');
    }

    /**
     * Additional details to capture the origin of the cost data. For example, 'Medicare Part B'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCostOrigin()
    {
        return $this->getProp('costOrigin');
    }

    /**
     * The category of cost, such as wholesale, retail, reimbursement cap, etc.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\DrugCostCategory\DrugCostCategory|null
     */
    function getCostCategory()
    {
        return $this->getProp('costCategory');
    }

    /**
     * The unit in which the drug is measured, e.g. '5 mg tablet'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getDrugUnit()
    {
        return $this->getProp('drugUnit');
    }

    /**
     * The currency (in 3-letter) of the drug cost. See: http://en.wikipedia.org/wiki/ISO_4217. 
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getCostCurrency()
    {
        return $this->getProp('costCurrency');
    }

    /**
     * The location in which the status applies.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|null
     */
    function getApplicableLocation()
    {
        return $this->getProp('applicableLocation');
    }
}
