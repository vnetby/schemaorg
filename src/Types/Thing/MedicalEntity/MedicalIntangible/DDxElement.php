<?php

/**
 * @see https://schema.org/DDxElement
 * An alternative, closely-related condition typically considered later in the differential diagnosis process along with the signs that are used to distinguish
 * it.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible;

class DDxElement extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\MedicalIntangible
{
    const TYPE = 'DDxElement';

    /**
     * One of a set of signs and symptoms that can be used to distinguish this diagnosis from others in the differential
     * diagnosis.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSignOrSymptom
     */
    protected $prop_distinguishingSign;

    /**
     * One or more alternative conditions considered in the differential diagnosis process as output of a diagnosis process.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition
     */
    protected $prop_diagnosis;

    /**
     * One of a set of signs and symptoms that can be used to distinguish this diagnosis from others in the differential
     * diagnosis.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSignOrSymptom $value
     * @return static
     */
    function setDistinguishingSign($value)
    {
        return $this->setProp('distinguishingSign', $value);
    }

    /**
     * One or more alternative conditions considered in the differential diagnosis process as output of a diagnosis process.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition $value
     * @return static
     */
    function setDiagnosis($value)
    {
        return $this->setProp('diagnosis', $value);
    }

    /**
     * One of a set of signs and symptoms that can be used to distinguish this diagnosis from others in the differential
     * diagnosis.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSignOrSymptom|null
     */
    function getDistinguishingSign()
    {
        return $this->getProp('distinguishingSign');
    }

    /**
     * One or more alternative conditions considered in the differential diagnosis process as output of a diagnosis process.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition|null
     */
    function getDiagnosis()
    {
        return $this->getProp('diagnosis');
    }
}
