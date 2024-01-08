<?php

/**
 * @see https://schema.org/MedicalTest
 * Any medical test, typically performed for diagnostic purposes.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalTest;

class MedicalTest extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalEntity
{
    const TYPE = 'MedicalTest';

    /**
     * Drugs that affect the test's results.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\Substance\Drug
     */
    public $affectedBy;

    /**
     * Device used to perform the test.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalDevice
     */
    public $usesDevice;

    /**
     * A sign detected by the test.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSign\MedicalSign
     */
    public $signDetected;

    /**
     * Range of acceptable values for a typical patient, when applicable.
     * @var string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEnumeration|\Vnetby\Schemaorg\DataTypes\DataText
     */
    public $normalRange;

    /**
     * A condition the test is used to diagnose.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition
     */
    public $usedToDiagnose;

    /**
     * Drugs that affect the test's results.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\Substance\Drug $value
     * @return static
     */
    function setAffectedBy($value)
    {
        return $this->setProp('affectedBy', $value);
    }

    /**
     * Device used to perform the test.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalDevice $value
     * @return static
     */
    function setUsesDevice($value)
    {
        return $this->setProp('usesDevice', $value);
    }

    /**
     * A sign detected by the test.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSign\MedicalSign $value
     * @return static
     */
    function setSignDetected($value)
    {
        return $this->setProp('signDetected', $value);
    }

    /**
     * Range of acceptable values for a typical patient, when applicable.
     * @param string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEnumeration|\Vnetby\Schemaorg\DataTypes\DataText $value
     * @return static
     */
    function setNormalRange($value)
    {
        return $this->setProp('normalRange', $value);
    }

    /**
     * A condition the test is used to diagnose.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition $value
     * @return static
     */
    function setUsedToDiagnose($value)
    {
        return $this->setProp('usedToDiagnose', $value);
    }

    /**
     * Drugs that affect the test's results.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\Substance\Drug|null
     */
    function getAffectedBy()
    {
        return $this->getProp('affectedBy');
    }

    /**
     * Device used to perform the test.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalDevice|null
     */
    function getUsesDevice()
    {
        return $this->getProp('usesDevice');
    }

    /**
     * A sign detected by the test.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSign\MedicalSign|null
     */
    function getSignDetected()
    {
        return $this->getProp('signDetected');
    }

    /**
     * Range of acceptable values for a typical patient, when applicable.
     * @return string|\Vnetby\Schemaorg\Types\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEnumeration|\Vnetby\Schemaorg\DataTypes\DataText|null
     */
    function getNormalRange()
    {
        return $this->getProp('normalRange');
    }

    /**
     * A condition the test is used to diagnose.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalCondition\MedicalCondition|null
     */
    function getUsedToDiagnose()
    {
        return $this->getProp('usedToDiagnose');
    }
}
