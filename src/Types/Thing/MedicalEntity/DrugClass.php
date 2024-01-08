<?php

/**
 * @see https://schema.org/DrugClass
 * A class of medical drugs, e.g., statins. Classes can represent general pharmacological class, common mechanisms of action, common physiological effects, etc.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity;

class DrugClass extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
{
    const TYPE = 'DrugClass';

    /**
     * Specifying a drug or medicine used in a medication procedure.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\Substance\Drug
     */
    public $drug;

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
     * Specifying a drug or medicine used in a medication procedure.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\Substance\Drug|null
     */
    function getDrug()
    {
        return $this->getProp('drug');
    }
}
