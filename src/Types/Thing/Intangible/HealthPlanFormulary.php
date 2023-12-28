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
     * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    protected $prop_healthPlanCostSharing;

    /**
     * The tier(s) of drugs offered by this formulary or insurance plan.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_healthPlanDrugTier;

    /**
     * Whether prescriptions can be delivered by mail.
     * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    protected $prop_offersPrescriptionByMail;

    /**
     * The costs to the patient for services under this network or formulary.
     * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setHealthPlanCostSharing($value)
    {
        return $this->setProp('healthPlanCostSharing', $value);
    }

    /**
     * The tier(s) of drugs offered by this formulary or insurance plan.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setHealthPlanDrugTier($value)
    {
        return $this->setProp('healthPlanDrugTier', $value);
    }

    /**
     * Whether prescriptions can be delivered by mail.
     * @param \Vnetby\Schemaorg\DataTypes\DataBoolean $value
     * @return static
     */
    function setOffersPrescriptionByMail($value)
    {
        return $this->setProp('offersPrescriptionByMail', $value);
    }

    /**
     * The costs to the patient for services under this network or formulary.
     * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getHealthPlanCostSharing()
    {
        return $this->getProp('healthPlanCostSharing');
    }

    /**
     * The tier(s) of drugs offered by this formulary or insurance plan.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getHealthPlanDrugTier()
    {
        return $this->getProp('healthPlanDrugTier');
    }

    /**
     * Whether prescriptions can be delivered by mail.
     * @return \Vnetby\Schemaorg\DataTypes\DataBoolean|null
     */
    function getOffersPrescriptionByMail()
    {
        return $this->getProp('offersPrescriptionByMail');
    }
}
