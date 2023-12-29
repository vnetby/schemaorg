<?php

/**
 * @see https://schema.org/MedicalRiskScore
 * A simple system that adds up the number of risk factors to yield a score that is associated with prognosis, e.g.
 * CHAD score, TIMI risk score.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalRiskEstimator;

class MedicalRiskScore extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalRiskEstimator\MedicalRiskEstimator
{
    const TYPE = 'MedicalRiskScore';

    /**
     * The algorithm or rules to follow to compute the score.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $algorithm;

    /**
     * The algorithm or rules to follow to compute the score.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setAlgorithm($value)
    {
        return $this->setProp('algorithm', $value);
    }

    /**
     * The algorithm or rules to follow to compute the score.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getAlgorithm()
    {
        return $this->getProp('algorithm');
    }
}
