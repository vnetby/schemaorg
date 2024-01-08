<?php

/**
 * @see https://schema.org/Nerve
 * A common pathway for the electrochemical nerve impulses that are transmitted along each of the axons.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure;

class Nerve extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure
{
    const TYPE = 'Nerve';

    /**
     * The neurological pathway extension that inputs and sends information to the brain or spinal cord.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\SuperficialAnatomy
     */
    public $sensoryUnit;

    /**
     * The neurological pathway extension that involves muscle control.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Muscle
     */
    public $nerveMotor;

    /**
     * The neurological pathway that originates the neurons.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\BrainStructure
     */
    public $sourcedFrom;

    /**
     * The neurological pathway extension that inputs and sends information to the brain or spinal cord.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\SuperficialAnatomy $value
     * @return static
     */
    function setSensoryUnit($value)
    {
        return $this->setProp('sensoryUnit', $value);
    }

    /**
     * The neurological pathway extension that involves muscle control.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Muscle $value
     * @return static
     */
    function setNerveMotor($value)
    {
        return $this->setProp('nerveMotor', $value);
    }

    /**
     * The neurological pathway that originates the neurons.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\BrainStructure $value
     * @return static
     */
    function setSourcedFrom($value)
    {
        return $this->setProp('sourcedFrom', $value);
    }

    /**
     * The neurological pathway extension that inputs and sends information to the brain or spinal cord.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\SuperficialAnatomy|null
     */
    function getSensoryUnit()
    {
        return $this->getProp('sensoryUnit');
    }

    /**
     * The neurological pathway extension that involves muscle control.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Muscle|null
     */
    function getNerveMotor()
    {
        return $this->getProp('nerveMotor');
    }

    /**
     * The neurological pathway that originates the neurons.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\BrainStructure|null
     */
    function getSourcedFrom()
    {
        return $this->getProp('sourcedFrom');
    }
}
