<?php

/**
 * @see https://schema.org/MedicalSignOrSymptom
 * Any feature associated or not with a medical condition. In medicine a symptom is generally subjective while a sign is objective.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom;

class MedicalSignOrSymptom extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition
{
    const TYPE = 'MedicalSignOrSymptom';

    /**
     * A possible treatment to address this condition, sign or symptom.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy
     */
    protected $prop_possibleTreatment;

    /**
     * A possible treatment to address this condition, sign or symptom.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy $value
     * @return static
     */
    function setPossibleTreatment($value)
    {
        return $this->setProp('possibleTreatment', $value);
    }

    /**
     * A possible treatment to address this condition, sign or symptom.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy\MedicalTherapy|null
     */
    function getPossibleTreatment()
    {
        return $this->getProp('possibleTreatment');
    }
}
