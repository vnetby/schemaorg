<?php

/**
 * @see https://schema.org/DoseSchedule
 * A specific dosing schedule for a drug or supplement.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\DoseSchedule;

class DoseSchedule extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\MedicalIntangible
{
    const TYPE = 'DoseSchedule';

    /**
     * How often the dose is taken, e.g. 'daily'.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_frequency;

    /**
     * The value of the dose, e.g. 500.
     * @var \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue
     */
    protected $prop_doseValue;

    /**
     * The unit of the dose, e.g. 'mg'.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_doseUnit;

    /**
     * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
     * @var \Vnetby\Schemaorg\DataTypes\DataText
     */
    protected $prop_targetPopulation;

    /**
     * How often the dose is taken, e.g. 'daily'.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setFrequency($value)
    {
        return $this->setProp('frequency', $value);
    }

    /**
     * The value of the dose, e.g. 500.
     * @param \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue $value
     * @return static
     */
    function setDoseValue($value)
    {
        return $this->setProp('doseValue', $value);
    }

    /**
     * The unit of the dose, e.g. 'mg'.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setDoseUnit($value)
    {
        return $this->setProp('doseUnit', $value);
    }

    /**
     * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
     * @param \Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTargetPopulation($value)
    {
        return $this->setProp('targetPopulation', $value);
    }

    /**
     * How often the dose is taken, e.g. 'daily'.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getFrequency()
    {
        return $this->getProp('frequency');
    }

    /**
     * The value of the dose, e.g. 500.
     * @return \Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|null
     */
    function getDoseValue()
    {
        return $this->getProp('doseValue');
    }

    /**
     * The unit of the dose, e.g. 'mg'.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getDoseUnit()
    {
        return $this->getProp('doseUnit');
    }

    /**
     * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
     * @return \Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTargetPopulation()
    {
        return $this->getProp('targetPopulation');
    }
}
