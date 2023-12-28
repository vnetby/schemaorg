<?php

/**
 * @see https://schema.org/HealthPlanNetwork
 * A US-style health insurance plan network.
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class HealthPlanNetwork extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'HealthPlanNetwork';

    /**
     * The costs to the patient for services under this network or formulary.
     * @var \Vnetby\Schemaorg\DataTypes\DataBoolean
     */
    protected $prop_healthPlanCostSharing;

    /**
     * Name or unique ID of network. (Networks are often reused across different insurance plans.)
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_healthPlanNetworkId;

    /**
     * The tier(s) for this network.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_healthPlanNetworkTier;

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
     * Name or unique ID of network. (Networks are often reused across different insurance plans.)
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setHealthPlanNetworkId($value)
    {
        return $this->setProp('healthPlanNetworkId', $value);
    }

    /**
     * The tier(s) for this network.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setHealthPlanNetworkTier($value)
    {
        return $this->setProp('healthPlanNetworkTier', $value);
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
     * Name or unique ID of network. (Networks are often reused across different insurance plans.)
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getHealthPlanNetworkId()
    {
        return $this->getProp('healthPlanNetworkId');
    }

    /**
     * The tier(s) for this network.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getHealthPlanNetworkTier()
    {
        return $this->getProp('healthPlanNetworkTier');
    }
}
