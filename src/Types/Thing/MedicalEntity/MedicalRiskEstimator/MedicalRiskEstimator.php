<?php

/**
 * @see https://schema.org/MedicalRiskEstimator
 * Any rule set or interactive tool for estimating the risk of developing a complication or condition.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalRiskEstimator;

class MedicalRiskEstimator extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
{
    const TYPE = 'MedicalRiskEstimator';

    /**
     * A modifiable or non-modifiable risk factor included in the calculation, e.g. age, coexisting condition.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalRiskFactor
     */
    public $includedRiskFactor;

    /**
     * The condition, complication, or symptom whose risk is being estimated.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
     */
    public $estimatesRiskOf;

    /**
     * A modifiable or non-modifiable risk factor included in the calculation, e.g. age, coexisting condition.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalRiskFactor $value
     * @return static
     */
    function setIncludedRiskFactor($value)
    {
        return $this->setProp('includedRiskFactor', $value);
    }

    /**
     * The condition, complication, or symptom whose risk is being estimated.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity $value
     * @return static
     */
    function setEstimatesRiskOf($value)
    {
        return $this->setProp('estimatesRiskOf', $value);
    }

    /**
     * A modifiable or non-modifiable risk factor included in the calculation, e.g. age, coexisting condition.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalRiskFactor|null
     */
    function getIncludedRiskFactor()
    {
        return $this->getProp('includedRiskFactor');
    }

    /**
     * The condition, complication, or symptom whose risk is being estimated.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity|null
     */
    function getEstimatesRiskOf()
    {
        return $this->getProp('estimatesRiskOf');
    }
}
