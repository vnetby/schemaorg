<?php

/**
 * @see https://schema.org/OccupationalExperienceRequirements
 * Indicates employment-related experience requirements, e.g. [[monthsOfExperience]].
 */

namespace Vnetby\Schemaorg\Types\Thing\Intangible;

class OccupationalExperienceRequirements extends \Vnetby\Schemaorg\Types\Thing\Intangible\Intangible
{
    const TYPE = 'OccupationalExperienceRequirements';

    /**
     * Indicates the minimal number of months of experience required for a position.
     * @var string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber
     */
    public $monthsOfExperience;

    /**
     * Indicates the minimal number of months of experience required for a position.
     * @param string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber $value
     * @return static
     */
    function setMonthsOfExperience($value)
    {
        return $this->setProp('monthsOfExperience', $value);
    }

    /**
     * Indicates the minimal number of months of experience required for a position.
     * @return string|int|float|\Vnetby\Schemaorg\DataTypes\DataNumber|null
     */
    function getMonthsOfExperience()
    {
        return $this->getProp('monthsOfExperience');
    }
}
