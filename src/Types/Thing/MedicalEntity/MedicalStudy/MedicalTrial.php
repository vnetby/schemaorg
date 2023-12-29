<?php

/**
 * @see https://schema.org/MedicalTrial
 * A medical trial is a type of medical study that uses a scientific process to compare the safety and efficacy of
 * medical therapies or medical procedures. In general, medical trials are controlled and subjects are allocated at random to the different treatment
 * and/or control groups.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalStudy;

class MedicalTrial extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalStudy\MedicalStudy
{
    const TYPE = 'MedicalTrial';

    /**
     * Specifics about the trial design (enumerated).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalTrialDesign\MedicalTrialDesign
     */
    public $trialDesign;

    /**
     * Specifics about the trial design (enumerated).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalTrialDesign\MedicalTrialDesign $value
     * @return static
     */
    function setTrialDesign($value)
    {
        return $this->setProp('trialDesign', $value);
    }

    /**
     * Specifics about the trial design (enumerated).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalTrialDesign\MedicalTrialDesign|null
     */
    function getTrialDesign()
    {
        return $this->getProp('trialDesign');
    }
}
