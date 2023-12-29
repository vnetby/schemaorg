<?php

/**
 * @see https://schema.org/MedicalGuidelineRecommendation
 * A guideline recommendation that is regarded as efficacious and where quality of the data supporting the recommendation is sound.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalGuideline;

class MedicalGuidelineRecommendation extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalGuideline\MedicalGuideline
{
    const TYPE = 'MedicalGuidelineRecommendation';

    /**
     * Strength of the guideline's recommendation (e.g. 'class I').
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $recommendationStrength;

    /**
     * Strength of the guideline's recommendation (e.g. 'class I').
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setRecommendationStrength($value)
    {
        return $this->setProp('recommendationStrength', $value);
    }

    /**
     * Strength of the guideline's recommendation (e.g. 'class I').
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getRecommendationStrength()
    {
        return $this->getProp('recommendationStrength');
    }
}
