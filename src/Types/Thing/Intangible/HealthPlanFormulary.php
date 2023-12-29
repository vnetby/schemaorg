<?php

/**
 * @see https://schema.org/HealthPlanFormulary
 * For a given health insurance plan, the specification for costs and coverage of prescription drugs.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class HealthPlanFormulary extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'HealthPlanFormulary';

    /**
     * The costs to the patient for services under this network or formulary.
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    public $healthPlanCostSharing;

    /**
     * The tier(s) of drugs offered by this formulary or insurance plan.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $healthPlanDrugTier;

    /**
     * Whether prescriptions can be delivered by mail.
     * @var bool|\Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    public $offersPrescriptionByMail;

    /**
     * The costs to the patient for services under this network or formulary.
     * @param bool|\Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setHealthPlanCostSharing($value)
    {
        return $this->setProp('healthPlanCostSharing', $value);
    }

    /**
     * The tier(s) of drugs offered by this formulary or insurance plan.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setHealthPlanDrugTier($value)
    {
        return $this->setProp('healthPlanDrugTier', $value);
    }

    /**
     * Whether prescriptions can be delivered by mail.
     * @param bool|\Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setOffersPrescriptionByMail($value)
    {
        return $this->setProp('offersPrescriptionByMail', $value);
    }

    /**
     * The costs to the patient for services under this network or formulary.
     * @return bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getHealthPlanCostSharing()
    {
        return $this->getProp('healthPlanCostSharing');
    }

    /**
     * The tier(s) of drugs offered by this formulary or insurance plan.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getHealthPlanDrugTier()
    {
        return $this->getProp('healthPlanDrugTier');
    }

    /**
     * Whether prescriptions can be delivered by mail.
     * @return bool|\Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getOffersPrescriptionByMail()
    {
        return $this->getProp('offersPrescriptionByMail');
    }
}
