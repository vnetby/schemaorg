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
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $frequency;

    /**
     * The value of the dose, e.g. 500.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue
     */
    public $doseValue;

    /**
     * The unit of the dose, e.g. 'mg'.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $doseUnit;

    /**
     * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
     * @var string|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $targetPopulation;

    /**
     * How often the dose is taken, e.g. 'daily'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setFrequency($value)
    {
        return $this->setProp('frequency', $value);
    }

    /**
     * The value of the dose, e.g. 500.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue $value
     * @return static
     */
    function setDoseValue($value)
    {
        return $this->setProp('doseValue', $value);
    }

    /**
     * The unit of the dose, e.g. 'mg'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setDoseUnit($value)
    {
        return $this->setProp('doseUnit', $value);
    }

    /**
     * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
     * @param string|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setTargetPopulation($value)
    {
        return $this->setProp('targetPopulation', $value);
    }

    /**
     * How often the dose is taken, e.g. 'daily'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getFrequency()
    {
        return $this->getProp('frequency');
    }

    /**
     * The value of the dose, e.g. 500.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\QualitativeValue\QualitativeValue|null
     */
    function getDoseValue()
    {
        return $this->getProp('doseValue');
    }

    /**
     * The unit of the dose, e.g. 'mg'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getDoseUnit()
    {
        return $this->getProp('doseUnit');
    }

    /**
     * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
     * @return string|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getTargetPopulation()
    {
        return $this->getProp('targetPopulation');
    }
}
