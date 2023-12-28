<?php

/**
 * @see https://schema.org/DrugLegalStatus
 * The legal availability status of a medical drug.
 */

namespace Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible;

class DrugLegalStatus extends \Vnetby\Schemaorg\Types\Thing\MedicalEntity\MedicalIntangible\MedicalIntangible
{
    const TYPE = 'DrugLegalStatus';

    /**
     * The location in which the status applies.
     * @var \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea
     */
    protected $prop_applicableLocation;

    /**
     * The location in which the status applies.
     * @param \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea $value
     * @return static
     */
    function setApplicableLocation($value)
    {
        return $this->setProp('applicableLocation', $value);
    }

    /**
     * The location in which the status applies.
     * @return \Vnetby\Schemaorg\Types\Thing\Place\AdministrativeArea\AdministrativeArea|null
     */
    function getApplicableLocation()
    {
        return $this->getProp('applicableLocation');
    }
}
