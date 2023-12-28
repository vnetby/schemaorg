<?php

/**
 * @see https://schema.org/MedicalCause
 * The causative agent(s) that are responsible for the pathophysiologic process that eventually results in a medical condition, symptom or sign. In
 * this schema, unless otherwise specified this is meant to be the proximate cause of the medical condition, symptom or sign. The
 * proximate cause is defined as the causative agent that most directly results in the medical condition, symptom or sign. For example,
 * the HIV virus could be considered a cause of AIDS. Or in a diagnostic context, if a patient fell and sustained
 * a hip fracture and two days later sustained a pulmonary embolism which eventuated in a cardiac arrest, the cause of the
 * cardiac arrest (the proximate cause) would be the pulmonary embolism and not the fall. Medical causes can include cardiovascular, chemical, dermatologic,
 * endocrine, environmental, gastroenterologic, genetic, hematologic, gynecologic, iatrogenic, infectious, musculoskeletal, neurologic, nutritional, obstetric, oncologic, otolaryngologic, pharmacologic, psychiatric, pulmonary, renal, rheumatologic, toxic, traumatic,
 * or urologic causes; medical conditions can be causes as well.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity;

class MedicalCause extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
{
    const TYPE = 'MedicalCause';

    /**
     * The condition, complication, symptom, sign, etc. caused.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
     */
    protected $prop_causeOf;

    /**
     * The condition, complication, symptom, sign, etc. caused.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity $value
     * @return static
     */
    function setCauseOf($value)
    {
        return $this->setProp('causeOf', $value);
    }

    /**
     * The condition, complication, symptom, sign, etc. caused.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity|null
     */
    function getCauseOf()
    {
        return $this->getProp('causeOf');
    }
}
