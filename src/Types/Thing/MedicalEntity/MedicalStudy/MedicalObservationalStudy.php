<?php

/**
 * @see https://schema.org/MedicalObservationalStudy
 * An observational study is a type of medical study that attempts to infer the possible effect of a treatment through observation
 * of a cohort of subjects over a period of time. In an observational study, the assignment of subjects into treatment groups
 * versus control groups is outside the control of the investigator. This is in contrast with controlled studies, such as the randomized
 * controlled trials represented by MedicalTrial, where each subject is randomly assigned to a treatment group or a control group before the
 * start of the treatment.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalStudy;

class MedicalObservationalStudy extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalStudy\MedicalStudy
{
    const TYPE = 'MedicalObservationalStudy';

    /**
     * Specifics about the observational study design (enumerated).
     * @var \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalObservationalStudyDesign\MedicalObservationalStudyDesign
     */
    public $studyDesign;

    /**
     * Specifics about the observational study design (enumerated).
     * @param \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalObservationalStudyDesign\MedicalObservationalStudyDesign $value
     * @return static
     */
    function setStudyDesign($value)
    {
        return $this->setProp('studyDesign', $value);
    }

    /**
     * Specifics about the observational study design (enumerated).
     * @return \Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalObservationalStudyDesign\MedicalObservationalStudyDesign|null
     */
    function getStudyDesign()
    {
        return $this->getProp('studyDesign');
    }
}
