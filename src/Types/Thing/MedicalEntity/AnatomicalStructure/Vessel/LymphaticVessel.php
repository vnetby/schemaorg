<?php

/**
 * @see https://schema.org/LymphaticVessel
 * A type of blood vessel that specifically carries lymph fluid unidirectionally toward the heart.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Vessel;

class LymphaticVessel extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Vessel\Vessel
{
    const TYPE = 'LymphaticVessel';

    /**
     * The vasculature the lymphatic structure runs, or efferents, to.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Vessel\Vessel
     */
    public $runsTo;

    /**
     * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem
     */
    public $regionDrained;

    /**
     * The vasculature the lymphatic structure originates, or afferents, from.
     * @var \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Vessel\Vessel
     */
    public $originatesFrom;

    /**
     * The vasculature the lymphatic structure runs, or efferents, to.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Vessel\Vessel $value
     * @return static
     */
    function setRunsTo($value)
    {
        return $this->setProp('runsTo', $value);
    }

    /**
     * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem $value
     * @return static
     */
    function setRegionDrained($value)
    {
        return $this->setProp('regionDrained', $value);
    }

    /**
     * The vasculature the lymphatic structure originates, or afferents, from.
     * @param \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Vessel\Vessel $value
     * @return static
     */
    function setOriginatesFrom($value)
    {
        return $this->setProp('originatesFrom', $value);
    }

    /**
     * The vasculature the lymphatic structure runs, or efferents, to.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Vessel\Vessel|null
     */
    function getRunsTo()
    {
        return $this->getProp('runsTo');
    }

    /**
     * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\AnatomicalStructure|\Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalSystem|null
     */
    function getRegionDrained()
    {
        return $this->getProp('regionDrained');
    }

    /**
     * The vasculature the lymphatic structure originates, or afferents, from.
     * @return \Vnetby\Schemaorg\Types\Thing\MedicalEntity\AnatomicalStructure\Vessel\Vessel|null
     */
    function getOriginatesFrom()
    {
        return $this->getProp('originatesFrom');
    }
}
