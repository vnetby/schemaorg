<?php

/**
 * @see https://schema.org/TherapeuticProcedure
 * A medical procedure intended primarily for therapeutic purposes, aimed at improving a health condition.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure;

class TherapeuticProcedure extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalProcedure\MedicalProcedure
{
    const TYPE = 'TherapeuticProcedure';

    /**
     * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\DoseSchedule
     */
    public $doseSchedule;

    /**
     * Specifying a drug or medicine used in a medication procedure.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\Substance\Drug
     */
    public $drug;

    /**
     * A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in
     * death, disability, or permanent damage; requiring hospitalization; or otherwise life-threatening or requiring immediate medical attention), tag it as a seriousAdverseOutcome instead.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
     */
    public $adverseOutcome;

    /**
     * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\DoseSchedule $value
     * @return static
     */
    function setDoseSchedule($value)
    {
        return $this->setProp('doseSchedule', $value);
    }

    /**
     * Specifying a drug or medicine used in a medication procedure.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\Substance\Drug $value
     * @return static
     */
    function setDrug($value)
    {
        return $this->setProp('drug', $value);
    }

    /**
     * A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in
     * death, disability, or permanent damage; requiring hospitalization; or otherwise life-threatening or requiring immediate medical attention), tag it as a seriousAdverseOutcome instead.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity $value
     * @return static
     */
    function setAdverseOutcome($value)
    {
        return $this->setProp('adverseOutcome', $value);
    }

    /**
     * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\DoseSchedule|null
     */
    function getDoseSchedule()
    {
        return $this->getProp('doseSchedule');
    }

    /**
     * Specifying a drug or medicine used in a medication procedure.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\Substance\Drug|null
     */
    function getDrug()
    {
        return $this->getProp('drug');
    }

    /**
     * A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in
     * death, disability, or permanent damage; requiring hospitalization; or otherwise life-threatening or requiring immediate medical attention), tag it as a seriousAdverseOutcome instead.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity|null
     */
    function getAdverseOutcome()
    {
        return $this->getProp('adverseOutcome');
    }
}
