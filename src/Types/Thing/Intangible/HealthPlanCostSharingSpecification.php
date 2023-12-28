<?php

/**
 * @see https://schema.org/HealthPlanCostSharingSpecification
 * A description of costs to the patient under a given network or formulary.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class HealthPlanCostSharingSpecification extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'HealthPlanCostSharingSpecification';

    /**
     * Whether the coinsurance applies before or after deductible, etc. TODO: Is this a closed set?
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_healthPlanCoinsuranceOption;

    /**
     * The copay amount.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification
     */
    protected $prop_healthPlanCopay;

    /**
     * The category or type of pharmacy associated with this cost sharing.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_healthPlanPharmacyCategory;

    /**
     * Whether the copay is before or after deductible, etc. TODO: Is this a closed set?
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_healthPlanCopayOption;

    /**
     * The rate of coinsurance expressed as a number between 0.0 and 1.0.
     * @var \Vnetby\Schemaorg\DataTypes\DataNumber
     */
    protected $prop_healthPlanCoinsuranceRate;

    /**
     * Whether the coinsurance applies before or after deductible, etc. TODO: Is this a closed set?
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setHealthPlanCoinsuranceOption($value)
    {
        return $this->setProp('healthPlanCoinsuranceOption', $value);
    }

    /**
     * The copay amount.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification $value
     * @return static
     */
    function setHealthPlanCopay($value)
    {
        return $this->setProp('healthPlanCopay', $value);
    }

    /**
     * The category or type of pharmacy associated with this cost sharing.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setHealthPlanPharmacyCategory($value)
    {
        return $this->setProp('healthPlanPharmacyCategory', $value);
    }

    /**
     * Whether the copay is before or after deductible, etc. TODO: Is this a closed set?
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setHealthPlanCopayOption($value)
    {
        return $this->setProp('healthPlanCopayOption', $value);
    }

    /**
     * The rate of coinsurance expressed as a number between 0.0 and 1.0.
     * @param \Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setHealthPlanCoinsuranceRate($value)
    {
        return $this->setProp('healthPlanCoinsuranceRate', $value);
    }

    /**
     * Whether the coinsurance applies before or after deductible, etc. TODO: Is this a closed set?
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getHealthPlanCoinsuranceOption()
    {
        return $this->getProp('healthPlanCoinsuranceOption');
    }

    /**
     * The copay amount.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\PriceSpecification\PriceSpecification|null
     */
    function getHealthPlanCopay()
    {
        return $this->getProp('healthPlanCopay');
    }

    /**
     * The category or type of pharmacy associated with this cost sharing.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getHealthPlanPharmacyCategory()
    {
        return $this->getProp('healthPlanPharmacyCategory');
    }

    /**
     * Whether the copay is before or after deductible, etc. TODO: Is this a closed set?
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getHealthPlanCopayOption()
    {
        return $this->getProp('healthPlanCopayOption');
    }

    /**
     * The rate of coinsurance expressed as a number between 0.0 and 1.0.
     * @return \Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getHealthPlanCoinsuranceRate()
    {
        return $this->getProp('healthPlanCoinsuranceRate');
    }
}
