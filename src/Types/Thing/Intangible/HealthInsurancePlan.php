<?php

/**
 * @see https://schema.org/HealthInsurancePlan
 * A US-style health insurance plan, including PPOs, EPOs, and HMOs.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class HealthInsurancePlan extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'HealthInsurancePlan';

    /**
     * The tier(s) of drugs offered by this formulary or insurance plan.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_healthPlanDrugTier;

    /**
     * Networks covered by this plan.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\HealthPlanNetwork
     */
    protected $prop_includesHealthPlanNetwork;

    /**
     * The 14-character, HIOS-generated Plan ID number. (Plan IDs must be unique, even across different markets.)
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_healthPlanId;

    /**
     * The standard for interpreting the Plan ID. The preferred is "HIOS". See the Centers for Medicare & Medicaid Services for more
     * details.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_usesHealthPlanIdStandard;

    /**
     * A contact point for a person or organization.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint
     */
    protected $prop_contactPoint;

    /**
     * Formularies covered by this plan.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\HealthPlanFormulary
     */
    protected $prop_includesHealthPlanFormulary;

    /**
     * The URL that goes directly to the plan brochure for the specific standard plan or plan variation.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_healthPlanMarketingUrl;

    /**
     * TODO.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_healthPlanDrugOption;

    /**
     * The URL that goes directly to the summary of benefits and coverage for the specific standard plan or plan variation.
     * @var \Vnetby\Schemaorg\DataTypes\DataURL
     */
    protected $prop_benefitsSummaryUrl;

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
     * Networks covered by this plan.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\HealthPlanNetwork $value
     * @return static
     */
    function setIncludesHealthPlanNetwork($value)
    {
        return $this->setProp('includesHealthPlanNetwork', $value);
    }

    /**
     * The 14-character, HIOS-generated Plan ID number. (Plan IDs must be unique, even across different markets.)
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setHealthPlanId($value)
    {
        return $this->setProp('healthPlanId', $value);
    }

    /**
     * The standard for interpreting the Plan ID. The preferred is "HIOS". See the Centers for Medicare & Medicaid Services for more
     * details.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setUsesHealthPlanIdStandard($value)
    {
        return $this->setProp('usesHealthPlanIdStandard', $value);
    }

    /**
     * A contact point for a person or organization.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint $value
     * @return static
     */
    function setContactPoint($value)
    {
        return $this->setProp('contactPoint', $value);
    }

    /**
     * Formularies covered by this plan.
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\HealthPlanFormulary $value
     * @return static
     */
    function setIncludesHealthPlanFormulary($value)
    {
        return $this->setProp('includesHealthPlanFormulary', $value);
    }

    /**
     * The URL that goes directly to the plan brochure for the specific standard plan or plan variation.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setHealthPlanMarketingUrl($value)
    {
        return $this->setProp('healthPlanMarketingUrl', $value);
    }

    /**
     * TODO.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setHealthPlanDrugOption($value)
    {
        return $this->setProp('healthPlanDrugOption', $value);
    }

    /**
     * The URL that goes directly to the summary of benefits and coverage for the specific standard plan or plan variation.
     * @param \Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setBenefitsSummaryUrl($value)
    {
        return $this->setProp('benefitsSummaryUrl', $value);
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
     * Networks covered by this plan.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\HealthPlanNetwork|null
     */
    function getIncludesHealthPlanNetwork()
    {
        return $this->getProp('includesHealthPlanNetwork');
    }

    /**
     * The 14-character, HIOS-generated Plan ID number. (Plan IDs must be unique, even across different markets.)
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getHealthPlanId()
    {
        return $this->getProp('healthPlanId');
    }

    /**
     * The standard for interpreting the Plan ID. The preferred is "HIOS". See the Centers for Medicare & Medicaid Services for more
     * details.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getUsesHealthPlanIdStandard()
    {
        return $this->getProp('usesHealthPlanIdStandard');
    }

    /**
     * A contact point for a person or organization.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint|null
     */
    function getContactPoint()
    {
        return $this->getProp('contactPoint');
    }

    /**
     * Formularies covered by this plan.
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\HealthPlanFormulary|null
     */
    function getIncludesHealthPlanFormulary()
    {
        return $this->getProp('includesHealthPlanFormulary');
    }

    /**
     * The URL that goes directly to the plan brochure for the specific standard plan or plan variation.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getHealthPlanMarketingUrl()
    {
        return $this->getProp('healthPlanMarketingUrl');
    }

    /**
     * TODO.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getHealthPlanDrugOption()
    {
        return $this->getProp('healthPlanDrugOption');
    }

    /**
     * The URL that goes directly to the summary of benefits and coverage for the specific standard plan or plan variation.
     * @return \Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getBenefitsSummaryUrl()
    {
        return $this->getProp('benefitsSummaryUrl');
    }
}
