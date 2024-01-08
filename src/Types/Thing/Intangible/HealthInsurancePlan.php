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
     * Networks covered by this plan.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\HealthPlanNetwork
     */
    public $includesHealthPlanNetwork;

    /**
     * The standard for interpreting the Plan ID. The preferred is "HIOS". See the Centers for Medicare & Medicaid Services for more
     * details.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $usesHealthPlanIdStandard;

    /**
     * A contact point for a person or organization.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\StructuredValue\ContactPoint\ContactPoint
     */
    public $contactPoint;

    /**
     * TODO.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $healthPlanDrugOption;

    /**
     * The tier(s) of drugs offered by this formulary or insurance plan.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $healthPlanDrugTier;

    /**
     * The 14-character, HIOS-generated Plan ID number. (Plan IDs must be unique, even across different markets.)
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $healthPlanId;

    /**
     * The URL that goes directly to the plan brochure for the specific standard plan or plan variation.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $healthPlanMarketingUrl;

    /**
     * Formularies covered by this plan.
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\HealthPlanFormulary
     */
    public $includesHealthPlanFormulary;

    /**
     * The URL that goes directly to the summary of benefits and coverage for the specific standard plan or plan variation.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataURL
     */
    public $benefitsSummaryUrl;

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
     * The standard for interpreting the Plan ID. The preferred is "HIOS". See the Centers for Medicare & Medicaid Services for more
     * details.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL $value
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
     * TODO.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setHealthPlanDrugOption($value)
    {
        return $this->setProp('healthPlanDrugOption', $value);
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
     * The 14-character, HIOS-generated Plan ID number. (Plan IDs must be unique, even across different markets.)
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setHealthPlanId($value)
    {
        return $this->setProp('healthPlanId', $value);
    }

    /**
     * The URL that goes directly to the plan brochure for the specific standard plan or plan variation.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setHealthPlanMarketingUrl($value)
    {
        return $this->setProp('healthPlanMarketingUrl', $value);
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
     * The URL that goes directly to the summary of benefits and coverage for the specific standard plan or plan variation.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataURL $value
     * @return static
     */
    function setBenefitsSummaryUrl($value)
    {
        return $this->setProp('benefitsSummaryUrl', $value);
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
     * The standard for interpreting the Plan ID. The preferred is "HIOS". See the Centers for Medicare & Medicaid Services for more
     * details.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|\Vnetby\Schemaorg\DataTypes\DataURL|null
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
     * TODO.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getHealthPlanDrugOption()
    {
        return $this->getProp('healthPlanDrugOption');
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
     * The 14-character, HIOS-generated Plan ID number. (Plan IDs must be unique, even across different markets.)
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getHealthPlanId()
    {
        return $this->getProp('healthPlanId');
    }

    /**
     * The URL that goes directly to the plan brochure for the specific standard plan or plan variation.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getHealthPlanMarketingUrl()
    {
        return $this->getProp('healthPlanMarketingUrl');
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
     * The URL that goes directly to the summary of benefits and coverage for the specific standard plan or plan variation.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataURL|null
     */
    function getBenefitsSummaryUrl()
    {
        return $this->getProp('benefitsSummaryUrl');
    }
}
